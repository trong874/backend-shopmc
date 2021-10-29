<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $module = '';

    public function __construct(Request $request)
    {
        $this->module = $request->segment(1);
    }

    public function index()
    {
        $items = Item::where('module', $this->module)->paginate(5);
        return view('backend.items.list', [
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
        unset($request->all()->_token);
        $item = Item::create($request->all());
        $item->groups()->attach($request->group_id);
        return back();
    }

    public function edit($item)
    {
        $item = Item::findOrFail($item);
        return view('backend.items.form-data', [
            'item' => $item,
            'module' => $this->module,
            'groups' => $this->getGroupsByModule(),
            'page_title' => 'Tạo mới ' . $this->module
        ]);
    }

    public function destroy($item)
    {
        Item::destroy($item);
        return back();
    }

    public function destroyMuch(Request $request)
    {
        $ids = $request->ids;
        Item::whereIn('id', explode(",", $ids))->delete();
    }

    public function getGroupsByModule()
    {
        return Group::where('module', 'category-' . $this->module)->get(['id', 'title']);

    }
}
