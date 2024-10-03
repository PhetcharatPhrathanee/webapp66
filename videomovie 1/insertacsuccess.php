<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this webpage show insert data</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO actor(aid,aname,alastname,gender,age,acount) VALUES ('$_POST[aid]','$_POST[aname]','$_POST[alastname]' ,'$_POST[gender]' ,'$_POST[age]','$_POST[acount]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=mainac.php");
    }

?> 

</body>
</html>