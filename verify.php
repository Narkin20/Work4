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
        if(($login == 'admin') && ($pass == 'ad1234'))
            echo "ยินดีต้อนรับคุณ ADMIN";
        elseif(($login == 'member') && ($pass == 'mem1234'))
            echo "ยินดีต้อนรับคุณ MEMBER";
        else
            echo "บัญชีหรือรหัสผ่านไม่ถูกต้อง";
        ?>
        <br><a href="login.html">กลับไปหน้าหลัก</a></center>
    </div>
    
</body>
</html>