<?php
require __DIR__ . "/../component/config-product.php";
$sql = "select sale from tblcost where id = 'productcost4'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result)) {
    $content = $row[0];
    echo "{$content}";
} else {
    echo "<script type='text/javascript'>alert('Lấy dữ liệu thất bại !');</script>";
}
mysqli_close($conn);
