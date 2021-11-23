@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>Các đơn hàng của bạn</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @foreach($orders as $order)
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-2">
                                        ID Order: {{$order->id}}
                                    </div>
                                    <div class="col-4">
                                        Tổng: {{number_format($order->price)}} đ
                                    </div>
                                    <div class="col-4">
                                        Trạng thái:
                                            @switch($order->status)
                                                @case('')
                                                <span class="label label-outline-danger label-pill label-inline mr-2">chưa rõ</span>
                                                @break
                                                @case(1)
                                                <span class="label label-warning label-pill label-inline mr-2">Chờ xác nhận</span>
                                                @break
                                                @case(2)
                                                <span class="label label-warning label-pill label-inline mr-2">Chờ lấy hàng</span>
                                                @break
                                                @case(3)
                                                <span class="label label-primary label-pill label-inline mr-2">Đang giao hàng</span>
                                                @break
                                                @case(4)
                                                <span class="label label-success label-pill label-inline mr-2">Đã giao hàng</span>
                                                @break
                                                @case(5)
                                                <span class="label label-danger label-pill label-inline mr-2">Đã huỷ</span>
                                        @break
                                        @endswitch
                                    </div>
                                    <div class="col-2">
                                        <a href="{{route('order.detail',$order->id)}}" class="btn-link">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- /Main Side -->
        </div>
    </div>
@endsection
