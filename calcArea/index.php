<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="result.php">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <big>ทดสอบการใช้ Arithmatic Operator </big>
                </td>
            <tr>
            <tr>
                <td>Enter Number 1 : </td>
                <td><input type="text" name="number1" size="15" value="" /> </td>
            </tr>
                <td>Enter Number 2 : </td>
                <td><input type="text" name="number2" size="15" value="" /></td>
            </tr>
            <tr>
                <td> Calc : </td>
                <td align="center">
                    <input type="radio" name="calcArea" value="rectangle"> Rectangle <br>
                    <input type="radio" name="calcArea" value="triangle"> Triangle <br>
                    <input type="radio" name="calcArea" value="circle"> Circle <br>
                </td>
            <tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>

    <script>
        const radio = document.querySelectorAll('input[type="radio"]');
        const tr = document.querySelectorAll('tr');

        for (let i = 0; i < radio.length; i++) {
            radio[i].addEventListener('click', () => {
                if (radio[2].checked) {
                    tr[3].style.display = 'none';
                } else {
                    tr[3].style.display = 'table-row';
                }
            });
        }
    </script>
</body>
</html>