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
$sql_update="UPDATE movie SET vname='$_POST[vname]',vyear='$_POST[vyear]' ,vactor='$_POST[vactor]' ,vgenre='$_POST[vgenre]' WHERE vid='$_POST[vid]' ";

            $result= $conn->query($sql_update);

            if(!$result) {
                die("Error God Damn it : ". $conn->error);
            } else {

            echo "Edit Success <br>";
            header("refresh: 1; url=mainv.php");
            }

        ?>

</body>
</html>