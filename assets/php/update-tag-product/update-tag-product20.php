<?php
if (isset($_POST["btnSave"])) {
    $tag = $_POST["tag-product"];
    require __DIR__ . "/../component/config-product.php";
    $sql = "update tbltag set tag = '$tag' where id = 'tag20'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
