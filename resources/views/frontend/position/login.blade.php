<div id="rehub-login-popup">
    <div class="rehub-login-popup">
        <div class="re_title_inmodal">Đăng Nhập</div>
        <form id="rehub_login_form_modal" action="{{route('login')}}" method="post">
            @csrf
            <div class="re-form-group mb20">
                <label>Địa chỉ Email</label>
                <input class="re-form-input required" name="email" type="text"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_pass">Mật Khẩu</label>
                <input class="re-form-input required" name="password" id="rehub_user_pass" type="password"/>
                <a href="https://shopmc.com.vn/my-account/lost-password/" class="alignright">Quên mật khẩu?</a>

            </div>
            <div class="re-form-group mb20">
                <label for="rehub_remember"><input name="rehub_remember" id="rehub_remember" type="checkbox"
                                                   value="forever"/>
                    Ghi nhớ</label>
            </div>
            <div class="re-form-group mb20">
                <button class="wpsm-button rehub_main_btn" type="submit">Đăng nhập</button>
            </div>
          </form>
        <div class="rehub-errors"></div>
        <div class="rehub-login-popup-footer">Don&#039;t have an account?
            <span class="act-rehub-login-popup color_link" data-type="register">Đăng ký</span>
        </div>
    </div>
</div>
