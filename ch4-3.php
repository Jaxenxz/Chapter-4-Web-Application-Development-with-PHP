<!DOCTYPE html>
<html>
<head>
    <title>Basic Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .calculator {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            margin: 0 auto;
        }
        .result {
            background-color: #fff;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <?php
        $num1 = 10;
        $num2 = 5;

        echo "<div class='result'>Number 1 = $num1</div>";
        echo "<div class='result'>Number 2 = $num2</div>";
        echo "<div class='result'>ผลบวก = " . ($num1 + $num2) . "</div>";
        echo "<div class='result'>ผลลบ = " . ($num1 - $num2) . "</div>";
        echo "<div class='result'>ผลคูณ = " . ($num1 * $num2) . "</div>";
        echo "<div class='result'>ผลหาร = " . ($num1 / $num2) . "</div>";
        ?>
    </div>
</body>
</html>