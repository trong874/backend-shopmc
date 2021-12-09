@extends('frontend.layout.master')
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
                    <form method="POST" action="https://nick.vn/nap-the" accept-charset="UTF-8"
                          class="form-horizontal form-charge" data-hs-cf-bound="true">
                        <input name="_token" type="hidden"
                               value="ICmMvDBWzJbcqPvF1ivpYvfTVU5ITBR12MbQprCE">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tài khoản:</label>
                            <div class="col-md-6">
                                <input class="form-control  c-square c-theme" type="text"
                                       value="" readonly="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Loại thẻ:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="type" id="type">
                                    <option value="VIETTEL">VIETTEL</option>

                                    <option value="MOBIFONE">MOBIFONE</option>

                                    <option value="VINAPHONE">VINAPHONE</option>

                                    <option value="VIETNAMMOBILE">VIETNAMMOBILE</option>

                                    <option value="ZING">ZING</option>

                                    <option value="GATE">GATE</option>

                                    <option value="VCOIN">VCOIN</option>

                                    <option value="GARENA">GARENA</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mệnh giá:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="amount" id="amount" required="">
                                    <option value="">-- Chọn mệnh giá --</option>


                                    <option r-default="0" value="10000" rel-ratio="70.0">10,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="20000" rel-ratio="70.0">20,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="30000" rel-ratio="70.0">30,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="50000" rel-ratio="70.0">50,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="100000" rel-ratio="70.0">100,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="200000" rel-ratio="70.0">200,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="300000" rel-ratio="70.0">300,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="500000" rel-ratio="70.0">500,000 VNĐ = 70.0%</option>


                                    <option r-default="0" value="1000000" rel-ratio="70.0">1,000,000 VNĐ = 70.0%
                                    </option>
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
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mã bảo vệ (*):</label>
                            <div class="col-md-6">
                                <div class="input-group">

                                    <input type="text" class="form-control c-square" id="captcha" name="captcha"
                                           placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                                    <span class="input-group-addon" style="padding: 1px;">
{{--                                    <img src="https://nick.vn/captcha/flat?WtZ45pg7" height="30px" id="imgcaptcha"--}}
{{--                                         onclick="document.getElementById('imgcaptcha').src ='https://nick.vn/captcha/flat?XNJoYIJp'+Math.random();document.getElementById('captcha').focus();"--}}
{{--                                         alt="png-image">--}}
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group c-margin-t-40">
                            <div class="col-md-offset-3 col-md-6">
                                <button type="submit"
                                        class="btn btn-submit "
                                        data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Nạp thẻ</button>
                                <script>
                                    $(".form-charge").submit(function () {
                                        $('.btn-submit').button('loading');
                                    });
                                </script>

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
        .btn-submit{
            color: #ffffff;
            background: #32c5d2;
            border-color: #32c5d2;
            font-size: 14px;
            padding: 7px 20px 5px 20px;
            text-transform: uppercase
        }
        .title_3{
            font-size: 20px;
        }
        .control-label .col-md-3{
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
    </style>
@endsection
