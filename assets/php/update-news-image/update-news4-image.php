<?php
require __DIR__ . "/../component/config-news.php";
if (isset($_POST['btnSaveNews'])) {
    require __DIR__ . "/../component/getImage.php";
    $sql = "UPDATE tblimage SET image = '$image' where id = 'imageNews4'";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['img-news']['tmp_name'], $target)) {
        echo '<script language="javascript">console.log("Cập nhật thành công");</script>';
    } else {
        echo "<script type='text/javascript'>alert('Vui lòng chọn file !');</script>";
    }
}