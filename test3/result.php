<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $start = $_GET['start'];
    $end = $_GET['end']; 
    echo "ค่าตัวเลขเริ่มต้น: " . $start . "<br>";
    echo "ค่าตัวเลขสิ้นสุด: " . $end . "<br>";
    for($i = $start; $i < $end; $i++) {
        if($i %12 == 0) {
            $result = $i;
        }
    }
    echo "ผลลัพธ์: " . $result;
    
    echo "<br><br><a href='index.php'>Back</a> ";
    ?>
</body>
</html>