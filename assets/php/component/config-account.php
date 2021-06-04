<?php
$server = "localhost";
$server_username = "root";
$server_password = "";
$dbname = "id16838387_dbcategorynews";
$conn = mysqli_connect("$server", "$server_username", "$server_password", "$dbname");
mysqli_set_charset($conn, "UTF8");
if (!$conn) {
    echo "<script type='text/javascript'>alert('Kết nối thất bại')</script>";
}