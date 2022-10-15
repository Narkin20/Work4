<?php 
session_start();
if(empty($_SESSION["username"])){
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
    <title>Narkin</title>
</head>
<body>
    <h1><center>Webboard narkin</center></h1>
    <hr>
    <table>
        <tr>
            <td>ผู้ใช้ : <?php echo $_SESSION["username"] ?></td>
        </tr>
        <tr>
            <td>หมวดหมู่ : 
            <select name="Type" > 
            <option value="all"> - - ทั้งหมด - - </option> 
            <option value="gen"> - - ทั่วไป - - </option>
            <option value="sty"> - - เรียน - - </option>
        </select></td>
        </tr>
        <tr>
            <td>หัวข้อ : </td>
            <td><textarea name="text" id="text" cols="35" rows="1"></textarea></td>
        </tr>
        <tr>
            <td>เนื้อหา : </td>
            <td><textarea name="text" id="text" cols="35" rows="2"></textarea></td>
        </tr>
        <tr>
            <td><center><input type="submit" value="บันทึกข้อความ"></center></td>
        </tr>
        <br>
        
    </table>
    
</body>
</html>
