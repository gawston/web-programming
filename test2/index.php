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
                    <big>คำนวณภาษีที่ต้องจ่าย</big>
                </td>
            <tr>
            <tr>
                <td>รับค่าเงินเดือน : </td>
                <td><input type="text" name="salary" size="15" value="" /> </td>
            </tr>
            <tr>
                <td>รับค่าลดหย่อน/ปี : </td>
                <td><input type="text" name="tax" size="15" value="" /> </td>
            </tr>
            <tr>
                <td>รับค่าใช้จ่าย/ปี : </td>
                <td><input type="text" name="expenses" size="15" value="" /> </td>
            </tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>