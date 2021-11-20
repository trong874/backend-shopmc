@extends('frontend.layout.master')
@section('content')
    <div class="rh-container full_width">
        <div class="rh-content-wrap clearfix">
            <!-- Main Side -->
            <div class="main-side page clearfix full_width" id="content">
                <div class="rh-post-wrapper">
                    <article class="post mb0">
                        <div class="title"><h1 class="entry-title">Xác nhận – Thanh toán</h1></div>
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form method="post" class="checkout woocommerce-checkout" action="#">
                                <div class="re_woocheckout_details">
                                    <div class="col2-set" id="customer_details">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Thông tin thanh toán</h3>


                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_last_name_field" data-priority=""><label
                                                            for="billing_last_name" class="">Họ và tên&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="billing_last_name"
                                                                                                     id="billing_last_name"
                                                                                                     placeholder="Nhập đầy đủ họ và tên của bạn"
                                                                                                     value=""></span>
                                                    </p>
                                                    <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                       id="billing_country_field" data-priority="40"><label
                                                            for="billing_country" class="">Quốc gia/Khu vực&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><strong>Việt Nam</strong><input
                                                                type="hidden" name="billing_country"
                                                                id="billing_country" value="VN" autocomplete="country"
                                                                class="country_to_state" readonly="readonly"></span></p>
                                                    <p class="form-row address-field validate-required form-row-wide woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_address_1_field" data-priority="50"><label
                                                            for="billing_address_1" class="">Địa chỉ&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="billing_address_1"
                                                                                                     id="billing_address_1"
                                                                                                     placeholder="Địa chỉ"
                                                                                                     value=""
                                                                                                     autocomplete="address-line1"
                                                                                                     data-placeholder="Địa chỉ"></span>
                                                    </p>
                                                    <p class="form-row address-field form-row-wide woocommerce-validated"
                                                       id="billing_address_2_field" data-priority="60"
                                                       style="display: none;"><label for="billing_address_2"
                                                                                     class="screen-reader-text">Apartment,
                                                            suite, unit, etc. (optional)&nbsp;<span class="optional">(tuỳ chọn)</span></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="billing_address_2"
                                                                                                     id="billing_address_2"
                                                                                                     placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                                     value=""
                                                                                                     autocomplete="address-line2"
                                                                                                     data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                                    </p>
                                                    <p class="form-row address-field validate-required validate-required form-row-wide woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_city_field"
                                                       data-o_class="form-row form-row-wide address-field validate-required validate-required">
                                                        <label for="billing_city" class="">Quận huyện&nbsp;<abbr
                                                                class="required"
                                                                title="bắt buộc">*</abbr></label><select
                                                            name="billing_city" id="billing_city"
                                                            class="city_select  select2-hidden-accessible"
                                                            autocomplete="address-level2" placeholder="" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Chọn một tùy chọn…</option>
                                                            <option value="Quận Ba Đình">Quận Ba Đình</option>
                                                            <option value="Huyện Ba Vì">Huyện Ba Vì</option>
                                                            <option value="Quận Bắc Từ Liêm">Quận Bắc Từ Liêm</option>
                                                            <option value="Quận Cầu Giấy">Quận Cầu Giấy</option>
                                                            <option value="Huyện Chương Mỹ">Huyện Chương Mỹ</option>
                                                            <option value="Huyện Đan Phượng">Huyện Đan Phượng</option>
                                                            <option value="Huyện Đông Anh">Huyện Đông Anh</option>
                                                            <option value="Quận Đống Đa">Quận Đống Đa</option>
                                                            <option value="Huyện Gia Lâm">Huyện Gia Lâm</option>
                                                            <option value="Quận Hà Đông">Quận Hà Đông</option>
                                                            <option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng</option>
                                                            <option value="Huyện Hoài Đức">Huyện Hoài Đức</option>
                                                            <option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option>
                                                            <option value="Quận Hoàng Mai">Quận Hoàng Mai</option>
                                                            <option value="Quận Long Biên">Quận Long Biên</option>
                                                            <option value="Huyện Mê Linh">Huyện Mê Linh</option>
                                                            <option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option>
                                                            <option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm</option>
                                                            <option value="Huyện Phú Xuyên">Huyện Phú Xuyên</option>
                                                            <option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option>
                                                            <option value="Huyện Quốc Oai">Huyện Quốc Oai</option>
                                                            <option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option>
                                                            <option value="Thị xã Sơn Tây">Thị xã Sơn Tây</option>
                                                            <option value="Quận Tây Hồ">Quận Tây Hồ</option>
                                                            <option value="Huyện Thạch Thất">Huyện Thạch Thất</option>
                                                            <option value="Huyện Thanh Oai">Huyện Thanh Oai</option>
                                                            <option value="Huyện Thanh Trì">Huyện Thanh Trì</option>
                                                            <option value="Quận Thanh Xuân">Quận Thanh Xuân</option>
                                                            <option value="Huyện Thường Tín">Huyện Thường Tín</option>
                                                            <option value="Huyện Ứng Hòa">Huyện Ứng Hòa</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false"
                                                                    tabindex="0"
                                                                    aria-labelledby="select2-billing_city-container"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billing_city-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Chọn một tùy chọn…">Chọn một tùy chọn…</span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span></p>
                                                    <p class="form-row address-field validate-required validate-state form-row-wide woocommerce-validated"
                                                       id="billing_state_field" data-priority="80"
                                                       data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                        <label for="billing_state" class="">Tỉnh thành&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><select
                                                                name="billing_state" id="billing_state"
                                                                class="state_select select2-hidden-accessible"
                                                                autocomplete="address-level1"
                                                                data-placeholder="Chọn một tùy chọn…"
                                                                data-input-classes="" tabindex="-1" aria-hidden="true"><option
                                                                    value="">Chọn một tùy chọn…</option><option
                                                                    value="AN-GIANG">An Giang</option><option
                                                                    value="BA-RIA-VUNG-TAU">Bà Rịa - Vũng Tàu</option><option
                                                                    value="BAC-LIEU">Bạc Liêu</option><option
                                                                    value="BAC-KAN">Bắc Kạn</option><option
                                                                    value="BAC-GIANG">Bắc Giang</option><option
                                                                    value="BAC-NINH">Bắc Ninh</option><option
                                                                    value="BEN-TRE">Bến Tre</option><option
                                                                    value="BINH-DUONG">Bình Dương</option><option
                                                                    value="BINH-DINH">Bình Định</option><option
                                                                    value="BINH-PHUOC">Bình Phước</option><option
                                                                    value="BINH-THUAN">Bình Thuận</option><option
                                                                    value="CA-MAU">Cà Mau</option><option
                                                                    value="CAO-BANG">Cao Bằng</option><option
                                                                    value="CAN-THO">Cần Thơ</option><option
                                                                    value="DA-NANG">Đà Nẵng</option><option
                                                                    value="DAK-LAK">Đắk Lắk</option><option
                                                                    value="DAK-NONG">Đắk Nông</option><option
                                                                    value="DONG-NAI">Đồng Nai</option><option
                                                                    value="DONG-THAP">Đồng Tháp</option><option
                                                                    value="DIEN-BIEN">Điện Biên</option><option
                                                                    value="GIA-LAI">Gia Lai</option><option
                                                                    value="HA-GIANG">Hà Giang</option><option
                                                                    value="HA-NAM">Hà Nam</option><option
                                                                    value="HA-NOI">Hà Nội</option><option
                                                                    value="HA-TINH">Hà Tĩnh</option><option
                                                                    value="HAI-DUONG">Hải Dương</option><option
                                                                    value="HAI-PHONG">Hải Phòng</option><option
                                                                    value="HOA-BINH">Hòa Bình</option><option
                                                                    value="HAU-GIANG">Hậu Giang</option><option
                                                                    value="HUNG-YEN">Hưng Yên</option><option
                                                                    value="HO-CHI-MINH">Hồ Chí Minh</option><option
                                                                    value="KHANH-HOA">Khánh Hòa</option><option
                                                                    value="KIEN-GIANG">Kiên Giang</option><option
                                                                    value="KON-TUM">Kon Tum</option><option
                                                                    value="LAI-CHAU">Lai Châu</option><option
                                                                    value="LAO-CAI">Lào Cai</option><option
                                                                    value="LANG-SON">Lạng Sơn</option><option
                                                                    value="LAM-DONG">Lâm Đồng</option><option
                                                                    value="LONG-AN">Long An</option><option
                                                                    value="NAM-DINH">Nam Định</option><option
                                                                    value="NGHE-AN">Nghệ An</option><option
                                                                    value="NINH-BINH">Ninh Bình</option><option
                                                                    value="NINH-THUAN">Ninh Thuận</option><option
                                                                    value="PHU-THO">Phú Thọ</option><option
                                                                    value="PHU-YEN">Phú Yên</option><option
                                                                    value="QUANG-BINH">Quảng Bình</option><option
                                                                    value="QUANG-NAM">Quảng Nam</option><option
                                                                    value="QUANG-NGAI">Quảng Ngãi</option><option
                                                                    value="QUANG-NINH">Quảng Ninh</option><option
                                                                    value="QUANG-TRI">Quảng Trị</option><option
                                                                    value="SOC-TRANG">Sóc Trăng</option><option
                                                                    value="SON-LA">Sơn La</option><option
                                                                    value="TAY-NINH">Tây Ninh</option><option
                                                                    value="THAI-BINH">Thái Bình</option><option
                                                                    value="THAI-NGUYEN">Thái Nguyên</option><option
                                                                    value="THANH-HOA">Thanh Hóa</option><option
                                                                    value="THUA-THIEN-HUE">Thừa Thiên - Huế</option><option
                                                                    value="TIEN-GIANG">Tiền Giang</option><option
                                                                    value="TRA-VINH">Trà Vinh</option><option
                                                                    value="TUYEN-QUANG">Tuyên Quang</option><option
                                                                    value="VINH-LONG">Vĩnh Long</option><option
                                                                    value="VINH-PHUC">Vĩnh Phúc</option><option
                                                                    value="YEN-BAI">Yên Bái</option></select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" style="width: 100%;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        tabindex="0"
                                                                        aria-labelledby="select2-billing_state-container"
                                                                        role="combobox"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-billing_state-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Hà Nội">Hà Nội</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper" aria-hidden="true"></span></span></span>
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required validate-phone woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="billing_phone_field" data-priority="100"><label
                                                            for="billing_phone" class="">Số điện thoại&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper"><input type="tel"
                                                                                                     class="input-text "
                                                                                                     name="billing_phone"
                                                                                                     id="billing_phone"
                                                                                                     placeholder=""
                                                                                                     value=""
                                                                                                     autocomplete="tel"></span>
                                                    </p>
                                                    <p class="form-row form-row-wide woocommerce-validated"
                                                       id="billing_email_field" data-priority=""><label
                                                            for="billing_email" class="">Địa chỉ email&nbsp;<span
                                                                class="optional">(tuỳ chọn)</span></label><span
                                                            class="woocommerce-input-wrapper"><input type="text"
                                                                                                     class="input-text "
                                                                                                     name="billing_email"
                                                                                                     id="billing_email"
                                                                                                     placeholder="Bỏ trống nếu bạn không có địa chỉ email"
                                                                                                     value=""></span>
                                                    </p></div>

                                            </div>

                                            <div class="woocommerce-account-fields">

                                                <p class="form-row form-row-wide create-account woocommerce-validated">
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input
                                                            class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                            id="createaccount" type="checkbox" name="createaccount"
                                                            value="1"> <span>Tạo tài khoản mới?</span>
                                                    </label>
                                                </p>


                                                <div class="create-account" style="display: none;">
                                                    <p class="form-row validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                       id="account_password_field" data-priority=""><label
                                                            for="account_password" class="">Tạo mật khẩu của tài khoản&nbsp;<abbr
                                                                class="required" title="bắt buộc">*</abbr></label><span
                                                            class="woocommerce-input-wrapper password-input"><input
                                                                type="password" class="input-text "
                                                                name="account_password" id="account_password"
                                                                placeholder="Mật khẩu" value=""><span
                                                                class="show-password-input"></span></span></p>
                                                    <div class="clear"></div>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="col-2">
                                            <div class="woocommerce-shipping-fields">

                                                <h3 id="ship-to-different-address">
                                                    <label
                                                        class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                        <input id="ship-to-different-address-checkbox"
                                                               class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox"
                                                               type="checkbox" name="ship_to_different_address"
                                                               value="1"> <span>Giao hàng tới địa chỉ khác?</span>
                                                    </label>
                                                </h3>

                                                <div class="shipping_address" style="display: none;">


                                                    <div class="woocommerce-shipping-fields__field-wrapper">
                                                        <p class="form-row form-row-wide validate-required woocommerce-invalid woocommerce-invalid-required-field"
                                                           id="shipping_last_name_field" data-priority="20"><label
                                                                for="shipping_last_name" class="">Tên&nbsp;<abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                                         class="input-text "
                                                                                                         name="shipping_last_name"
                                                                                                         id="shipping_last_name"
                                                                                                         placeholder=""
                                                                                                         value=""
                                                                                                         autocomplete="family-name"></span>
                                                        </p>
                                                        <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                           id="shipping_country_field" data-priority="40"><label
                                                                for="shipping_country" class="">Quốc gia/Khu
                                                                vực&nbsp;<abbr class="required"
                                                                               title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><strong>Việt Nam</strong><input
                                                                    type="hidden" name="shipping_country"
                                                                    id="shipping_country" value="VN"
                                                                    autocomplete="country" class="country_to_state"
                                                                    readonly="readonly"></span></p>
                                                        <p class="form-row address-field validate-required form-row-wide woocommerce-invalid woocommerce-invalid-required-field"
                                                           id="shipping_address_1_field" data-priority="50"><label
                                                                for="shipping_address_1" class="">Địa chỉ&nbsp;<abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                                         class="input-text "
                                                                                                         name="shipping_address_1"
                                                                                                         id="shipping_address_1"
                                                                                                         placeholder="Địa chỉ"
                                                                                                         value=""
                                                                                                         autocomplete="address-line1"
                                                                                                         data-placeholder="Địa chỉ"></span>
                                                        </p>
                                                        <p class="form-row address-field form-row-wide woocommerce-validated"
                                                           id="shipping_address_2_field" data-priority="60"
                                                           style="display: none;"><label for="shipping_address_2"
                                                                                         class="screen-reader-text">Apartment,
                                                                suite, unit, etc. (optional)&nbsp;<span
                                                                    class="optional">(tuỳ chọn)</span></label><span
                                                                class="woocommerce-input-wrapper"><input type="text"
                                                                                                         class="input-text "
                                                                                                         name="shipping_address_2"
                                                                                                         id="shipping_address_2"
                                                                                                         placeholder="Apartment, suite, unit, etc. (optional)"
                                                                                                         value=""
                                                                                                         autocomplete="address-line2"
                                                                                                         data-placeholder="Apartment, suite, unit, etc. (optional)"></span>
                                                        </p>
                                                        <p class="form-row address-field validate-required validate-required form-row-wide woocommerce-invalid woocommerce-invalid-required-field"
                                                           id="shipping_city_field"
                                                           data-o_class="form-row form-row-wide address-field validate-required validate-required">
                                                            <label for="shipping_city" class="">Quận huyện&nbsp;<abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><select
                                                                name="shipping_city" id="shipping_city"
                                                                class="city_select " autocomplete="address-level2"
                                                                placeholder="">
                                                                <option value="">Chọn một tùy chọn…</option>
                                                                <option value="Quận Ba Đình">Quận Ba Đình</option>
                                                                <option value="Huyện Ba Vì">Huyện Ba Vì</option>
                                                                <option value="Quận Bắc Từ Liêm">Quận Bắc Từ Liêm
                                                                </option>
                                                                <option value="Quận Cầu Giấy">Quận Cầu Giấy</option>
                                                                <option value="Huyện Chương Mỹ">Huyện Chương Mỹ</option>
                                                                <option value="Huyện Đan Phượng">Huyện Đan Phượng
                                                                </option>
                                                                <option value="Huyện Đông Anh">Huyện Đông Anh</option>
                                                                <option value="Quận Đống Đa">Quận Đống Đa</option>
                                                                <option value="Huyện Gia Lâm">Huyện Gia Lâm</option>
                                                                <option value="Quận Hà Đông">Quận Hà Đông</option>
                                                                <option value="Quận Hai Bà Trưng">Quận Hai Bà Trưng
                                                                </option>
                                                                <option value="Huyện Hoài Đức">Huyện Hoài Đức</option>
                                                                <option value="Quận Hoàn Kiếm">Quận Hoàn Kiếm</option>
                                                                <option value="Quận Hoàng Mai">Quận Hoàng Mai</option>
                                                                <option value="Quận Long Biên">Quận Long Biên</option>
                                                                <option value="Huyện Mê Linh">Huyện Mê Linh</option>
                                                                <option value="Huyện Mỹ Đức">Huyện Mỹ Đức</option>
                                                                <option value="Quận Nam Từ Liêm">Quận Nam Từ Liêm
                                                                </option>
                                                                <option value="Huyện Phú Xuyên">Huyện Phú Xuyên</option>
                                                                <option value="Huyện Phúc Thọ">Huyện Phúc Thọ</option>
                                                                <option value="Huyện Quốc Oai">Huyện Quốc Oai</option>
                                                                <option value="Huyện Sóc Sơn">Huyện Sóc Sơn</option>
                                                                <option value="Thị xã Sơn Tây">Thị xã Sơn Tây</option>
                                                                <option value="Quận Tây Hồ">Quận Tây Hồ</option>
                                                                <option value="Huyện Thạch Thất">Huyện Thạch Thất
                                                                </option>
                                                                <option value="Huyện Thanh Oai">Huyện Thanh Oai</option>
                                                                <option value="Huyện Thanh Trì">Huyện Thanh Trì</option>
                                                                <option value="Quận Thanh Xuân">Quận Thanh Xuân</option>
                                                                <option value="Huyện Thường Tín">Huyện Thường Tín
                                                                </option>
                                                                <option value="Huyện Ứng Hòa">Huyện Ứng Hòa</option>
                                                            </select></p>
                                                        <p class="form-row address-field validate-required validate-state form-row-wide woocommerce-validated"
                                                           id="shipping_state_field" data-priority="80"
                                                           data-o_class="form-row form-row-wide address-field validate-required validate-state">
                                                            <label for="shipping_state" class="">Tỉnh thành&nbsp;<abbr
                                                                    class="required"
                                                                    title="bắt buộc">*</abbr></label><span
                                                                class="woocommerce-input-wrapper"><select
                                                                    name="shipping_state" id="shipping_state"
                                                                    class="state_select select2-hidden-accessible"
                                                                    autocomplete="address-level1"
                                                                    data-placeholder="Chọn một tùy chọn…"
                                                                    data-input-classes="" tabindex="-1"
                                                                    aria-hidden="true"><option value="">Chọn một tùy chọn…</option><option
                                                                        value="AN-GIANG">An Giang</option><option
                                                                        value="BA-RIA-VUNG-TAU">Bà Rịa - Vũng Tàu</option><option
                                                                        value="BAC-LIEU">Bạc Liêu</option><option
                                                                        value="BAC-KAN">Bắc Kạn</option><option
                                                                        value="BAC-GIANG">Bắc Giang</option><option
                                                                        value="BAC-NINH">Bắc Ninh</option><option
                                                                        value="BEN-TRE">Bến Tre</option><option
                                                                        value="BINH-DUONG">Bình Dương</option><option
                                                                        value="BINH-DINH">Bình Định</option><option
                                                                        value="BINH-PHUOC">Bình Phước</option><option
                                                                        value="BINH-THUAN">Bình Thuận</option><option
                                                                        value="CA-MAU">Cà Mau</option><option
                                                                        value="CAO-BANG">Cao Bằng</option><option
                                                                        value="CAN-THO">Cần Thơ</option><option
                                                                        value="DA-NANG">Đà Nẵng</option><option
                                                                        value="DAK-LAK">Đắk Lắk</option><option
                                                                        value="DAK-NONG">Đắk Nông</option><option
                                                                        value="DONG-NAI">Đồng Nai</option><option
                                                                        value="DONG-THAP">Đồng Tháp</option><option
                                                                        value="DIEN-BIEN">Điện Biên</option><option
                                                                        value="GIA-LAI">Gia Lai</option><option
                                                                        value="HA-GIANG">Hà Giang</option><option
                                                                        value="HA-NAM">Hà Nam</option><option
                                                                        value="HA-NOI">Hà Nội</option><option
                                                                        value="HA-TINH">Hà Tĩnh</option><option
                                                                        value="HAI-DUONG">Hải Dương</option><option
                                                                        value="HAI-PHONG">Hải Phòng</option><option
                                                                        value="HOA-BINH">Hòa Bình</option><option
                                                                        value="HAU-GIANG">Hậu Giang</option><option
                                                                        value="HUNG-YEN">Hưng Yên</option><option
                                                                        value="HO-CHI-MINH">Hồ Chí Minh</option><option
                                                                        value="KHANH-HOA">Khánh Hòa</option><option
                                                                        value="KIEN-GIANG">Kiên Giang</option><option
                                                                        value="KON-TUM">Kon Tum</option><option
                                                                        value="LAI-CHAU">Lai Châu</option><option
                                                                        value="LAO-CAI">Lào Cai</option><option
                                                                        value="LANG-SON">Lạng Sơn</option><option
                                                                        value="LAM-DONG">Lâm Đồng</option><option
                                                                        value="LONG-AN">Long An</option><option
                                                                        value="NAM-DINH">Nam Định</option><option
                                                                        value="NGHE-AN">Nghệ An</option><option
                                                                        value="NINH-BINH">Ninh Bình</option><option
                                                                        value="NINH-THUAN">Ninh Thuận</option><option
                                                                        value="PHU-THO">Phú Thọ</option><option
                                                                        value="PHU-YEN">Phú Yên</option><option
                                                                        value="QUANG-BINH">Quảng Bình</option><option
                                                                        value="QUANG-NAM">Quảng Nam</option><option
                                                                        value="QUANG-NGAI">Quảng Ngãi</option><option
                                                                        value="QUANG-NINH">Quảng Ninh</option><option
                                                                        value="QUANG-TRI">Quảng Trị</option><option
                                                                        value="SOC-TRANG">Sóc Trăng</option><option
                                                                        value="SON-LA">Sơn La</option><option
                                                                        value="TAY-NINH">Tây Ninh</option><option
                                                                        value="THAI-BINH">Thái Bình</option><option
                                                                        value="THAI-NGUYEN">Thái Nguyên</option><option
                                                                        value="THANH-HOA">Thanh Hóa</option><option
                                                                        value="THUA-THIEN-HUE">Thừa Thiên - Huế</option><option
                                                                        value="TIEN-GIANG">Tiền Giang</option><option
                                                                        value="TRA-VINH">Trà Vinh</option><option
                                                                        value="TUYEN-QUANG">Tuyên Quang</option><option
                                                                        value="VINH-LONG">Vĩnh Long</option><option
                                                                        value="VINH-PHUC">Vĩnh Phúc</option><option
                                                                        value="YEN-BAI">Yên Bái</option></select><span
                                                                    class="select2 select2-container select2-container--default"
                                                                    dir="ltr" style="width: 100%;"><span
                                                                        class="selection"><span
                                                                            class="select2-selection select2-selection--single"
                                                                            aria-haspopup="true" aria-expanded="false"
                                                                            tabindex="0"
                                                                            aria-labelledby="select2-shipping_state-container"
                                                                            role="combobox"><span
                                                                                class="select2-selection__rendered"
                                                                                id="select2-shipping_state-container"
                                                                                role="textbox" aria-readonly="true"
                                                                                title="Hà Nội">Hà Nội</span><span
                                                                                class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper"
                                                                        aria-hidden="true"></span></span></span></p>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="re_woocheckout_order">
                                    <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                    <div id="order_review" class="woocommerce-checkout-review-order">
                                        <style>
                                            .top_checkout {
                                                display: flex;
                                                border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                                padding: 5px;
                                            }

                                            .w80 {
                                                width: 63%;
                                            }
                                        </style>
                                        <style>
                                            .top_checkout {
                                                display: flex;
                                                border-bottom: 1px dashed rgba(0, 0, 0, .09);
                                                padding: 5px;
                                            }

                                            .w80 {
                                                width: 63%;
                                            }
                                        </style>
                                        <div class="shop_table woocommerce-checkout-review-order-table"
                                             style="position: static; zoom: 1;">
                                            <div class="top_checkout">
                                                <div class="product-name w80">Sản phẩm</div>
                                                <div class="product-total">Tạm tính</div>
                                            </div>
                                            @foreach($items as $key => $item)
                                            <div>
                                                <div class="cart_item top_checkout">
                                                    <div class="product-name w80">
                                                        {{$item->title}}<strong
                                                            class="product-quantity">× {{$data_cart['cart'][$item->id]['qty']}}</strong></div>
                                                    <div class="product-total">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{$data_cart['cart'][$item->id]['qty'] * $item->price}}<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div>

                                                <div class="cart-subtotal top_checkout">
                                                    <div class="w80">Tạm tính</div>
                                                    <div><span class="woocommerce-Price-amount amount"><bdi>450,000&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                    </div>
                                                </div>


                                                <div class="woocommerce-shipping-totals shipping top_checkout">
                                                    <div class="colum_cart w80 d_block">
                                                        <div class="label-gh"> Giao hàng :</div>


                                                    </div>
                                                    <div id="shipping_method" class="woocommerce-shipping-methods">
                                                        <div>
                                                            <input type="hidden" name="shipping_method[0]"
                                                                   data-index="0" id="shipping_method_0_flat_rate1"
                                                                   value="flat_rate:1" class="shipping_method"><label
                                                                for="shipping_method_0_flat_rate1">GHTK: <span
                                                                    class="woocommerce-Price-amount amount"><bdi>20,000&nbsp;<span
                                                                            class="woocommerce-Price-currencySymbol">₫</span></bdi></span></label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="order-total top_checkout">
                                                    <div class="w80">Tổng</div>
                                                    <div><strong><span class="woocommerce-Price-amount amount"><bdi>{{number_format($data_cart['total_price'])}}<span
                                                                        class="woocommerce-Price-currencySymbol">₫</span></bdi></span></strong>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                        <div id="payment" class="woocommerce-checkout-payment">
                                            <ul class="wc_payment_methods payment_methods methods">
                                                <li class="wc_payment_method payment_method_cod">
                                                    <input id="payment_method_cod" type="radio" class="input-radio"
                                                           name="payment_method" value="cod" data-order_button_text="">

                                                    <label for="payment_method_cod">
                                                        Trả tiền mặt khi nhận hàng </label>
                                                    <div class="payment_box payment_method_cod" style="display:none;">
                                                        <p>Trả tiền mặt khi giao hàng.</p>
                                                    </div>
                                                </li>
                                                <li class="wc_payment_method payment_method_bacs">
                                                    <input id="payment_method_bacs" type="radio" class="input-radio"
                                                           name="payment_method" value="bacs" checked="checked"
                                                           data-order_button_text="">

                                                    <label for="payment_method_bacs">
                                                        Chuyển khoản ngân hàng </label>
                                                    <div class="payment_box payment_method_bacs">
                                                        <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng
                                                            tôi hoặc nhân thanh toán tại nhà( ưu tiên chuyển khoản ).
                                                            Vui lòng sử dụng ID Đơn hàng của bạn như một phần để tham
                                                            khảo khi thanh toán. Chúng tôi sẽ chuyển hàng tận nhà trong
                                                            thời gian sớm nhất.Xin trân thành cảm ơn.<br>
                                                            <img
                                                                src="http://shopminecraft.vn/wp-content/uploads/2017/02/nganhang.png">
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="form-row place-order">
                                                <noscript>
                                                    Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa,
                                                    hãy đảm bảo bạn nhấp vào <em>Cập nhật giỏ hàng</em> trước khi bạn
                                                    thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu
                                                    bạn không làm như vậy. <br/>
                                                    <button type="submit" class="button alt"
                                                            name="woocommerce_checkout_update_totals"
                                                            value="Cập nhật tổng">Cập nhật tổng
                                                    </button>
                                                </noscript>

                                                <div class="woocommerce-terms-and-conditions-wrapper">
                                                    <div class="woocommerce-privacy-policy-text"></div>
                                                </div>


                                                <button type="submit" class="button alt"
                                                        name="woocommerce_checkout_place_order" id="place_order"
                                                        value="Đặt hàng" data-value="Đặt hàng">Đặt hàng
                                                </button>

                                                <input type="hidden" id="woocommerce-process-checkout-nonce"
                                                       name="woocommerce-process-checkout-nonce"
                                                       value="1b1271ad1f"><input type="hidden" name="_wp_http_referer"
                                                                                 value="/?wc-ajax=update_order_review">
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
            <!-- /Main Side -->
        </div>
    </div>
@endsection
