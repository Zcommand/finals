<?php
$servername = 'localhost';
$username   = 'root';
$password   = 'root';
$port       = '3307';
$database   = 'zhifu';

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database,
    $port
);

if(!$conn) {
    die("connection failed:". mysqli_connect_error());
}
echo "connected successfully";
?>