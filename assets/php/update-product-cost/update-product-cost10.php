<?php
if (isset($_POST["btnSave"])) {
    $cost = $_POST["cost-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcost set cost = '$cost' where id = 'productcost10'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
