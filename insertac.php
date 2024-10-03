<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this page show inserting</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<form method="post" action="insertacsuccess.php">
        <p>

            <label>รหัสนักแสดงนำ</label>
            <input type="text" name="aid" id="aid">

        </p>
        <p>

            <label>ชื่อ</label>
            <input type="text" name="aname" id="aname">

        </p>

        <p>

            <label>นามสกุล</label>

            <input type="text" name="alastname" id="alastname">

        </p>

        <p>

            <label>เพศ</label>

            <input type="text" name="gender" id="gender">

        </p>

        <p>

            <label>อายุ</label>

            <input type="text" name="age" id="age">

        </p>
        <p>

            <label>จำนวนผลงาน</label>

            <input type="text" name="acount" id="acount">

        </p>
        <input id="bun"type="submit" value="บันทึก">
        <a href='mainac.php'><button> Mainmenu</button></a>
    </form>

</body>
</html>