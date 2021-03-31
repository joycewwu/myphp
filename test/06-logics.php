<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo 5 || 7; // bool，也就是1
    echo '<br>';

    $a = 5 or $b = 6; // or的優先權比 = 低
    $c = 5 || $d = 6; // ||的優先權比 = 高

    echo "\$a=$a, \$b=$b <br>";  // 故取出$a=5後就結束執行
    echo "\$c=$c, \$d=$d <br>";

    ?>
</body>

</html>