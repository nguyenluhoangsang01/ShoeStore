function Validator(e) {
  function getParent(element, selector) {
    while (element.parentElement) {
      if (element.parentElement.matches(selector)) {
        return element.parentElement;
      }

      element = element.parentElement;
    }
  }

  var selectorRules = {};

  function Validate(inputElement, rule) {
    var errorElement = getParent(
      inputElement,
      e.formGroupSelector
    ).querySelector(e.messageError);

    var rules = selectorRules[rule.selector];

    var errorMessage;

    for (var i = 0; i < rules.length; i++) {
      switch (inputElement.type) {
        case "radio":
        case "checkbox":
          errorMessage = rules[i](
            formElement.querySelector(rule.selector + ":checked")
          );
          break;
        default:
          errorMessage = rules[i](inputElement.value);
      }

      if (errorMessage) break;
    }

    if (errorMessage) {
      errorElement.innerText = errorMessage;
      inputElement.classList.add("invalid");
    } else {
      errorElement.innerText = "";
      inputElement.classList.remove("invalid");
    }

    return !errorMessage;
  }

  var formElement = document.querySelector(e.form);

  if (formElement) {
    formElement.onsubmit = (ePD) => {
      ePD.preventDefault();

      var isFormValid = true;

      e.rules.forEach((rule) => {
        var inputElement = formElement.querySelector(rule.selector);
        var isValid = Validate(inputElement, rule);
        if (!isValid) {
          isFormValid = false;
        }
      });

      if (isFormValid) {
        if (typeof e.onSubmit === "function") {
          var enableInputs = formElement.querySelectorAll(
            "[name]:not([disable])"
          );

          var formValues = Array.from(enableInputs).reduce((value, input) => {
            value[input.name] = input.value;

            switch (input.type) {
              case "radio":
                value[input.name] = formElement.querySelector(
                  "input[name='" + input.name + "']:checked"
                ).value;
                break;

              case "checkbox":
                if (input.matches(":checked")) return value;
                if (!Array.isArray(value[input.name])) {
                  value[input.name] = [];
                }
                value[input.name].push(input.value);
                break;

              case "file":
                value[input.name] = input.files;
                break;

              default:
                value[input.name] = input.value;
            }

            return value;
          }, {});

          e.onSubmit(formValues);
        }
      } else {
        // alert("Enter all inputs");
      }
    };

    e.rules.forEach((rule) => {
      if (Array.isArray(selectorRules[rule.selector])) {
        selectorRules[rule.selector].push(rule.test);
      } else {
        selectorRules[rule.selector] = [rule.test];
      }

      var inputElements = formElement.querySelectorAll(rule.selector);

      Array.from(inputElements).forEach((inputElement) => {
        inputElement.onblur = () => {
          Validate(inputElement, rule);
        };

        inputElement.oninput = () => {
          var errorElement = getParent(
            inputElement,
            e.formGroupSelector
          ).querySelector(e.messageError);

          errorElement.innerText = "";
          inputElement.classList.remove("invalid");
        };
      });
    });
  }
}

Validator.isRequired = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      return value ? undefined : message || "Please enter this filed!";
    },
  };
};

Validator.isInvalidName = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      const regex =
        /[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u;
      return regex.test(value)
        ? undefined
        : message || "Input values ​​do not match";
    },
  };
};

Validator.isInvalidCharacters = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      const regex = /^[a-zA-Z0-9]+$/;
      return regex.test(value)
        ? undefined
        : message || "Input values ​​do not match";
    },
  };
};

Validator.isEmail = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      const regex =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      return regex.test(value)
        ? undefined
        : message || "Please enter your email!";
    },
  };
};

Validator.isLengthMin = (selector, min, message) => {
  return {
    selector: selector,
    test: (value) => {
      return value.length >= min
        ? undefined
        : message || `Please enter at least ${min} characters!`;
    },
  };
};

Validator.isConfirmed = (selector, getValuePassword, message) => {
  return {
    selector: selector,
    test: (value) => {
      return value === getValuePassword()
        ? undefined
        : message || "Input values ​​do not match";
    },
  };
};

Validator.isNumberPhone = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      const regex = /(84|0[3|5|7|8|9])+([0-9]{8})\b/g;

      return regex.test(value)
        ? undefined
        : message || "Please enter your number phone!";
    },
  };
};

Validator.isUrlFacebook = (selector, message) => {
  return {
    selector: selector,
    test: (value) => {
      const regex =
        /(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?/g;

      return regex.test(value)
        ? undefined
        : message || "Please enter your url facebook!";
    },
  };
};
