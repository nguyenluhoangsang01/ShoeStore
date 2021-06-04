Validator({
  form: "#information-customer-form",
  formGroupSelector: ".form-group",
  messageError: ".message-error",
  rules: [
    Validator.isRequired("#full-name", "Họ và tên không được bỏ trống!"),
    Validator.isInvalidName("#full-name", "Họ và tên nhập vào không hợp lệ!"),

    Validator.isRequired("#email", "Email không được bỏ trống!"),
    Validator.isEmail("#email", "Email nhập vào không hợp lệ!"),

    Validator.isRequired("#phone", "Số điện thoại không được bỏ trống!"),
    Validator.isNumberPhone("#phone", "Số điện thoại nhập vào không hợp lệ!"),

    Validator.isRequired("#city", "Tỉnh/thành phố không được bỏ trống!"),

    Validator.isRequired("#districts", "Quận huyện không được bỏ trống!"),

    Validator.isRequired("#ward", "Tên phường/xã không được bỏ trống!"),

    Validator.isRequired(
      "#hn-street-name",
      "Số nhà, tên đường không được bỏ trống!"
    ),
  ],
  onSubmit: function (data) {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      alert("Xác nhận 'Tôi không phải người máy'!`");
      evt.preventDefault();
      return false;
    } else {
      alert("Gửi đơn đặt hàng thành công!");
      location.reload();
    }
  },
});
