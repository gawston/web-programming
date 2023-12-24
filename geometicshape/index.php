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
        .wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .header {
            width: 500px;
            text-align: center;
            background-color: skyblue;
            border-radius: 10px 10px 0 0;
        }

        .container {
            width: 500px;
            /* border: 1px solid red; */
            background-color: #DEDEDE;
            padding: 10px;
            border-radius: 0 0 10px 10px;
        }

        .list {
            display: flex;
            align-items: center;
            width: 100%;
            height: 50px;
            background-color: #C0C0C0;
            margin: 5px 0;
            padding: 10px;
            border-radius: 8px;
            font-size: 18px;
        }

        @keyframes rgb {
            from {
                filter: hue-rotate(0);
            }
            to {
                filter: hue-rotate(360deg);
            }
        }
    </style>
    <div class="wrapper">
        <div class="header">
            <h1>เมนู</h1>
        </div>
        <div class="container">
            <div class="list"><a href="rectangle.php">พื้นที่สี่เหลี่ยม</a></div>
            <div class="list"><a href="circle.php">พื้นที่วงกลม</a></div>
            <div class="list"><a href="triangle.php">พื้นที่สามเหลี่ยม</a></div>
            <div class="list"><a href="trapezoid.php">พื้นที่สี่เหลี่ยมคางหมู</a></div>
        </div>
    </div>
</body>
</html>