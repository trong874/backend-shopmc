<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
{
    protected $module = '';

    public function __construct(Request $request)
    {
        $this->module = $request->segment(2);
    }

    public function index()
    {
        $groups = Group::with('groups')
            ->where('module', $this->module)
            ->orderBy('order', 'ASC')
            ->get(['id', 'title', 'parent_id']);
        return view('backend.groups.list', [
            'page_title'=>'Category '.$this->module,
            'module' => $this->module,
            'groups' => $groups]);
    }

    public function create()
    {
        return view('backend.groups.form-data', [
            'groups' => $this->getGroupsByModule(),
            'page_title' => 'Tạo mới danh mục ' . $this->module,
            'module' => $this->module
        ]);
    }

    public function store(Request $request)
    {
        Group::create([
            'title' => $request->title,
            'position'=>$request->position,
            'module' => $request->module,
            'slug'=>$request->slug,
            'parent_id' => $request->parent_id,
            'image' => $request->image,
            'author_id' => $request->author_id
        ]);
        Session::put('message','Tạo mới thành công');
        return view('backend.groups.form-data', [
            'groups' => $this->getGroupsByModule(),
            'page_title' => 'Tạo mới danh mục ' . $this->module,
            'module' => $this->module
        ]);
    }

    public function edit($group)
    {
        $group = Group::findOrFail($group, [
            'id',
            'position',
            'title',
            'slug',
            'parent_id',
            'image'
        ]);

        return view('backend.groups.form-data', [
            'groups' => $this->getGroupsByModule(),
            'group' => $group,
            'page_title' => 'Tạo mới danh mục ' . $this->module,
            'module' => $this->module
        ]);
    }

    public function update(Request $request, $group)
    {
        $group = Group::findOrFail($group);
        $group->update([
            'position'=>$request->position,
            'title' => $request->title,
            'slug'=>$request->slug,
            'parent_id' => $request->parent_id,
            'image' => $request->image
        ]);
        Session::put('message','chỉnh sửa thành công');
        return back();
    }

    public function getGroupsByModule()
    {
        return Group::where('module',$this->module)->get(['id', 'title']);
    }

    function saveList(Request $list)
    {
        $this->recursive($list->all()['list']);
        return response()->json('cập nhật danh sách thành công', 200);
    }

    public function recursive($list, $parent_id = null, &$order = 0)
    {
        foreach ($list as $item) {
            $order++;
            $group = Group::find($item['id']);
            $group->order = $order;
            $group->parent_id = $parent_id;
            $group->save();
            if (array_key_exists('children', $item)) {
                $this->recursive($item["children"], $item["id"], $order);
            }
        }
    }

    public function destroy($id)
    {
        $groups = Group::findOrFail($id);
        $groups->item()->detach();
        $groups->delete();
        return redirect()->back();
    }

    public function destroyMuch(Request $request)
    {
        $ids = $request->ids;
        Group::whereIn('id', explode(",", $ids))->delete();
    }
}
