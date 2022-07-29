<?php
session_start();
$servername = "database-1.c5hv5ajqkc33.us-east-1.rds.amazonaws.com";
$server_user = "admin";
$server_pass = "12345678";
$dbname = "db";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>