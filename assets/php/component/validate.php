<?php

function isInvalidName($str)
{
    return (preg_match("/[^a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ]/u", $str)) ? true : false;
}

function isInvalidCharacters($str)
{
    return (preg_match("/^[A-Za-z]{1}[A-Za-z0-9]{7,31}$/", $str)) ? true : false;
}

function isNumberPhone($str)
{
    return (preg_match("/^[0-9]*$/", $str)) ? true : false;
}

function isEmail($str)
{
    return (preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/", $str)) ? true : false;
}

function isPassword($str)
{
    return (preg_match("/^([A-Z]){1}([\w_\.!@#$%^&*()]+){7,31}$/", $str)) ? true : false;
}