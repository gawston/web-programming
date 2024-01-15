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
                    <big>หาจำนวนมากสุดที่หาร 12 ลงตัว</big>
                </td>
            <tr>
            <tr>
                <td>รับค่าตัวเลขเริ่มต้น : </td>
                <td><input type="text" name="start" size="15" value="" /> </td>
            </tr>
                <td>รับค่าตัวเลขสิ้นสุด : </td>
                <td><input type="text" name="end" size="15" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>