Validator({
  form: "#review-form",
  formGroupSelector: ".form-group",
  messageError: ".message-error",
  rules: [
    Validator.isRequired(".star-input", "Vui lòng chọn sao!"),

    Validator.isRequired("#comment", "Nội dung không được bỏ trống!"),

    Validator.isRequired("#name", "Họ và tên không được bỏ trống!"),
    Validator.isInvalidName("#name", "Họ và tên nhập vào không hợp lệ!"),

    Validator.isRequired("#email", "Email không được bỏ trống!"),
    Validator.isEmail("#email", "Email nhập vào không hợp lệ!"),
  ],

  onSubmit: function (data) {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      alert("Xác nhận 'Tôi không phải người máy'!`");
      evt.preventDefault();
      return false;
    } else {
      alert("Gửi nhận xét thành công!");
      location.reload();
    }
  },
});
