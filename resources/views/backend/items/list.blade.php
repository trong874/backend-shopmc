@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <form id="form-filter" action="{{route('items.filter',$module)}}" method="GET" class="card">
        <div class="card-header">
            <span>{{__('Bộ lọc')}}</span>
        </div>
        <div class="row card-body">
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="id" class="form-control" placeholder="ID"
                           value="{{$old_data['id'] ?? ''}}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="title" class="form-control" placeholder="{{__('Tiêu đề')}}"
                           value="{{$old_data['title'] ?? ''}}">
                </div>
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <select name="group_id" id="group_id" class="form-control">
                        <option value="">--Group ID--</option>
                        @if(isset($groups))
                            @if(isset($old_data))
                                {{showCategories($groups,$old_data)}}
                            @else
                                {{showCategories($groups)}}
                            @endif
                        @endif
                    </select>
                </div>
            </div>

            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-times"></i></span>
                    </div>
                    <input type="text" name="position" class="form-control" placeholder="{{__('Vị trí')}}"
                           value="{{$old_data['position'] ?? ''}}">
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">{{__('Từ')}}</span>
                    </div>
                    <input type="datetime-local" name="date_form" class="form-control" placeholder="Từ thời gian"
                           value="{{$old_data['date_form'] ?? ''}}">
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">{{__('Đến')}}</span>
                    </div>
                    <input type="datetime-local" name="date_to" class="form-control" placeholder="đến đến"
                           value="{{$old_data['date_to'] ?? ''}}">
                </div>
            </div>
            <div class="col-3 mt-3"></div>
            <div class="col-3 mt-3"></div>
            <div class="col-3 mt-3">
                <button class="btn btn-success" type="submit">{{__('Tìm kiếm')}}</button>
                <button type="reset" class="btn btn-outline-warning">{{__('Đặt lại')}}</button>
            </div>
        </div>
    </form>

    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon">
                    <i class="flaticon2-favourite text-primary"></i>
                </span>
                <h3 class="card-label">HTML(DOM) Sourced Data</h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <button type="button" class="btn btn-light-danger font-weight-bolder mr-5" data-toggle="modal"
                        data-target="#confirm_delete_all">
                    <i class="far fa-trash-alt"></i>{{__('Xoá lựa chọn')}}
                </button>
                <!--end::Dropdown-->
                <div class="modal fade" id="confirm_delete_all" data-backdrop="static" tabindex="-1" role="dialog"
                     aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                Xác nhận thao tác xóa item đã chọn ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">Close
                                </button>
                                <p class="btn btn-danger font-weight-bold" id="delete_all"
                                   data-url="{{ route('items.destroy_many') }}">Xóa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Button-->
                <a href='{{route("$module.create")}}' class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>{{__('Thêm bản ghi')}}</a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-bordered table-hover table-checkable" id="kt_datatable"
                   style="margin-top: 13px !important">
                <thead>
                <tr>
                    <th><input type="checkbox" id="master"></th>
                    <th>ID</th>
                    <th>{{__('Tiêu đề')}}</th>
                    <th>{{__('Danh mục')}}</th>
                    <th>{{__('Ảnh')}}</th>
                    <th>{{__('Vị trí')}}</th>
                    <th>{{__('Thứ tự')}}    </th>
                    <th>{{__('Trạng thái')}}</th>
                    <th>{{__('Thời gian tạo')}}</th>
                    <th>{{__('Thao tác')}}</th>
                </tr>
                </thead>
                <tbody class="data_table">
                @if(isset($items))
                    @foreach($items as $item)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                            <td>{{$item->id}}</td>
                            <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                                <a href="{{$item->url}}">{{$item->title}}</a></td>
                            <td>{{@$item->groups[0]->id.'-'.@$item->groups[0]->title}}</td>
                            <td><img src="{{$item->image}}" alt="" style="max-height: 50px"></td>
                            <td>{{$item->position}}</td>
                            <td>{{$item->order}}</td>
                            <td>
                                @if($item->status == 1)
                                    <span class="label label-outline-success label-inline">đang hoạt động</span>
                                @else
                                    <span class="label label-outline-danger label-inline">không hoạt động</span>
                                @endif
                            </td>
                            <td>{{$item->created_at}}</td>
                            <td nowrap="nowrap">
                                <!-- Button trigger modal-->
                                <!-- Modal-->
                                <div class="modal fade" id="form_delete-{{$item->id}}" data-backdrop="static"
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
                                                Xác nhận thao tác xóa item {{$item->title}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{route("$module.destroy",$item)}}" method="POST">
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
                                <a href="{{route("$module.edit",$item)}}">
                                    <i class="flaticon-edit m-2 link_edit"></i>
                                </a>
                                <i class="flaticon2-rubbish-bin-delete-button m-2 link_delete" data-toggle="modal"
                                   data-target="#form_delete-{{$item->id}}"></i>
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
                </tbody>
            </table>
            <div class="row" style="float:right">
                {{ $items->links('pagination::bootstrap-4') }}
            </div>
            <!--end: Datatable-->
        </div>
    </div>
    <?php
    function showCategories($categories, $old_data = [], $parent_id = 0, $char = ' ')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item->parent_id == $parent_id) {

                if (isset($old_data['group_id'])) {
                    if ($old_data['group_id'] == $item->id) {
                        echo '<option value="' . $item->id . '" selected>' . $item->id . $char . $item->title . '</option>';
                    } else {
                        echo '<option value="' . $item->id . '">' . $item->id . $char . $item->title . '</option>';
                    }
                } else {
                    echo '<option value="' . $item->id . '">' . $item->id . $char . $item->title . '</option>';
                }
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $old_data, $item->id, $char . '--');
            }
        }
    }
    ?>
@endsection
@section('scripts')
    <script src="{{asset('assets/js/backend.js')}}"></script>
    <script>
        $('#form-filter').on('submit',function (event) {
            event.preventDefault();
            let param = $('#form-filter').serialize()
            const link = "{{route('items.filter',$module)}}"+'?'+param
            console.log(link)
            const url = new URL(link);

            let id = url.searchParams.get('id');
            let title = url.searchParams.get('title');
            let group_id = url.searchParams.get('group_id');
            let position = url.searchParams.get('position');
            let date_form = url.searchParams.get('date_form');
            let date_to = url.searchParams.get('date_to');

            if (typeof URLSearchParams !== 'undefined') {
                const params = new URLSearchParams(param)
                if(id === ''){
                    params.delete('id')
                }
                if(title === ''){
                    params.delete('title')
                }
                if(group_id === ''){
                    params.delete('group_id')
                }
                if(position === ''){
                    params.delete('position')
                }
                if(date_form === ''){
                    params.delete('date_form')
                }
                if(date_to === ''){
                    params.delete('date_to')
                }
                window.location.replace( "{{route('items.filter',$module)}}"+'?'+params)
            } else {
                console.log(`Your browser ${navigator.appVersion} does not support URLSearchParams`)
            }
        })
    </script>
@endsection
