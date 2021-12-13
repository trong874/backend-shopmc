@if(isset($telecoms))
    @foreach($telecoms[0]->telecomValue as $value)
        <option value="{{$value->amount}}">{{number_format($value->amount)}} đ = {{$value->ratio_true_amount}} %</option>
    @endforeach
@endif
