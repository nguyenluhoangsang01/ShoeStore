<?php
if (isset($_POST["btnSaveDescription"])) {
    $size = $_POST["introduce-size-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblsize set size = '$size' where id = 'size6'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
