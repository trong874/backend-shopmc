<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Group_Item;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
{
    protected $module;

    public function __construct(Request $request)
    {
        $this->module = $request->segment(2);
    }

    public function index()
    {
        $groups = Group::where('module', $this->module)->paginate(10);
        return view('backend.groups.list', [
            'module' => $this->module,
            'groups' => $groups
        ]);
    }

    public function create()
    {
        return view('backend.groups.form-data', [
            'groups' =>$this->getGroupsByModule(),
            'module' => $this->module,
        ]);
    }

    public function store(Request $request)
    {
        $data_group = $request->all();
        Group::create($data_group);
        Session::put('message', 'Tạo mới thành công');
        return view('backend.groups.form-data', [
            'page_title' => 'Tạo mới nhóm ' . $this->module,
            'module' => $this->module
        ]);
    }

    public function edit($group)
    {
        $group = Group::findOrFail($group);
        return view('backend.groups.form-data', [
            'groups' =>$this->getGroupsByModule(),
            'module' => $this->module,
            'group' => $group
        ]);
    }

    public function update(Request $request, $group)
    {
        $data_group = $request->all();
        $group = Group::findOrFail($group);
        $group->update($data_group);
        Session::put('message', 'Chỉnh sửa thành công');
        return back();
    }

    public function destroy($group)
    {
        Group::destroy($group);
        Session::put('message', 'Xoá thành công group số '.$group);
        return back();
    }

    public function addItemIntoGroup(Request $request)
    {
        $item_id = $request->item_id;
        $group_id = $request->group_id;

        $check = Group_Item::whereItem_id($item_id)->whereGroup_id($group_id)->first();
        if ($check){
            return response()->json([
                'error_message'=>'Item đã tồn tại trong nhóm này.'
            ]);
        }
        $item = Item::findOrFail($item_id);

        $item->groups()->attach($group_id);

        $group = Group::findOrFail($group_id);
        $html = view('backend.groups.table_item_in_group',compact('group'))->render();
        return response()->json([
            'html'=>$html,
            'message'=>'Đã thêm item '.$item->title.' vào nhóm',
        ]);
    }

    public function deleteItemInGroup(Request $request)
    {
        $item = Item::findOrFail($request->item_id);
        $item->groups()->detach($request->group_id);
        $group = Group::findOrFail($request->group_id);
        $html = view('backend.groups.table_item_in_group',compact('group'))->render();
        return response()->json([
            'html'=>$html,
            'message'=>'Đã xoá item số '.$item->id.' khỏi nhóm']);
    }

    public function getGroupsByModule()
    {
        return Group::where('module',$this->module)->get(['id', 'title']);
    }
}
