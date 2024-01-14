<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $calcArea = $_GET['calcArea'];
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    if($calcArea == "rectangle") {
        echo "ความกว้าง: $number1 <br />";
        echo "ความยาว: $number2 <br />";
        echo "หาพื้นที่: $calcArea <br />";
        echo "ผลลัพธ์: " . ($number1 * $number2) . "<br />";
    }
    elseif($calcArea == "triangle") {
        echo "ความยาวฐาน: $number1 <br />";
        echo "ความสูง: $number2 <br />";
        echo "หาพื้นที่: $calcArea <br />";
        echo "ผลลัพธ์: " . (($number1 * $number2) / 2) . "<br />";
    }
    elseif($calcArea == "circle") {
        echo "รัศมี: $number1 <br />";
        echo "หาพื้นที่: $calcArea <br />";
        echo "ผลลัพธ์: " . (3.14 * ($number1 * $number1)) . "<br />";
    }
    ?>
</body>
</html>