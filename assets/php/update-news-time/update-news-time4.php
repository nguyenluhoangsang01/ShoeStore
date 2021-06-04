<?php
if (isset($_POST["btnSaveNews"])) {
    $time = $_POST["time-news"];
    require __DIR__ . "/../component/config-news.php";
    $sql = "update tbltime set time = '$time' where id = 'newsdatetime4'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}