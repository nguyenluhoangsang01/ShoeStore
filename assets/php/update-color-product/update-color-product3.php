<?php
if (isset($_POST["btnSaveDescription"])) {
    $color = $_POST["introduce-color-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcolor set color = '$color' where id = 'color3'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
