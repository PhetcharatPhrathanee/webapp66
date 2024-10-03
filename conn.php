<?php
$conn = new mysqli('localhost','root','','videomovie');
$conn->query("SET NAMES utf8");
if($conn->connect_error){
    die("Connection Fail God damn it ". $conn->$conn_error);
}

?>