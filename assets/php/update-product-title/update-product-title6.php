<?php
if (isset($_POST["btnSave"])) {
    $title = $_POST["title-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tbltitle set title = '$title' where id = 'productitle6'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
