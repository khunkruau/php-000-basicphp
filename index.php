<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พื้นฐานคำสั่ง php</title>
</head>
<body bgcolor='<?php echo "pink"; ?>'>
        <?php
            echo "สอดแทรกคำสั่ง พีเอชพี ได้ทุกที่ของ html จะทำงานเมื่อบันทึกสกุลไฟล์เป็น php";
            echo "<br>";
            echo "<p align='center'><b>ต้องการทำงานแบบ html สั่งพิมพ์ด้วยคำสั่ง echo เป็นคำสั่ง html</b></p>";
        ?>
        การผสมกันระว่าง html และ php <?php echo "<font color='red'>"; ?>ใส่สีแดงบนข้อความ<?php echo "</font>"; ?>
        <?php echo "<br><br>"; ?>
        <table border="1" width="300" align="center">
            <tr><td>ก</td><td>ข</td></tr>
            <tr><td>ค</td><td>ง</td></tr>
            <?php echo "<tr><td>php จ</td><td>pho ฉ</td></tr>"; ?>
        </table>
         <br><br>
         <?php echo "<img src='flower.png'>";?>
    </body>
</html>