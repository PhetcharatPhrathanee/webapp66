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
    $sql_update="INSERT INTO movie(vid,vname,vyear,vactor,vgenre) VALUES ('$_POST[vid]','$_POST[vname]','$_POST[vyear]' ,'$_POST[vactor]' ,'$_POST[vgenre]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=mainv.php");
    }

?> 

</body>
</html>