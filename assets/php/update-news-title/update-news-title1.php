<?php
if (isset($_POST["btnSaveNews"])) {
    $title = $_POST["title-news"];
    require __DIR__ . "/../component/config-news.php";
    $sql = "update tbltitle set title = '$title' where id = 'newsTitle1'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}