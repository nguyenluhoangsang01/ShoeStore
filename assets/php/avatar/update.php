<?php
require __DIR__ . "/../component/config-product.php";
if (isset($_POST['saveAvatar'])) {
    $errors = array();
    $file_name = $_FILES['avatar']['name'];
    $file_size = $_FILES['avatar']['size'];
    $file_tmp = $_FILES['avatar']['tmp_name'];
    $file_type = $_FILES['avatar']['type'];
    $file_parts = explode('.', $_FILES['avatar']['name']);
    $file_ext = strtolower(end($file_parts));
    $extensions = array("jpeg", "jpg", "png");
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if ($file_size > 2097152) {
        $errors[] = 'Kích thước file không được lớn hơn 2MB';
    }
    $image = $_FILES['avatar']['name'];
    $target = "assets/img/" . basename($image);
    $sql = "UPDATE tblimage SET image = '$image' where id = 'avatar'";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
        echo '<script language="javascript">console.log("Cập nhật thành công");</script>';
    } else {
        echo "<script type='text/javascript'>alert('Vui lòng chọn file !');</script>";
    }
}