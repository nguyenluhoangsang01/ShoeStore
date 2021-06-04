<?php
if (isset($_POST["btnSave"])) {
    $introduce = $_POST["introduce-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblintroduce set introduce = '$introduce' where id = 'introduce20'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}