@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
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
                @if(isset($groups))
                    @foreach($groups as $group)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id="{{$group->id}}"></td>
                            <td>{{$group->id}}</td>
                            <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                                <a href="{{$group->url}}">{{$group->title}}</a></td>
                            <td>{{@$group->groups[0]->id.'-'.@$group->groups[0]->title}}</td>
                            <td><img src="{{$group->image}}" alt="" style="max-height: 50px"></td>
                            <td>{{$group->position}}</td>
                            <td>{{$group->order}}</td>
                            <td>
                                @if($group->status == 1)
                                    <span class="label label-outline-success label-inline">đang hoạt động</span>
                                @else
                                    <span class="label label-outline-danger label-inline">không hoạt động</span>
                                @endif
                            </td>
                            <td>{{$group->created_at}}</td>
                            <td nowrap="nowrap">
                                <!-- Button trigger modal-->
                                <!-- Modal-Delete-->
                                <div class="modal fade" id="form_delete-{{$group->id}}" data-backdrop="static"
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
                                                Xác nhận thao tác xóa item {{$group->title}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{route("$module.destroy",$group)}}" method="POST">
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

                                {{--                                List Item Modal--}}
                                <div class="modal fade modal_delete_8" id="list-item-{{$group->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalSizeSm" aria-hidden="true" >
                                    <div id="kakaa" class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$group->title}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label>Tìm kiếm</label>
                                                    <input type="text" class="form-control" name="query"
                                                           onkeyup="searchItem(this.value,'#result-list-item-{{$group->id}}',{{$group->id}})">
                                                </div>
                                                <script>
                                                    function searchItem(value, element_result_id,group_id) {
                                                        $.ajax({
                                                            url: "{{route('items.search')}}",
                                                            method: 'GET',
                                                            data: {
                                                                search_query: value,
                                                                module: "{{$module}}",
                                                                group_id:group_id
                                                            },
                                                            success: function (res) {
                                                                if (res !== []) {
                                                                    $(element_result_id).html(res);
                                                                }
                                                            }
                                                        })
                                                    }
                                                </script>
                                                <div id="result-list-item-{{$group->id}}">
                                                    @include('backend.groups.result-search-item-group')
                                                </div>
                                                <table class="table table-bordered table-hover table-checkable">
                                                    <thead>
                                                    <th>ID</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                    </thead>
                                                    <tbody id="table_item_in_group_{{$group->id}}">
                                                   @include('backend.groups.table_item_in_group')
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route("$module.edit",$group)}}" class="btn btn-sm btn-clean btn-icon">
                                        <i class="la la-cog"></i>
                                </a>
                                <a href="#list-item-{{$group->id}}" data-toggle="modal" class="btn btn-sm btn-clean btn-icon" title="Edit details">
                                    <i class="la la-edit"></i>
                                </a>
                                <a href="#form_delete-{{$group->id}}"  data-toggle="modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                    <i class="la la-trash"></i>
                                </a>
                                <style>
                                    .link_delete:hover {
                                        color: red;
                                    }

                                    .list-item-group:hover {
                                        color: blue;
                                    }

                                    .link_edit:hover {
                                        color: #0ac709;
                                    }
                                </style>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="row" style="float:right">
                {{$groups->links('pagination::bootstrap-4') }}
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
    <script src="{{asset('js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    @if(Session::has('message'))
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: "success",
                    title: "{{Session::get('message')}}",
                    showConfirmButton: false,
                    timer: 1500
                });
            })
        </script>
        {{Session::forget('message')}}
    @endif
    <script>
        $('#form-filter').on('submit', function (event) {
            event.preventDefault();
            let param = $('#form-filter').serialize()
            const link = "{{route('items.filter',$module)}}" + '?' + param
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
                if (id === '') {
                    params.delete('id')
                }
                if (title === '') {
                    params.delete('title')
                }
                if (group_id === '') {
                    params.delete('group_id')
                }
                if (position === '') {
                    params.delete('position')
                }
                if (date_form === '') {
                    params.delete('date_form')
                }
                if (date_to === '') {
                    params.delete('date_to')
                }
                window.location.replace("{{route('items.filter',$module)}}" + '?' + params)
            } else {
                console.log(`Your browser ${navigator.appVersion} does not support URLSearchParams`)
            }
        })
    </script>
@endsection
