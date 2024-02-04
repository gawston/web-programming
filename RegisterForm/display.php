<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display.css">
    <title>แสดงผลข้อมูลนักศึกษา</title>
</head>
<body>
    <?php 
        $fullname = $_GET['full-name'];
        $email = $_GET['email'];
        $birthday = $_GET['birthday'];
        $studentid = $_GET['std-id'];
        $eduqualify = $_GET['edu-qualify'];
        $gender = $_GET['gender'];
    ?>

    <div class="container">
        <div class="header">
            <p>แสดงผลข้อมูลนักศึกษา</p>
        </div>
        <div class="content">
            <p>ชื่อ-นามสกุล: <span><?php echo $fullname ?></span></p>
            <p>รหัสนักศึกษา: <span><?php echo $studentid ?></span></p>
            <p>อีเมล: <span><?php echo $email ?></span></p>
            <p>วัน-เดือน-ปี เกิด: <span><?php echo date_format(date_create($birthday), "d-m-Y") ?></span></p>
            <p>วุฒิการศึกษา: <span><?php echo $eduqualify ?></span></p>
            <p>เพศ: <span><?php echo $gender ?></span></p>

            <a href="index.php"><button>กลับหน้าหลัก</button></a>
        </div>
    </div>
</body>
</html>