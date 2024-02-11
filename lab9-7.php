<html>
<head>
    <title>แสดงการสร้างและเข้าถึง Numeric Array แบบหลายมิติ</title>
</head>
<body>
    <?php
        $maxRow = 10;
        $maxCol = 3;
        for($r = 0; $r < $maxRow; $r++) {
            $score[$r][0] = rand(0, 10);
            $score[$r][1] = rand(0, 35);
            $score[$r][2] = rand(0, 35);
        }
        echo "<table style='border: 1px solid black;' align='center' width='500px'>";
        echo "<tr style='background-color: skyblue;'><td width='80' align='center'>No.</td>";
        echo "<td width='80' align='center'>Homework</td>";
        echo "<td width='80' align='center'>Midterm</td>";
        echo "<td width='80' align='center'>Final</td>";
        echo "<td width='80' align='center'>Total</td></tr>";
        for($r = 0; $r < $maxRow; $r++) {
            echo "<tr><td align='center'>" . ($r + 1) . "</td>";
            $total = 0;
            for($c = 0; $c < $maxCol; $c++) {
                echo "<td align='center'>" . $score[$r][$c] . "</td>";
                $total += $score[$r][$c];
            }
            echo "<td align='center'>" . $total . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>