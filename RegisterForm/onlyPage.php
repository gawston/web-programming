<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="onlyPage.css">
    <title>แบบฟอร์มรับข้อมูลนักศึกษา</title>
</head>
<body>
    <?php 
        if (isset($_GET['btnsubmit'])) {
            $fullname = $_GET['full-name'];
            $stdid = $_GET['std-id'];
            $email = $_GET['email'];
            $telnumber = $_GET['telnumber'];
            $birthday = $_GET['birthday'];
            $eduqualify = $_GET['edu-qualify'];
            $gender = $_GET['gender'];

            $date = new DateTime($birthday);
            $now = new DateTime();
            $interval = $now->diff($date);
            $age = $interval->y;
            
            echo "<div class='container'>";
            echo "<div class='header'>";
            echo "<p>แสดงผลข้อมูลนักศึกษา</p>";
            echo "</div>";
            echo "<div class='result'>";
            echo "<p>ชื่อ-นามสกุล: <span>$fullname</span></p>";
            echo "<p>รหัสนักศึกษา: <span>$stdid</span></p>";
            echo "<p>อีเมล: <span>$email</span></p>";
            echo "<p>เบอร์โทรศัพท์: <span>$telnumber</span></p>";
            echo "<p>วัน-เดือน-ปี เกิด: <span>" . date_format(date_create($birthday), "d-m-Y") . "</span></p>";
            echo "<p>อายุ: <span>$age ปี</span></p>";
            echo "<p>วุฒิการศึกษา: <span>$eduqualify</span></p>";
            echo "<p>เพศ: <span>$gender</span></p>";
            echo "<form action='" . htmlentities($_SERVER['PHP_SELF']) . "'>";
            echo "<input type='submit' name='btnback' value='ย้อนกลับ'>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        } else {
        ?>
        <div class="container">
            <div class="header">
                <p>แบบฟอร์มรับข้อมูลนักศึกษา</p>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                <label for="full-name">ชื่อ-นามสกุล <span class="req">*</span></label>
                <input type="text" name="full-name" required>

                <label for="std-id">รหัสนักศึกษา <span class="req">*</span></label>
                <input type="number" name="std-id" required>

                <label for="email">อีเมล <span class="req">*</span></label>
                <input type="email" name="email" required>

                <label for="telnumber">เบอร์โทรศัพท์ <span class="req">*</span></label>
                <input type="tel" name="telnumber" required>

                <label for="birthday">วัน-เดือน-ปี เกิด <span class="req">*</span></label>
                <input type="date" name="birthday" required>

                <label for="edu-qualify">วุฒิการศึกษา <span class="req">*</span></label>
                <select name="edu-qualify" required>
                    <option value="" disabled selected>-- วุฒิการศึกษา --</option>
                    <option value="มัธยมปลาย">มัธยมปลาย</option>
                    <option value="ปวช">ปวช</option>
                    <option value="ปวส">ปวส</option>
                    <option value="เทียบเท่า">เทียบเท่า</option>
                </select>

                <div class="gender-select">
                    <p>เพศ <span class="req">*</span></p>
                    <input type="radio" name="gender" value="ชาย" required>
                    <label for="male">ชาย</label>
                    <input type="radio" name="gender" value="หญิง" required>
                    <label for="female">หญิง</label>
                    <input type="radio" name="gender" value="ไม่ระบุ" required>
                    <label for="female">ไม่ระบุ</label>
                </div>

                <input type="submit" name="btnsubmit" value="ยืนยัน">
                <input type="reset" name="btnclear" value="ล้างข้อมูล">
            </form>
        </div>
        <?php
        }
    ?>
</body>
</html>
