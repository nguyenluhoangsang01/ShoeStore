<?php
require __DIR__ . "/../component/config-product.php";
$path = "SELECT image FROM tblimage WHERE id = 'imageProduct19'";
$result = mysqli_query($conn, $path);
while ($row = mysqli_fetch_array($result)) {
    $content = $row[0];
    echo "{$content}";
}
if ($row != mysqli_fetch_array($result)) {
    echo "<script type='text/javascript'>alert('Lấy dữ liệu thất bại !');</script>";
}
mysqli_close($conn);
