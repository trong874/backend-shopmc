@extends('backend.layout.default')
@section('styles')
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
@endsection
@section('content')
    <!--begin::Card-->
    <div class="card card-custom card-shadowless rounded-top-0">
        <!--begin::Body-->
        <div class="card-body p-0">
            <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                <div class="col-xl-12 col-xxl-10">
                    <!--begin::Wizard Form-->
                    <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="POST"
                          action="{{@$action}}">
                        @csrf
                        @if(isset($user))
                            @method('PUT')
                        @endif
                        <input type="hidden" name="created_by" value="{{@$user->created_by ?? auth()->user()->id}}">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <!--begin::Wizard Step 1-->
                                <div class="my-5 step" data-wizard-type="step-content">
                                    <h5 class="text-dark font-weight-bold mb-10">{{__('Chi tiết hồ sơ của người dùng:')}}</h5>
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-1 col-lg-1 col-form-label">{{__('Tên')}}</label>
                                        <div class="col-lg-3 col-xl-3">
                                            <input class="form-control form-control-solid form-control-lg" id="firstname"
                                                   name="firstname" type="text" value="{{@$user->firstname}}" onkeyup="setFullName()" required>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>

                                        <label class="col-xl-1 col-lg-1 col-form-label">{{__('Họ')}}</label>
                                        <div class="col-lg-3 col-xl-3">
                                            <input class="form-control form-control-solid form-control-lg" id="lastname"
                                                   name="lastname" type="text" value="{{@$user->lastname}}"  onkeyup="setFullName()" required>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                        <label
                                            class="col-xl-1 col-lg-1 col-form-label text-left">{{__('Ảnh đại diện')}}</label>
                                        <div class="col-lg-3 col-xl-3">
                                            <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                <div class="image-input-wrapper" id="avatar_image"
                                                     style="background-image: url({{@$user->image ?? asset('media/users/blank.png')}})"></div>
                                                <label
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-action="change" data-toggle="tooltip" title=""
                                                    data-original-title="Change avatar"
                                                    onclick="selectFileWithCKFinder('avatar_image')">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="hidden" id="link_avatar_image" name="image" value="{{@$user->image}}">
                                                </label>
                                                <span
                                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                    data-toggle="tooltip" title="" data-original-title="Cancel avatar"
                                                    style="float: right;margin: -10px" onclick="deleteImage()">
													<i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                             <!--input hidden Fullname-->
                                    <input type="hidden" id="fullname" name="fullname" value="{{@$user->fullname}}">
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{__('Tên tài khoản:')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg"
                                                   name="username" type="text" value="{{@$user->username}}"
                                                   placeholder="Tên tài khoản" required>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Ngày sinh:')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control form-control-solid form-control-lg"
                                                   name="birtday" type="date" value="{{@$user->birtday}}" required>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Giới tính')}}</label>
                                        <div class="col-9">
                                            <select class="form-control form-control-lg form-control-solid"
                                                    name="gender">
                                                <option value="">Chọn giới tính...</option>
                                                <option value="1" @if(@$user->gender == 1) selected @endif>Nam</option>
                                                <option value="2" @if(@$user->gender == 2) selected @endif>Nữ</option>
                                                <option value="3" @if(@$user->gender == 3) selected @endif>Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
{{--                                    <div class="form-group row">--}}
{{--                                        <label--}}
{{--                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Loại tài khoản')}}</label>--}}
{{--                                        <div class="col-9">--}}
{{--                                            <select class="form-control form-control-lg form-control-solid"--}}
{{--                                                    name="account_type" required>--}}
{{--                                                <option value="">Chọn loại tài khoản...</option>--}}
{{--                                                <option value="1" @if(@$user->account_type == 1) selected @endif>Quản lí--}}
{{--                                                    quản trị viên--}}
{{--                                                </option>--}}
{{--                                                <option value="2" @if(@$user->account_type == 2) selected @endif>Quản lí--}}
{{--                                                    người dùng--}}
{{--                                                </option>--}}
{{--                                                <option value="3" @if(@$user->account_type == 3) selected @endif>Quản lí--}}
{{--                                                    bài viết..--}}
{{--                                                </option>--}}
{{--                                                <option value="4" @if(@$user->account_type == 4) selected @endif>Quản lí--}}
{{--                                                    Order--}}
{{--                                                </option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <input type="hidden" name="account_type" value="{{$account_type_number}}">
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div
                                        class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Điện thoại liên hệ')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-phone"></i>
                                                    </span>
                                                </div>
                                                <input type="number"
                                                       class="form-control form-control-solid form-control-lg"
                                                       name="phone" value="{{@$user->phone}}" placeholder="Phone"
                                                       required>
                                            </div>
                                            <span class="form-text text-muted">Enter valid US phone number(e.g: 0123456789).</span>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div
                                        class="form-group row fv-plugins-icon-container has-success">
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Địa chỉ email')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div
                                                class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-at"></i>
                                                    </span>
                                                </div>
                                                <input type="text"
                                                       class="form-control form-control-solid form-control-lg"
                                                       name="email" value="{{@$user->email}}" required>
                                            </div>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row fv-plugins-icon-container has-success">
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{__('Trạng thái')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                              <span class="switch switch-primary">
																<label>
																	<input type="checkbox"
                                                                           value="{{@$user->status}}"
                                                                           name="status"
                                                                           onclick="toggle(this);"
                                                                           @if(@$user->status == 1)
                                                                               checked
                                                                           @endif
                                                                    >
																	<span></span>
																</label>
															</span>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <script>
                                        function toggle(button) {
                                            switch (button.value) {
                                                case "1":
                                                    button.value = "";
                                                    break;
                                                case "":
                                                    button.value = "1";
                                                    break;
                                            }
                                        }
                                    </script>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row fv-plugins-icon-container has-success"
                                         @if(isset($user)) hidden @endif>
                                        <label class="col-xl-3 col-lg-3 col-form-label">{{__('Mật khẩu')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div
                                                class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password"
                                                       class="form-control form-control-solid form-control-lg"
                                                       name="password">
                                            </div>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row fv-plugins-icon-container has-success"
                                         @if(isset($user)) hidden @endif>
                                        <label
                                            class="col-xl-3 col-lg-3 col-form-label">{{__('Xác nhận mật khẩu')}}</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group input-group-solid input-group-lg">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="la la-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password"
                                                       class="form-control form-control-solid form-control-lg"
                                                       name="password_confirmation">
                                            </div>
                                            <div class="fv-plugins-message-container"></div>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                </div>
                                <!--end::Wizard Step 1-->
                                <!--begin::Wizard Actions-->
                                <div class="d-flex justify-content-between border-top pt-10 mt-15">
                                    <div class="mr-2">
                                        <button type="reset" id="prev-step"
                                                class="btn btn-light-primary font-weight-bolder px-9 py-4"
                                                data-wizard-type="action-prev">{{__('Đặt lại')}}</button>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-success font-weight-bolder px-9 py-4"
                                                data-wizard-type="action-submit">Submit
                                        </button>
                                    </div>
                                </div>
                                <!--end::Wizard Actions-->
                            </div>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </form>
                    <!--end::Wizard Form-->
                </div>
            </div>
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
@endsection
@section('scripts')
    <script src="{{asset('assets/js/backend.js')}}"></script>
@endsection
