<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .wrapper {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    @keyframes hue {
        0% {
            filter: hue-rotate(0);
        }
        100% {
            filter: hue-rotate(360deg);
        }
    }

    img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 20px;
        animation: hue 1s linear infinite;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
        height: auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    </style>

    <?php
        $name = "นฤนาท คามวารี";
        $id = 6506021611076;
        $address = "ฉะเชิงเทรา";
        $nickname = "น๊อต";
    ?>

    <div class="wrapper">
        <div class="content">
            <?php echo "<img src='49.jpg' alt=''>"?>
            <p><?php echo "ชื่อ-นามสกุล: $name"?></p>
            <p><?php echo "รหัสนักศึกษา: $id"?></p>
            <p><?php echo "ที่อยู่: $address"?></p>
            <p><?php echo "ชื่อเล่น: $nickname"?></p>
        </div>
    </div>

</body>
</html>