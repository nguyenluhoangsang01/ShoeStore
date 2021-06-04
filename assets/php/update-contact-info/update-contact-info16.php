<?php
if (isset($_POST["btnSaveDescription"])) {
    $contactinfo = $_POST["introduce-contact-info-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcontactinfo set contactinfo = '$contactinfo' where id = 'contactinfo16'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
