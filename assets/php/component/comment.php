<div class="form-group">
	<label for="comment">Nhận xét của bạn: </label>
	<textarea name="comment" id="comment" rows="10" placeholder="Nhập nhận xét..."
		style="width: 100%; "></textarea>
	<span class="message-error"
		style="margin-top: 1rem; font-size: 1.6rem; "></span>
</div>
<div class="comment__info">
	<div class="info__name form-group">
		<label for="name">Họ và Tên: </label>
		<input type="text" name="name" id="name" placeholder="Nhập họ và tên..." />
		<span class="message-error"
			style="margin-top: 1rem; font-size: 1.6rem; "></span>
	</div>
	<div class="info__email form-group">
		<label for="email">Email: </label>
		<input type="email" name="email" id="email" placeholder="Nhập email..." />
		<span class="message-error"
			style="margin-top: 1rem; font-size: 1.6rem; "></span>
	</div>
</div>

<div class="g-recaptcha"
	data-sitekey="6LfrFKQUAAAAAMzFobDZ7ZWy982lDxeps8cd1I2i">
</div>

<input type="submit" value="Gửi đi" class="btn comment-form" />