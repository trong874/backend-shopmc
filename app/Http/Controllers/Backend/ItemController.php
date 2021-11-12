<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ItemController extends Controller
{
    protected $module = '';

    public function __construct(Request $request)
    {
        $this->module = $request->segment(2);
    }

    public function index()
    {
        $items = Item::where('module', $this->module)->paginate(10);
        return view('backend.items.list', [
            'page_title' => $this->module,
            'items' => $items,
            'groups' => $this->getGroupsByModule(),
            'module' => $this->module]);
    }

    public function create()
    {
        $groups = Group::where('module', 'category-' . $this->module)->get(['id', 'title', 'parent_id']);
        return view('backend.items.form-data', [
            'module' => $this->module,
            'groups' => $groups,
            'page_title' => 'Tạo mới ' . $this->module
        ]);
    }

    public function store(Request $request)
    {
        $item = Item::create($request->all());
        foreach ($request->group_id as $group_id){
            $item->groups()->attach($group_id);
        }
        Session::put('message', 'Tạo mới thành công');
        return back();
    }

    public function edit($item)
    {
        $item = Item::with('groups')->findOrFail($item);
        return view('backend.items.form-data', [
            'item' => $item,
            'module' => $this->module,
            'groups' => $this->getGroupsByModule(),
            'page_title' => 'Chỉnh sửa ' . $this->module
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        foreach ($request->group_id as $group_id){
            $item->groups()->sync($group_id);
        }
        $item->update($request->all());
        Session::put('message', 'Cập nhật thay đổi thành công');
        return back();
    }

    public function destroy($item)
    {
        $item = Item::findOrFail($item);
        $item->groups()->detach();
        $item->delete();
        return back();
    }

    public function destroyMuch(Request $request)
    {
        $ids = $request->ids;
        Item::whereIn('id', explode(",", $ids))->delete();
    }

    public function filter(Request $request, $module)
    {
        $q = Item::query();
        $q->where('module', $module);
        if (isset($request->group_id)) {
            $q->whereHas('groups', function (\Illuminate\Database\Eloquent\Builder $q) use ($request) {
                $group_id = $request->group_id;
                $q->where('groups.id', $group_id);
            });
        }
        if ($request->id) {
            $q->where('id', $request->id);
        }
        if ($request->title) {
            $q->where('title', 'LIKE', '%' . $request->title . '%');
        }
        if ($request->position) {
            $q->where('position', 'LIKE', '%' . $request->position . '%');
        }
        if ($request->date_from && $request->date_to) {
            $q->whereBetween('created_at', [$request->date_from, $request->date_to]);
        }
        if ($request->date_from) {
            $q->where('created_at', '>=', $request->date_from);
        }
        $items = $q->paginate(10);
        $old_data = $request->all();
        return view('backend.items.list', [
            'old_data' => $old_data,
            'page_title' => $this->module,
            'items' => $items,
            'groups' => $this->getGroupsByModule(),
            'module' => $this->module]);
    }

    public function getGroupsByModule()
    {
        return Group::where('module', 'category-' . $this->module)->get(['id', 'title','parent_id']);
    }
}
