<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<form method="post" action="insertvsuccess.php">
        <p>

            <label>รหัสภาพยนตร์</label>
            <input type="text" name="vid" id="vid">

        </p>
        <p>

            <label>ชื่อภาพยนตร์</label>
            <input type="text" name="vname" id="vname">

        </p>

        <p>

            <label>ปีที่ฉาย</label>

            <input type="Date" name="vyear" id="vyear">

        </p>

        <p>

            <label>นักแสดงนำ</label>

            <input type="text" name="vactor" id="vactor">

        </p>

        <p>

            <label>ประเภท</label>

            <input type="text" name="vgenre" id="vgenre">

        </p>
        <input id="bun"type="submit" value="บันทึก">
        <a href='mainv.php'><button> Mainmenu</button></a>
    </form>

</body>
</html>