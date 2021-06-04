<?php
if (isset($_POST["btnSaveNews"])) {
    $content = $_POST["content-news"];
		require __DIR__ . "/../component/config-news.php";
    $sql = "update tblcontent set content = '$content' where id = 'categoryNews3'";
    $result = mysqli_query($conn, $sql);
    if ($result === true) {
        echo "<script type='text/javascript'>alert('Cập nhật thành công !');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Cập nhật thất bại !');</script>";
    }
    mysqli_close($conn);
}
