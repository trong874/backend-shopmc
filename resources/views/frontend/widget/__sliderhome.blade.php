<div class="rh-container full_width">
<div class="rh-content-wrap clearfix">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($settings as $item)
            @if(@$item->type == 'image_website_slide')
                @foreach(explode('|',$item->val) as $key => $img_ex)
                    <button type="button" data-bs-target="#carouselExampleIndicators" @if($key == 0) class="active" aria-current="true" @endif data-bs-slide-to="{{$key}}" aria-label="Slide {{$key+=1}}"></button>
                @endforeach
            @endif
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($settings as $item)
        @if(@$item->type == 'image_website_slide')
        @foreach(explode('|',$item->val) as $key => $img_ex)
        <div class="carousel-item @if($key == 0 ) active @endif">
            <img src="{{$img_ex}}" class="d-block w-100" alt="...">
        </div>
        @endforeach
        @endif
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</div>
</div>

