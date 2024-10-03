<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show editing data</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<?php
require 'conn.php';

// รับค่า ID ของนักศึกษาที่ต้องการลบจาก URL
$vid = $_GET['vid'];

// สร้างคำสั่ง SQL เพื่อลบข้อมูล
$sql = "DELETE FROM movie WHERE vid = '$vid'";

// ดำเนินการลบข้อมูล
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("refresh: 1; url=mainv.php"); // เปลี่ยนไปยังหน้าแสดงข้อมูลนักศึกษา
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 


</body>
</html>