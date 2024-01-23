<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $salary = $_GET['salary'];
        $tax = $_GET['tax'];
        $expenses = $_GET['expenses'];
        $earn = ($salary * 12) - $tax - $expenses;
        echo "เงินเดือน: " . $salary . "<br>";
        echo "ค่าลดหย่อน/ปี: " . $tax . "<br>";
        echo "ค่าใช้จ่าย/ปี: " . $expenses . "<br><br>";
        echo "เงินที่ได้สุทธิ: " . $earn . "<br>";
        if($earn <= 150000) {
            echo "ภาษี: " . "ได้รับการยกเว้น";
        } else if($earn > 150000 && $earn <= 300000) {
            echo "ภาษี: " . $earn * 5/100;
        } else if( $earn > 300000 && $earn <= 500000) {
            echo "ภาษี: " . $earn * 10/100;
        } else if( $earn > 500000 && $earn <= 750000) {
            echo "ภาษี: " . $earn * 15/100;
        } else if( $earn > 750000 && $earn <= 1000000) {
            echo "ภาษี: " . $earn * 20/100;
        } else if( $earn > 1000000 && $earn <= 2000000) {
            echo "ภาษี: " . $earn * 25/100;
        } else if( $earn > 2000000 && $earn <= 5000000) {
            echo "ภาษี: " . $earn * 30/100;
        } else if( $earn > 5000000) {
            echo "ภาษี: " . $earn * 35/100;
        }

        echo "<br><br><a href='index.php'>Back</a> ";
    ?>
</body>
</html>
