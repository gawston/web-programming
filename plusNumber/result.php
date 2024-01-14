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
        $result = 0;
        echo "User input: <br>";
        echo "Number 1: " . $number1 . "<br>";
        echo "Number 2: " . $number2 . "<br>";
        for($i = $number1; $i <= $number2; $i++) {
            $result += $i;
        }
        echo "Result: " . $result;
    ?>
</body>
</html>