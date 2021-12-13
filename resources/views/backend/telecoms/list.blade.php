@extends('backend.layout.default')
@section('meta-data')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')
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
                                Xác nhận thao tác xóa telecom đã chọn ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">Close
                                </button>
                                <p class="btn btn-danger font-weight-bold" id="delete_all"
                                   data-url="{{ route('telecoms.destroy_many') }}">Xóa</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Button-->
                <a href='{{route("telecoms.create")}}' class="btn btn-primary font-weight-bolder">
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
                    <th>{{__('Từ khoá')}}</th>
                    <th>{{__('Ảnh')}}</th>
                    <th>{{__('Thứ tự')}}    </th>
                    <th>{{__('Trạng thái')}}</th>
                    <th>{{__('Thời gian tạo')}}</th>
                    <th>{{__('Thao tác')}}</th>
                </tr>
                </thead>
                <tbody class="data_table">
                @if(isset($telecoms))
                    @foreach($telecoms as $item)
                        <tr>
                            <td><input type="checkbox" class="sub_chk" data-id="{{$item->id}}"></td>
                            <td>{{$item->id}}</td>
                            <td style="text-overflow: Ellipsis;max-width: 200px;max-height: 50px;overflow: hidden;white-space: nowrap;">
                                <a href="#">{{$item->title}}</a></td>
                            <td>{{$item->key}}</td>
                            <td><img src="{{$item->image}}" alt="" style="height: 50px;width: 50px;object-fit:contain;max-height: 50px"></td>
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
                                                Xác nhận thao tác xóa telecom {{$item->title}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{route("telecoms.destroy",$item)}}" method="POST">
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
                                <a href="{{route("telecoms.edit",$item)}}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                    <i class="la la-edit"></i>
                                </a>
                                <a href="#set_value_{{$item->id}}" data-toggle="modal" class="btn btn-sm btn-clean btn-icon" title="Replicate">
                                    <i class="flaticon-interface-7"></i>
                                </a>
                                <div class="modal fade" id="set_value_{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('set_value_telecom',$item->id)}}" method="POST">
                                                @csrf
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa mệnh giá</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-control-label">Tiêu đề</label>
                                                    <input type="text" class="form-control" name="title" readonly="" value="{{$item->title}}" autofocus="true">
                                                </div>
                                                <div class="form-group ">
                                                    <label class="form-control-label">Từ khoá</label>
                                                    <input type="text" class="form-control" name="title" readonly="" value="{{$item->key}}" autofocus="true">
                                                </div>
                                                <div class="dataTables_scrollBody" style=" overflow: auto; width: 100%;">
                                                    <table class="table table-bordered table-list">
                                                        <thead>
                                                        <tr>
                                                            <th>Mệnh giá</th>
                                                            <th class="text-success">C.K <br> Đúng mệnh giá (%)</th>
                                                            <th class="text-danger">C.K  <br>Sai mệnh giá (%)</th>
                                                            <th class="text-success">C.K (Đ.lý) <br> Đúng mệnh giá (%)</th>
                                                            <th class="text-danger">C.K (Đ.lý) <br> Sai mệnh giá (%)</th>
                                                            <th style="min-width: 120px">Trạng thái</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($item->telecomValue as $key => $value)
                                                        <tr>
                                                            <td><input type="text" class="form-control" name="amount[]" value="{{$value->amount}}"></td>
                                                            <td><input type="text" class="form-control" maxlength="4" name="ratio_true_amount[]" value="{{$value->ratio_true_amount}}"></td>
                                                            <td><input type="text" class="form-control" maxlength="4" name="ratio_false_amount[]" value="{{$value->ratio_false_amount}}"></td>
                                                            <td><input type="text" class="form-control" maxlength="4" name="agency_ratio_true_amount[]" value="{{$value->agency_ratio_true_amount}}"></td>
                                                            <td><input type="text" class="form-control" maxlength="4" name="agency_ratio_false_amount[]" value="{{$value->agency_ratio_false_amount}}"></td>
                                                            <td>
                                                                <select class="form-control" style="min-width: 30px;" name="status[]">
                                                                    <option value="0">Tắt</option>
                                                                    <option value="1" selected="">Bật</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                        <tr>
                                                            <td colspan="6">
                                                                <button type="button" class="btn btn-primary btn-block add-row">Thêm</button>
                                                            </td>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                                <button type="submit" class="btn btn-success m-btn m-btn--custom m-btn--icon">
                                                    Chỉnh sửa
                                                </button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#form_delete-{{$item->id}}"  data-toggle="modal" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                    <i class="la la-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <div class="row" style="float:right">
                {{ $telecoms->links('pagination::bootstrap-4') }}
            </div>
            <!--end: Datatable-->
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('assets/js/backend.js')}}"></script>
    <script src="{{asset('js/pages/features/miscellaneous/sweetalert2.js')}}"></script>
    @if(Session::has('message'))
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: "success",
                    title: "{{Session::pull('message')}}",
                    showConfirmButton: false,
                    timer: 1500
                });
            })
        </script>
    @endif
    <script>
        $(document).ready(function () {
            $(".add-row").click(function () {
                var markup = '<tr><td><input type="text" class="form-control" name="amount[]"  value=""/></td><td><input type="text" class="form-control" name="ratio_true_amount[]" maxlength="4"/></td><td><input type="text" class="form-control" name="ratio_false_amount[]"  maxlength="4" /></td><td><input type="text" class="form-control" name="agency_ratio_true_amount[]"  maxlength="4" /></td><td><input type="text" class="form-control" name="agency_ratio_false_amount[]" maxlength="4" /></td><td><select class="form-control" style="min-width: 30px;" name="status[]"><option value="1">Bật</option><option value="0">Tắt</option></select></td></tr>';
                $(".table-list tbody").append(markup);
            });
        });
    </script>
@endsection
