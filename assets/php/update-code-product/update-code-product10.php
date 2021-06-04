<?php
if (isset($_POST["btnSave"])) {
    $code = $_POST["code-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcode set code = '$code' where id = 'code10'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
