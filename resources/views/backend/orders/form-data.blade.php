@extends('backend.layout.default')
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
@endsection
@section('content')
    <!--begin::Card-->
    <div class="card card-custom m-7">
        <div class="card-header">
            <h3 class="card-title">{{@$page_title}}</h3>
        </div>
        <!--begin::Form-->
        <div class="card-body p-0">
            <!-- begin: Invoice-->
            <!-- begin: Invoice header-->
            <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                        <h1 class="display-4 font-weight-boldest mb-10">Phụ kiện game</h1>
                        <div class="d-flex flex-column align-items-md-end px-0">
                            <!--begin::Logo-->
                            <h4>Trạng thái đơn hàng </h4>
                            <form id="change_status_order" method="POST" action="{{route('orders.update',$order->id)}}">
                                @csrf
                                @method('PUT')
                                <select name="status" id="select_status" class="form-control">
                                    <option value="1" @if($order->status == 1) selected @endif>Chờ xác nhận</option>
                                    <option value="2" @if($order->status == 2) selected @endif>Chờ lấy hàng</option>
                                    <option value="3" @if($order->status == 3) selected @endif>Đang giao hàng</option>
                                    <option value="4" @if($order->status == 4) selected @endif>Đã giao hàng</option>
                                    <option value="5" @if($order->status == 5) selected @endif>Đã huỷ</option>
                                </select>
                                <script>
                                    $('#select_status').on('change', function () {
                                        $('#change_status_order').submit();
                                    })
                                </script>
                            </form>
                        </div>
                    </div>
                    <div class="border-bottom w-100"></div>
                    <div class="d-flex justify-content-between pt-6">
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolder mb-2">Họ tên:</span>
                            <span class="opacity-70">{{@$order->user->fullname}}</span>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolder mb-2">Số điện thoại:</span>
                            <span class="opacity-70">{{@$order->user->phone}}</span>
                        </div>
                        <div class="d-flex flex-column flex-root">
                            <span class="font-weight-bolder mb-2">Địa chỉ giao hàng:</span>
                            <span class="opacity-70">{{@$order->user->address}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Invoice header-->
            <!-- begin: Invoice body-->
            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Tên mặt hàng</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Số lượng</th>
                                <th class="text-right font-weight-bold text-muted text-uppercase">Giá sản phẩm</th>
                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->items as $key => $item)
                                <tr class="font-weight-boldest border-bottom-0">
                                    <td class="border-top-0 pl-0 py-4">{{$item->title}}</td>
                                    <td class="border-top-0 text-right py-4">{{$order_detail[$key]->quantity}}</td>
                                    <td class="border-top-0 text-right py-4">{{number_format($item->price)}} ₫</td>
                                    <td class="text-danger border-top-0 pr-0 py-4 text-right">{{number_format($item->price * $order_detail[$key]->quantity)}}
                                        ₫
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end: Invoice body-->
            <!-- begin: Invoice footer-->
            <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="font-weight-bold text-muted text-uppercase">Thanh toán bằng:</th>
                                <th class="font-weight-bold text-muted text-uppercase">ID đơn hàng</th>
                                <th class="font-weight-bold text-muted text-uppercase">Ngày mua</th>
                                <th class="font-weight-bold text-muted text-uppercase">Tổng thanh toán:</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="font-weight-bolder">
                                <td>Thanh toán khi nhận hàng</td>
                                <td>{{$order->id}}</td>
                                <td>{{$order->created_at}}</td>
                                <td class="text-danger font-size-h3 font-weight-boldest">{{number_format($order->price)}}
                                    ₫
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end: Invoice footer-->
            <!-- begin: Invoice action-->
            <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                <div class="col-md-9">
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-light-primary font-weight-bold" onclick="window.print();">
                            Download Invoice
                        </button>
                        <button type="button" class="btn btn-primary font-weight-bold" onclick="window.print();">Print
                            Invoice
                        </button>
                    </div>
                </div>
            </div>
            <!-- end: Invoice action-->
            <!-- end: Invoice-->
        </div>
        <!--end::Form-->
    </div>
    <!--end::Card-->
@endsection
@section('scripts')
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
@endsection
