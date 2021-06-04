<?php
if (isset($_POST["btnSaveDescription"])) {
    $introduce = $_POST["introduce-trademark-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblintroducetrademaker set introducetrademaker = '$introduce' where id = 'introducetramaker9'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
