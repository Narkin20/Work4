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
    <title>Register</title>
</head>
<body>
    <h1><center>Webboard narkin</center></h1>
    <hr>
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr>
            <td colspan="2" style="background-color: #6CD2FE;">
                กรอกข้อมูล
            </td>
        </tr>

        <tr>
            <td>
                ชื่อบัญชี :
            </td>
            <td>
                <input type="text" name="login" size="40">
            </td>
        </tr>

        <tr>
            <td>
                รหัสผ่าน :
            </td>
            <td>
                <input type="password" name="pass" size="40">
                
        </tr>

        <tr>
            <td>
                ชื่อ-นามสกุล :
            </td>
            <td>
                <input type="text" name="nameuser" size="40">
                
        </tr>

        <tr>
            <td>
                เพศ :
            </td>
            <td>
                <input type="radio" name="sex" value="m">ชาย<br>
                <input type="radio" name="sex" value="f">หญิง<br>
                <input type="radio" name="sex" value="x">อื่นๆ<br>
                
        </tr>

        <tr>
            <td>
                Email :
            </td>
            <td>
                <input type="email" name="email" size="40">
                
        </tr>
        
        <tr>
            <td colspan="2"align="center">
                <input type="submit" value="สมัครสมาชิก">
            </td>
        </tr>
    </table>
    <br>
    <center><a href="login.php">กลับไปยังหน้าหลัก</a></center>
</body>
</html>