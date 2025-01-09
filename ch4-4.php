<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        .grade-box {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
        }
        .score {
            font-size: 24px;
            margin: 10px 0;
        }
        .grade {
            font-size: 36px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="grade-box">
        <?php
        $score = 75;
        
        echo "<div class='score'>คะแนนของคุณ: $score</div>";
        
        if ($score >= 80) {
            echo "<div class='grade' style='color: #4CAF50;'>เกรด A</div>";
        } elseif ($score >= 70) {
            echo "<div class='grade' style='color: #2196F3;'>เกรด B</div>";
        } elseif ($score >= 60) {
            echo "<div class='grade' style='color: #FFC107;'>เกรด C</div>";
        } elseif ($score >= 50) {
            echo "<div class='grade' style='color: #FF9800;'>เกรด D</div>";
        } else {
            echo "<div class='grade' style='color: #F44336;'>เกรด F</div>";
        }
        ?>
    </div>
</body>
</html>