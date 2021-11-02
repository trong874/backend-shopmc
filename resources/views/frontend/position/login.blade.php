<div id="rehub-login-popup">
    <div class="rehub-login-popup">
        <div class="re_title_inmodal">Đăng Nhập</div>

        <form id="rehub_login_form_modal" action="https://shopmc.com.vn/" method="post">
            <div class="re-form-group mb20">
                <label>Tên Đăng Nhập</label>
                <input class="re-form-input required" name="rehub_user_login" type="text"/>
            </div>
            <div class="re-form-group mb20">
                <label for="rehub_user_pass">Mật Khẩu</label>
                <input class="re-form-input required" name="rehub_user_pass" id="rehub_user_pass" type="password"/>
                <a href="https://shopmc.com.vn/my-account/lost-password/" class="alignright">Quên mật khẩu?</a>

            </div>
            <div class="re-form-group mb20">
                <label for="rehub_remember"><input name="rehub_remember" id="rehub_remember" type="checkbox"
                                                   value="forever"/>
                    Ghi nhớ</label>
            </div>
            <div class="re-form-group mb20">
                <input type="hidden" name="action" value="rehub_login_member_popup_function"/>
                <button class="wpsm-button rehub_main_btn" type="submit">Đăng nhập</button>
            </div>
            <input type="hidden" id="loginsecurity" name="loginsecurity" value="3b520bac66"/><input type="hidden"
                                                                                                    name="_wp_http_referer"
                                                                                                    value="/"/>
        </form>
        <div class="rehub-errors"></div>
        <div class="rehub-login-popup-footer">Don&#039;t have an account?
            <span class="act-rehub-login-popup color_link" data-type="register">Đăng ký</span>
        </div>
    </div>
</div>
