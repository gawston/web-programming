<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $number = $_GET['number'];
        for( $i = 1; $i < $number +1; $i++ ) {
            echo "Row:" . $i . '&emsp;&emsp;';
            for($j = 1; $j <= $i; $j++) {
                echo "&nbsp;<strong style='color: green;'>*</strong>";
            }
            echo "<br>";
        }

        echo "<br><a href='index.php'>Back</a> ";
    ?>
</body>
</html>