<?php
require __DIR__ . "/../component/config-news.php";
$sql = "select time from tbltime where id = 'newsdatetime1'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result)) {
    $content = $row[0];
    echo "{$content}";
} else {
    echo "<script type='text/javascript'>alert('Lấy dữ liệu thất bại !');</script>";
}
mysqli_close($conn);