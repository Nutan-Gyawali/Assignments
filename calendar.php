<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar-Grid</title>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="grid">
        <?php
        for( $i=1; $i <=28; $i++){
            echo "<div class='box'> $i </div>";
        }
        ?>
</div>
</body>
</html>