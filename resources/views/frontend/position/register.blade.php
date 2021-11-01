<div id="rehub-register-popup">
    <div class="rehub-register-popup">
        <div class="re_title_inmodal">Đăng Ký Tài Khoản</div>
        <form id="rehub_registration_form_modal" action="https://shopmc.com.vn/" method="POST">
            <div class="re-form-group mb20">
                <label>Tên đăng nhập</label>
                <input class="re-form-input required" name="rehub_user_login" type="text"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_email">Email</label>
                <input class="re-form-input" name="rehub_user_email" id="rehub_user_email" type="email"
                       placeholder="Bỏ trống nếu bạn không có email."/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_signonpassword">Mật khẩu<span
                        class="alignright font90">Minimum 6 symbols</span></label>
                <input class="re-form-input required" name="rehub_user_signonpassword"
                       id="rehub_user_signonpassword" type="password"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_confirmpassword">Nhập lại mật khẩu</label>
                <input class="re-form-input required" name="rehub_user_confirmpassword"
                       id="rehub_user_confirmpassword" type="password"/>
            </div>

            <div class="re-form-group mb20">
                <input type="hidden" name="action" value="rehub_register_member_popup_function"/>
                <button class="wpsm-button rehub_main_btn" type="submit">Đăng Ký</button>
            </div>
            <input type="hidden" id="register-security" name="register-security" value="3b520bac66"/><input
                type="hidden" name="_wp_http_referer" value="/"/></form>
        <div class="rehub-errors"></div>
        <div class="rehub-login-popup-footer">Already have an account? <span
                class="act-rehub-login-popup color_link" data-type="login">Login</span></div>
    </div>
</div>
