<?php
if (isset($_POST["btnSaveDescription"])) {
    $commitment = $_POST["introduce-commitment-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcommitment set commitment = '$commitment' where id = 'commitment14'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
