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
                                    <div class="col-3">
                                        ID đơn hàng: {{$order->id}}
                                    </div>
                                    <div class="col-3">
                                        Tổng : {{number_format($order->price)}} đ
                                    </div>
                                    <div class="col-4">
                                        Thời gian đặt hàng: {{date_format($order->created_at,'d-m-y')}}
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
