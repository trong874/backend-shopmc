@if(isset($items))
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-body pt-2">
            <!--begin::Item-->
            @foreach($items as $item)
                <div class="d-flex flex-wrap align-items-center mb-10" onclick="addItemIntoGroup({{$item->id}},{{$group_id}})">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-60 symbol-2by3 flex-shrink-0 mr-4">
                        <div class="symbol-label" style="background-image: url('{{$item->image}}')"></div>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Title-->
                    <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                        <span class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">{{$item->title}}</span>
                        <span class="text-muted font-weight-bold font-size-sm my-1">ID: {{$item->id}}</span>
                        <span class="text-muted font-weight-bold font-size-sm">Giá:
														<span class="text-primary font-weight-bold">{{number_format($item->price)}} đ</span></span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Info-->
                {{--    <div class="d-flex align-items-center py-lg-0 py-2">--}}
                {{--        <div class="d-flex flex-column text-right">--}}
                {{--            <span class="text-dark-75 font-weight-bolder font-size-h4">24,900</span>--}}
                {{--            <span class="text-muted font-size-sm font-weight-bolder">votes</span>--}}
                {{--        </div>--}}
                {{--    </div>--}}
                <!--end::Info-->
                </div>
                <!--end::Item-->
            @endforeach
        </div>
    </div>
    <script>
        function addItemIntoGroup(item_id,group_id) {
            let tbody_id = '#table_item_in_group_' + group_id
            $.ajax({
                url:"{{route('group.add-item')}}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:'POST',
                data:{
                    item_id:item_id,
                    group_id:group_id
                },
                success:function (res) {
                    $(tbody_id).html(res)
                }
            })
        }
    </script>
@endif
