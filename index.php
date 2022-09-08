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
    </select> </p>
    <p>
        <a href="login.html" style="float: right;"> เข้าสู่ระบบ </a>
    </p>
    <?php 
        for($i=1;$i<=10;$i++){
            echo "<a href=\"post.php?id=$i\"> กระทู้ที่ $i </a><br>";
        }
    ?>
</body>
</html>