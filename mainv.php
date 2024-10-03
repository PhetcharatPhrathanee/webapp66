<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainmenu for movie</title>
    <link rel="stylesheet" href="stylet.css">
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<h1>Movie Information</h1>
<br>
        <table>
            <thead>
                <tr>
                    <th>รหัสภาพยนตร์</th>
                    <th>ชื่อภาพยนตร์/ปีที่ฉาย</th>
                    <th>นักแสดงนำ</th>
                    <th>ประเภท</th>
                    <th>แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["vid"]."</td>"."<td>".$row["vname"]." ".$row["vyear"]."</td>"."<td>".$row["vactor"]."</td>"."<td>".$row["vgenre"]."</td>"."<td>"."<a href='editv.php?vid=".$row["vid"]."'><button> Edit </button></a>"."<br>"."<a href='deletev.php?vid=".$row["vid"]."'><button> Delete </button></a>"."</td>";
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
        <a href='insertv.php'><button> Insert Movie</button></a>
        <a href='mainm.php'><button>Membership Information</button></a>
        <a href='mainac.php'><button>Actor</button></a>
        <a href='main.php'><button>Main</button></a>
</html>