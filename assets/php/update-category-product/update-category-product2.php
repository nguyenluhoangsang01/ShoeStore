<?php
if (isset($_POST["btnSave"])) {
    $category = $_POST["category-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tblcategory set category = '$category' where id = 'category2'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}