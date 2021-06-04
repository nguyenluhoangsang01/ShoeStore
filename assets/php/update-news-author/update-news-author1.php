<?php
require __DIR__ . "/../component/config-news.php";
if (isset($_POST["btnSaveNews"])) {
    $author = $_POST["author-news"];
    $sql = "update tblauthor set author = '$author' where id = 'authornews1'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        // echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}