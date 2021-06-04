Validator({
  form: "#review-form",
  formGroupSelector: ".form-group",
  messageError: ".message-error",
  rules: [
    Validator.isRequired(".star-input", "Vui lòng chọn sao!"),

    Validator.isRequired("#comment", "Bình luận không được bỏ trống!"),
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
