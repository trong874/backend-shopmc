<div id="rehub-register-popup">
    <div class="rehub-register-popup">
        <div class="re_title_inmodal">Đăng Ký Tài Khoản</div>
        <form id="rehub_registration_form_modal" action="{{route('user-manage.store')}}" method="POST">
            @csrf
            <input type="hidden" name="status" value="1">
            <div class="re-form-group mb20">
                <label>Tên đăng nhập</label>
                <input class="re-form-input required" name="username" type="text"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_email">Email</label>
                <input class="re-form-input" name="email" id="rehub_user_email" type="email"
                       placeholder="Bỏ trống nếu bạn không có email."/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_signonpassword">Mật khẩu<span
                        class="alignright font90">Minimum 6 symbols</span></label>
                <input class="re-form-input required" name="password"
                       id="rehub_user_signonpassword" type="password"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_confirmpassword">Nhập lại mật khẩu</label>
                <input class="re-form-input required" name="password_confirmation"
                       id="rehub_user_confirmpassword" type="password"/>
            </div>

            <div class="re-form-group mb20">
                <button class="wpsm-button rehub_main_btn" type="submit">Đăng Ký</button>
            </div>
        </form>

        <div class="rehub-login-popup-footer">Already have an account? <span
                class="act-rehub-login-popup color_link" data-type="login">Login</span></div>
    </div>
    @if(Session::has('message_error'))
        <script>
        @foreach(Session::pull('message_error') as $error)
            @foreach($error as $value)
                alertify.success("{{$value}}")
            @endforeach
        @endforeach
        </script>
    @endif
</div>

