<?php
if (isset($_POST["btnSaveDescription"])) {
    $weight = $_POST["introduce-weight-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblweight set weight = '$weight' where id = 'weight10'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
