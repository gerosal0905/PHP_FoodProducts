<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "nutrilife";

$connection = mysqli_connect("localhost", "root", "", "nutrilife");

$dbconfig = mysqli_select_db($connection, $db_name);
?>