<?php

//เข้ารหัส
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PATCH, PUT, DELETE');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1278000');
header('Content-Length: 0');
header('Content-Type: text/plain');

// ประกาศตัวแปรในการเชื่อมต่อฐานข้อมูล
$hostAPI = "localhost";
$userAPI = "root";
$passAPI = "";
$dbNameAPI = "class23";

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($hostAPI, $userAPI, $passAPI, $dbNameAPI) 
    or die("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้");

// ตั้งค่าชุดอักขระเป็น utf8
mysqli_set_charset($conn, "utf8");
?>