<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>this is webpage for edit data</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<?php
        if(!isset($_GET['vid'])){
            header("refresh: 0; url=mainv.php");
        }
        require 'conn.php';
        $sql = "SELECT * FROM movie WHERE vid='$_GET[vid]'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form method="post" action="editvsuccess.php">
        <p>

            <label>รหัสภาพยนตร์</label>
            <input type="text" name="vid" id="vid" value="<?=$row['vid'];?>" />

        </p>
        <p>

            <label>ชื่อภาพยนตร์</label>
            <input type="text" name="vname" id="vname" value="<?=$row['vname'];?>" />

        </p>

        <p>

            <label>ปีที่ฉาย</label>

            <input type="text" name="vyear" id="vyear" value="<?=$row['vyear'];?>" />

        </p>

        <p>

            <label>นักแสดงนำ</label>

            <input type="text" name="vactor" id="vactor" value="<?=$row['vactor'];?>" />

        </p>

        <p>

            <label>ประเภท</label>

            <input type="text" name="vgenre" id="vgenre" value="<?=$row['vgenre'];?>" />

        </p>
        <input id="bun" type="submit" value="บันทึก">
        <a href='mainv.php'><button> Mainmenu</button></a>
    </form>

</body>
</html>