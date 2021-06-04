<?php
$errors = array();
$file_name = $_FILES['img-description-product']['name'];
$file_size = $_FILES['img-description-product']['size'];
$file_tmp = $_FILES['img-description-product']['tmp_name'];
$file_type = $_FILES['img-description-product']['type'];
$file_parts = explode('.', $_FILES['img-description-product']['name']);
$file_ext = strtolower(end($file_parts));
$extensions = array("jpeg", "jpg", "png");
if (in_array($file_ext, $extensions) === false) {
    $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if ($file_size > 2097152) {
    $errors[] = 'Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['img-description-product']['name'];
$target = "../assets/img/" . basename($image);