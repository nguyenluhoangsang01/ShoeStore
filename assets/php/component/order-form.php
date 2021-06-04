<form class="information-customer-form" method="POST"
	id="information-customer-form">
	<div class="information-customer-form__heading">Thông tin liên
		hệ
		khách hàng</div>
	<div class="form-group">
		<label for="full-name">Họ và tên: </label>
		<input type="text" placeholder="Nhập họ và tên..." id="full-name"
			name="full-name">
		<span class="message-error"></span>
	</div>
	<div class="form-group">
		<label for="email">Email: </label>
		<input type="text" placeholder="Nhập email..." id="email" name="email">
		<span class="message-error"></span>
	</div>
	<div class="form-group">
		<label for="phone">Số điện thoại: </label>
		<input type="text" placeholder="Nhập số điện thoại..." id="phone"
			name="phone">
		<span class="message-error"></span>
	</div>

	<div class="information-customer-form__heading">Địa chỉ giao
		hàng
	</div>
	<div class="form-group">
		<label for="calc_shipping_provinces">Chọn tỉnh/thành phố:
		</label>
		<select name="calc_shipping_provinces" required="" id="city"></select>
		<input class="billing_address_1" name="" type="hidden" value="">
		<span class="message-error"></span>
	</div>
	<div class="form-group">
		<label for="calc_shipping_district">Chọn quận/huyện: </label>
		<select name="calc_shipping_district" required="" id="districts"></select>
		<input class="billing_address_2" name="" type="hidden" value="">
		<span class="message-error"></span>
	</div>

	<div class="form-group">
		<label for="ward">Tên phường/xã: </label>
		<input type="text" placeholder="Nhập tên phường/xã..." id="ward"
			name="ward">
		<span class="message-error"></span>
	</div>
	<div class="form-group">
		<label for="hn-street-name">Số nhà, tên đường: </label>
		<input type="text" placeholder="Nhập số nhà, tên đường..."
			id="hn-street-name" name="hn-street-name">
		<span class="message-error"></span>
	</div>
	<div class="form-group">
		<label for="note">Ghi chú: </label>
		<textarea placeholder="Nhập ghi chú..." id="note" name="note"></textarea>
	</div>

	<div class="g-recaptcha"
		data-sitekey="6LfrFKQUAAAAAMzFobDZ7ZWy982lDxeps8cd1I2i"></div>

	<input type="submit" value="Gửi đơn hàng" class="btn comment-form" />
</form>