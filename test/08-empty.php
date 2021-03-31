<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empty</title>
</head>

<body>
    <?php

    // empty判断一个变量是否被认为是空的。当一个变量并不存在，或者它的值等同于false，那么它会被认为不存在。
    // 如果變量不存在的话，empty()并不會產生warning。

    $a = empty($_GET['a']) ? 0 : intval($_GET['a']);
    $b = empty($_GET['b']) ? 0 : intval($_GET['b']);

    echo $a + $b . '<br>';  // . 做字串串接

    $c = [1];

    echo empty($c) ? '空的' : '不是';

    // php轉換
    // 轉換成整數 intval()
    // 轉換成浮點數 floatval()
    // 轉換成字串 stringval()


    ?>

</body>

</html>