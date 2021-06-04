<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "id16838387_dbcategoryproducts";
$conn = mysqli_connect("$server", "$username", "$password", "$dbname");
mysqli_set_charset($conn, "UTF8");
if (!$conn) {
    echo "<script type='text/javascript'>alert('Kết nối thất bại')</script>";
}