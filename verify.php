<?php 
session_start();

if(!empty($_SESSION["username"])){
    header("Location:index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1><center>Webboard narkin</center></h1>
    <hr>
    <div>
    <center><?php $login = $_POST["login"]; $pass = $_POST["pass"];
        if(($login == 'admin') && ($pass == 'ad1234')){
            echo "ยินดีต้อนรับคุณ ADMIN";
            $_SESSION["username"]="admin";
            $_SESSION["role"]="a";
            $_SESSION["id"]=session_id();
        }elseif(($login == 'member') && ($pass == 'mem1234')){
            echo "ยินดีต้อนรับคุณ MEMBER";
            $_SESSION["username"]="member";
            $_SESSION["role"]="m";
            $_SESSION["id"]=session_id();
        }else
            echo "บัญชีหรือรหัสผ่านไม่ถูกต้อง";

        
        ?>
        <br><a href="index.php">กลับไปหน้าหลัก</a></center>
    </div>
    
</body>
</html>