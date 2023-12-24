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
            animation: rgb 1s linear infinite;
        }

        @keyframes rgb {
            from {
                filter: hue-rotate(0);
            }
            to {
                filter: hue-rotate(360deg);
            }
        }

        .wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .header {
            width: 100%;
            text-align: center;
            background-color: skyblue;
            /* font-size: 15px; */
        }

        .container {
            width: 500px;
            /* border: 1px solid red; */
            background-color: #DEDEDE;
            border-radius: 10px;
            overflow: hidden;
        }

        .content {
            padding: 5px 10px;
        }

        .list {
            display: flex;
            align-items: center;
            width: 100%;
            height: 40px;
            margin: 5px 0;
            gap: 5px;
            font-size: 18px;
        }

        .left {
            display: flex;
            align-items: center;
            width: 80%;
            height: 100%;
            background-color: #C0C0C0;
            border-radius: 7px;
            padding: 10px;
        }

        .right {
            text-align: center;
            width: 20%;
            height: 100%;
            background-color: #C0C0C0;
            border-radius: 7px;
            padding: 10px;
        }
        .back {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            background-color: #C0C0C0;
            border-radius: 7px;
        }
    </style>

    <?php
        $width = 55;
        $height = 24;
        $rectangle = $width * $height;
    ?>

    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h1>หาพื้นที่สี่เหลี่ยม</h1>
            </div>
            <div class="content">
                <div class="list">
                    <div class="left">ความกว้าง</div>
                    <div class="right"><?php echo $width ?></div>
                </div>
                <div class="list">
                    <div class="left">ความยาว</div>
                    <div class="right"><?php echo $height ?></div>
                </div>
                <div class="list">
                    <div class="left">พื้นที่สี่เหลี่ยม : <?php echo $width . " * " . $height ?></div>
                    <div class="right"><?php echo $rectangle ?></div>
                </div>
                <div class="list">
                    <div class="back"><a href="index.php">กลับ</a></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>