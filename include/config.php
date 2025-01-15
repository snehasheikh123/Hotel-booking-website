<?php
$db_name="pglife";
$db_user="root";
$db_password="";
$db_host="localhost";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully<br>";