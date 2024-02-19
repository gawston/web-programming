<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Display.css">
    <title>แสดงผลข้อมูลนักศึกษา</title>
</head>
<body>
    <style>
        .d {
            display: flex;
            flex-direction: column;
        }
    </style>
    <?php 
        $fullname = $_GET['full-name'];
        $email = $_GET['email'];
        $telnumber = $_GET['telnumber'];
        $birthday = $_GET['birthday'];
        $studentid = $_GET['std-id'];
        $eduqualify = $_GET['edu-qualify'];
        $gender = $_GET['gender'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbName = "userdata";
        $conn = mysqli_connect($hostname, $username, $password);
        if (!$conn) die("ไม่สามารถติดต่อกับ mySQL ได้");
        mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");
        mysqli_query($conn, "set character_set_connection=utf8mb4");
        mysqli_query($conn, "set character_set_client=utf8mb4");
        mysqli_query($conn, "set character_set_results=utf8mb4");

        if(empty($fullname) || empty($email) || empty($telnumber) || empty($studentid)) {
            echo '<script>alert("กรุณากรอกข้อมูลให้ครบถ้วน"); 
            history.back(); </script>';
            exit();
        } else if(!preg_match('/^[ก-ฯะ-์a-zA-Z ]+$/', $fullname)) {
            echo '<script>alert("Not use some character"); 
            history.back(); </script>';
            exit();
        } else if(!ctype_digit(trim($telnumber))) {
            echo '<script>alert("กรุณากรอก หมายเลขโทรศัพท์"); 
            history.back(); </script>';
            exit();
        } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("กรุณากรอกอีเมลให้ถูกต้อง"); 
            history.back(); </script>';
            exit();
        }

        $sql = "insert into user(userid, username, useremail, userphone, userbirthday, usereducation, usergender) values ('$studentid', '$fullname', '$email', '$telnumber', '$birthday', '$eduqualify', '$gender')";
        mysqli_query($conn, $sql) or die("Insert ผิดพลาด" . mysqli_error());
        echo "<div style='display: flex; flex-direction: column;'>";
        echo "<h1>บันทึกข้อมูลลง database เรียบร้อยแล้ว</h1>";
        echo "<a href='index.php'><button>กลับหน้าหลัก</button></a>";
        echo "</div>";
    ?>
</body>
</html>
