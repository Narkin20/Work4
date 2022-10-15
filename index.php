<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Narkin</title>
</head>
<body>
    <h1><center>Webboard narkin</center></h1>
    <hr>
    <p>หมวดหมู่ : 
        <select name="Type" > 
        <option value="all"> - - ทั้งหมด - - </option> 
        <option value="gen"> - - ทั่วไป - - </option>
        <option value="sty"> - - เรียน - - </option>
    </select> 
    <?php
    if(empty($_SESSION["username"])){?>
        &emsp;&emsp;&emsp;&emsp; ผู้ใช้งานระบบ : guest
    <?php
    }else{
    ?>
    &emsp;&emsp;&emsp;&emsp; ผู้ใช้งานระบบ : <?php echo $_SESSION["username"] ?>
    <?php
    }
    ?>
    
    <?php 
    if(empty($_SESSION["username"])){
    ?>
        <a href="login.php" style="float: right;"> เข้าสู่ระบบ </a>
    <?php
    }else{
    ?>
        <a href="logout.php" style="float: right;"> ออกจากระบบ </a>
    <?php
    }
    ?>
    </p>
    <a href="newpost.php"> สร้างกระทู้ใหม่ </a><br><br>
    
    <?php 
    for($i=1;$i<=10;$i++){
        echo "<a href=\"post.php?id=$i\"> กระทู้ที่ $i </a>";
        if(empty($_SESSION['role'])){
            echo "<br>";
            continue;
        }else{
            if($_SESSION['role'] == "a"){
                echo "<a href=\"delete.php?id=$i\">&emsp;ลบ</a><br>";
            }else{
                echo "<br>";
            }
        }
    }
    ?>
</body>
</html>