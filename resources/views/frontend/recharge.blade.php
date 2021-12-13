@extends('frontend.layout.master')
@section('styles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="title_3">Nạp Thẻ</h3>
                        </div>
                    </div>
                    <form method="POST" action="{{route('charge.store')}}" accept-charset="UTF-8"
                          class="form-horizontal form-charge" data-hs-cf-bound="true">
                        @csrf
                        @if(Session::has('message'))
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                                Thẻ này đã nạp trước đó !
                            </div>
                        @endif
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tài khoản:</label>
                            <div class="col-md-6">
                                <input class="form-control  c-square c-theme" type="text"
                                       value="{{Auth::user()->username}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Loại thẻ:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="telecom_key" id="telecom_key">
                                    @if(isset($telecoms))
                                        @foreach($telecoms as $item)
                                            <option value="{{$item->id}}">{{$item->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mệnh giá:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="declare_amount" id="telecom_value"
                                        required="">
                                    @include('frontend.component.value_telecom')
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Mã số thẻ:</label>
                            <div class="col-md-6">
                                <input class="form-control  c-square c-theme " name="pin" type="text" maxlength="16"
                                       required="" placeholder="" autofocus="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Số serial:</label>
                            <div class="col-md-6">
                                <input class="form-control c-square c-theme " name="serial" type="text" maxlength="16"
                                       required="" placeholder="">
                            </div>
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="col-md-3 control-label">Mã bảo vệ (*):</label>--}}
                        {{--                            <div class="col-md-6">--}}
                        {{--                                <div class="input-group">--}}

                        {{--                                    <input type="text" class="form-control c-square" id="captcha" name="captcha"--}}
                        {{--                                           placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">--}}
                        {{--                                    <span class="input-group-addon" style="padding: 1px;">--}}
                        {{--                                    <img src="https://nick.vn/captcha/flat?WtZ45pg7" height="30px" id="imgcaptcha"--}}
                        {{--                                         onclick="document.getElementById('imgcaptcha').src ='https://nick.vn/captcha/flat?XNJoYIJp'+Math.random();document.getElementById('captcha').focus();"--}}
                        {{--                                         alt="png-image">--}}
                        {{--                                </span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="form-group c-margin-t-40">
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit" class="btn btn-submit ">Nạp thẻ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .form-group {
            padding: 7px 0 7px 0;
            margin-left: 250px;
            margin-right: -187px;
            /*border-bottom: 1px solid;*/
        }

        .btn-submit {
            color: #ffffff;
            background: #32c5d2;
            border-color: #32c5d2;
            font-size: 14px;
            padding: 7px 20px 5px 20px;
            text-transform: uppercase
        }

        .title_3 {
            font-size: 20px;
        }

        .control-label .col-md-3 {
            margin-bottom: 0;
            padding-top: 7px;
            font-weight: 300;
            color: #2e353a;
            width: 25%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .alert-dismissable .close, .alert-dismissible .close {
            position: relative;
            top: -2px;
            right: -21px;
            color: inherit;
        }

        button.close {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none;
        }

        .close {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 300;
            color: #3f444a;
            font-size: 28px;
            outline: none !important;
            opacity: 0.5;
            filter: alpha(opacity=50);
            -webkit-transition: back 0.2s ease-out;
        }

        .close {
            float: right;
            font-size: 21px;
            line-height: 1;
            text-shadow: 0 1px 0 #fff;
        }
    </style>
@endsection
@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script>
        $('#telecom_key').on('change',function () {
            let telecom_id = this.value;
            $.ajax({
                url:"{{route('ajax_get_telecom_value')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    telecom_id : telecom_id,
                },
                success:function (res) {
                    $('#telecom_value').html(res)
                }
            })
        })
    </script>
@endsection
