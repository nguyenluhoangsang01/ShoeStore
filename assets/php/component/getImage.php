<?php
$errors = array();
$file_name = $_FILES['img-news']['name'];
$file_size = $_FILES['img-news']['size'];
$file_tmp = $_FILES['img-news']['tmp_name'];
$file_type = $_FILES['img-news']['type'];
$file_parts = explode('.', $_FILES['img-news']['name']);
$file_ext = strtolower(end($file_parts));
$extensions = array("jpeg", "jpg", "png");
if (in_array($file_ext, $extensions) === false) {
    $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if ($file_size > 2097152) {
    $errors[] = 'Kích thước file không được lớn hơn 2MB';
}
$image = $_FILES['img-news']['name'];
$target = "../assets/img/" . basename($image);