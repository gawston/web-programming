<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>แบบฟอร์มรับข้อมูลนักศึกษา</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <p>แบบฟอร์มรับข้อมูลนักศึกษา</p>
        </div>
        <form action="display.php" method='get'>
            <label for="full-name">ชื่อ-นามสกุล <span>*</span></label>
            <input type="text" name="full-name">

            <label for="std-id">รหัสนักศึกษา <span>*</span></label>
            <input type="number" name="std-id" maxlength="5">

            <label for="email">อีเมล <span>*</span></label>
            <input type="email" name="email">

            <label for="telnumber">เบอร์โทรศัพท์ <span>*</span></label>
            <input type="tel" name="telnumber">

            <label for="birthday">วัน-เดือน-ปี เกิด <span>*</span></label>
            <input type="date" name="birthday" required>

            <label for="edu-qualify">วุฒิการศึกษา <span>*</span></label>
            <select name="edu-qualify" required>
                <option value="" disabled selected>-- วุฒิการศึกษา --</option>
                <option value="มัธยมปลาย">มัธยมปลาย</option>
                <option value="ปวช">ปวช</option>
                <option value="ปวส">ปวส</option>
                <option value="เทียบเท่า">เทียบเท่า</option>
            </select>

            <div class="gender-select">
                <p>เพศ <span>*</span></p>
                <input type="radio" name="gender" value="ชาย" required>
                <label for="male">ชาย</label>
                <input type="radio" name="gender" value="หญิง" required>
                <label for="female">หญิง</label>
                <input type="radio" name="gender" value="ไม่ระบุ" required>
                <label for="female">ไม่ระบุ</label>
            </div>

            <input type="submit" value="ยืนยัน">
        </form>
    </div>
</body>
</html>
