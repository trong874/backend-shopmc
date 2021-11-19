@if($data_cart !=null)
<ul id="cartDetail">
    <div class="container" style="margin-left: 35px;margin-top: 10px;margin-bottom: 10px;">
        @foreach($data_cart['items'] as $key => $item)
        <div class="row" style="margin-bottom: 5px">
            <div class="col-3">
                <img
                    src="{{$item->image}}"
                    alt="">
            </div>
            <div class="col-6" style="width:225px;height: 100%">
                <span style="word-wrap: break-word;">{{$item->title}}</span>
                <br>
                <p>
                    <span style="color: red">{{$data_cart['cart_items'][$key]->quantity}}</span> <span>X {{number_format($item->price)}}</span>
                </p>

            </div>
            <div class="col-1 close-item">

                    <i aria-hidden="true" data-id="{{$item->id}}" style="cursor: pointer !important;
 font-size: 35px;">&times;</i>

            </div>
        </div>
        @endforeach
        <div class="row" style="margin-bottom: 5px;font-weight: bold;">
            <div class="col-3"><span style="word-wrap: break-word;">Tổng tiền:</span></div>

            <div class="col-9"><span
                        style="color: black">{{number_format($data_cart['total_price'])}}</span></div>

        </div>
        <div class="row">
            <div class="col-6" style="margin-bottom: 20px">
                <button class="btn btn-success">
                    <a href="{{route('item.cart')}}" style="color: white">Xem giỏ hàng</a></button>
            </div>
            <div class="col-6">
                <button class="btn btn-danger">
                    <a href="{{route('item.cart')}}" style="color: white">Thanh toán</a></button>
            </div>
        </div>
    </div>
</ul>
@endif
