<?php
if (isset($_POST["btnSaveDescription"])) {
    $howtobuy = $_POST["introduce-howtobuy-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblhowtobuy set howtobuy = '$howtobuy' where id = 'howtobuy17'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
