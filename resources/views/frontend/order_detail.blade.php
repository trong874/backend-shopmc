@extends('frontend.layout.master')
@section('content')
    <div class="container p-5">
        <div class="card card-custom m-7">
            <!--begin::Form-->
            <div class="card-body p-0">
                <!-- begin: Invoice-->
                <!-- begin: Invoice header-->
                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                            <h2 class="mb-10">Phụ kiện game</h2>
                            <div class="d-flex flex-column align-items-md-end px-0">
                                <!--begin::Logo-->
                                <h4>Trạng thái đơn hàng </h4>
                                <!--end::Logo-->
                                <select name="status" class="form-control" disabled>
                                    <option @if($order->status == 1) selected @endif>Chờ xác nhận</option>
                                    <option @if($order->status == 2) selected @endif>Chờ lấy hàng</option>
                                    <option @if($order->status == 3) selected @endif>Đang giao hàng</option>
                                    <option @if($order->status == 4) selected @endif>Đã giao hàng</option>
                                    <option @if($order->status == 5) selected @endif>Đã huỷ</option>
                                </select>
                            </div>
                        </div>
                        <div class="border-bottom w-100"></div>
                        <div class="d-flex justify-content-between pt-6 mb-4 mt-4">
                            <div class="d-flex flex-column flex-root">
                                <h3 class="font-weight-bolder mb-2">Họ tên:</h3>
                                <span class="opacity-70">{{@$shipment_details->fullname}}</span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h3 class="font-weight-bolder mb-2">Số điện thoại:</h3>
                                <span class="opacity-70">{{@$shipment_details->phone}}</span>
                            </div>
                            <div class="d-flex flex-column flex-root">
                                <h3 class="font-weight-bolder mb-2">Địa chỉ giao hàng:</h3>
                                <span class="opacity-70" id="shipment_details"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice header-->
                <!-- begin: Invoice body-->
                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0 mb-4 mt-4">
                    <div class="col-md-9">
                        <div class="table-responsive">
                            <table class="table table-light">
                                <thead>
                                <tr>
                                    <th class="pl-0 font-weight-bold text-muted text-uppercase">Tên mặt hàng</th>
                                    <th class="text-right font-weight-bold text-muted text-uppercase">Số lượng</th>
                                    <th class="text-right font-weight-bold text-muted text-uppercase">Giá sản phẩm</th>
                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Thành tiền
                                    </th>
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
                                    <th class="font-weight-bold text-muted text-uppercase">Phương thức thanh toán:</th>
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
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        @if($order->status === 1)
                                            <a class="btn btn-danger right" onclick="return confirm('Xác nhận huỷ đơn hàng ?')" href="{{route('order_cancel',['auth_id'=>Auth::user()->id,
                                                                                                                                                                'order_id'=>$order->id])}}">Huỷ đơn hàng</a>
                                        @endif
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice footer-->
                <!-- end: Invoice-->
            </div>
            <!--end::Form-->
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function readTextFile(file, callback) {
            var rawFile = new XMLHttpRequest();
            rawFile.overrideMimeType("application/json");
            rawFile.open("GET", file, true);
            rawFile.onreadystatechange = function () {
                if (rawFile.readyState === 4 && rawFile.status == "200") {
                    callback(rawFile.responseText);
                }
            }
            rawFile.send(null);
        }

        //usage:
        readTextFile("{{asset('frontend/local_selector.json')}}", function (text) {
            let shipment_details = document.getElementById('shipment_details');

            let data = JSON.parse(text);
            let province = data.filter(function (n) {
                return n.i ===  {{@$shipment_details->province}};
            })

            let district = province[0].c.filter(function (n) {
                return n.i === {{@$shipment_details->district}};
            })

            let ward = district[0].c.filter(function (n) {
                return n.i === {{@$shipment_details->ward}};
            })

            let address = "{{@$shipment_details->address}}";
            shipment_details.append(address + ', ' + ward[0].n + ', ' + district[0].n + ', '+ province[0].n)
        });
    </script>
@endsection
