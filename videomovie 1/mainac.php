<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainmenu for actor</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM actor";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Actor</h1><br>
        <table>
            <thead>
                <tr>
                    <th>รหัสผู้ใช้</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>เพศ</th>
                    <th>อายุ</th>
                    <th>จำนวนผลงาน</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["aid"]."</td>"."<td>".$row["aname"]." ".$row["alastname"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["age"]."</td>"."<td>".$row["acount"]."</td>"."<td>"."<a href='editac.php?aid=".$row["aid"]."'><button> Edit </button></a>"."<br>"."<a href='deleteac.php?aid=".$row["aid"]."'><button> Delete </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table> 
        <br>
        <a href='insertac.php'><button> Insert Actor</button></a>
        <a href='mainm.php'><button>Membership Information</button></a>
        <a href='mainv.php'><button>Movie Information</button></a>
        <a href='main.php'><button>Main</button></a>
</html>