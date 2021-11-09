@if(isset($users))
    @foreach($users as $user)
        <tr>
            <td><input type="checkbox" class="sub_chk" data-id="{{$user->id}}"></td>
            <td>{{$user->id}}</td>
            <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                <a href="#">{{$user->username}}</a></td>
            <td>
                @switch($user->account_type)
                    @case(0)
                    {{__('Người dùng')}}
                    @break
                    @case(1)
                    {{__('Quản trị viên')}}
                    @break
                @endswitch
            </td>
            <td><img src="{{$user->image}}" alt="" style="max-height: 50px"></td>
            <td>{{$user->email}}</td>
            <td>
                @if($user->status == 1)
                    <span class="label label-outline-success label-inline">đang hoạt động</span>
                @else
                    <span class="label label-outline-danger label-inline">không hoạt động</span>
                @endif
            </td>
            <td>{{@$user->users->username}}</td>
            <td>{{$user->created_at}}</td>
            <td nowrap="nowrap">
                <!-- Button trigger modal-->
                <!-- Modal-->
                <div class="modal fade" id="form_delete-{{$user->id}}" data-backdrop="static"
                     tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                Xác nhận thao tác xóa người dùng {{$user->username}}
                            </div>
                            <div class="modal-footer">
                                <form action="{{route("$account_type.destroy",$user)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                            data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-danger font-weight-bold">Xóa
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route("$account_type.edit",$user)}}">
                    <i class="flaticon-edit m-2 link_edit"></i>
                </a>
                <i class="flaticon2-rubbish-bin-delete-button m-2 link_delete" data-toggle="modal"
                   data-target="#form_delete-{{$user->id}}"></i>
                <style>
                    .link_delete:hover {
                        color: red;
                    }

                    .link_edit:hover {
                        color: #ffa500;
                    }
                </style>
            </td>
        </tr>
    @endforeach
@endif
