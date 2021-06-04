<?php
require __DIR__ . "/../component/config-product.php";
if (isset($_POST['btnSaveDescription'])) {
    require __DIR__ . "/../component/getImageProduct.php";
    $sql = "UPDATE tblimage SET image = '$image' where id = 'imageProduct3'";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['img-description-product']['tmp_name'], $target)) {
        echo '<script language="javascript">console.log("Cập nhật thành công");</script>';
    } else {
        echo "<script type='text/javascript'>alert('Vui lòng chọn file !');</script>";
    }
}
