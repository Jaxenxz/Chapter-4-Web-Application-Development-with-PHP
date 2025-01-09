<!DOCTYPE html>
<html>
<head>
    <title>Speed Check</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .title {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .p1 {
            font-size: 18px;
        }
        .box3 {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 20px auto;
        }
        .warning {
            color: #F44336;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <p class="title">ระดับความเร็วในการขับรถ</p>
    <?php
    $speed = 105;
    echo "<p class='p1'>Your speed is $speed</p>";
    echo "<hr>";
    
    if ($speed >= 100) {
        echo "<div class='box3'>";
        echo "SPEED: $speed >>";
        echo "<i class='fa-solid fa-truck-fast' style='font-size:48px;color:LightSeaGreen;'></i>";
        echo "<br><hr>";
        echo "<div class='warning'>It is dangerous!!!</div>";
        echo "</div>";
    } elseif ($speed >= 80) {
        echo "<div class='box3'>";
        echo "SPEED: $speed >>";
        echo "<i class='fa-solid fa-truck' style='font-size:48px;color:Orange;'></i>";
        echo "<br><hr>";
        echo "Watch your speed!";
        echo "</div>";
    } else {
        echo "<div class='box3'>";
        echo "SPEED: $speed >>";
        echo "<i class='fa-solid fa-truck' style='font-size:48px;color:Green;'></i>";
        echo "<br><hr>";
        echo "Safe driving!";
        echo "</div>";
    }
    ?>
</body>
</html>