<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<h1><center>Webboard narkin</center></h1>
    <hr>
    <center>
        คุณต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?><br><?php $num = $_GET["id"]; 
        if(($num % 2) == 0)
            echo "เป็นกระทู้หมายเลขคู่";
        else
            echo "เป็นกระทู้หมายเลขคี่";
             ?><br><br>
        <table style="border: 2px solid black; width: 40%;" align="center">
        <tr>
            <td colspan="2" style="background-color: #6CD2FE;"><center> แสดงความคิดเห็น </center></td>
        </tr>
        <tr>
            <td>><textarea name="text" id="text" cols="35" rows="2"></textarea></td>
        </tr>
        <tr> 
            <td colspan="2"align="center"> <input type="submit" value="ส่งข้อความ"> </td>
        </tr>
        </table>
        <br><a href="index.php">กลับไปหน้าหลัก</a>
    </center>
</body>
</html>