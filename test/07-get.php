<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get</title>
</head>

<body>
    <?php
    // echo $_GET['a'] + $_GET['b'];
    // 測試網⾴之後，在網址列輸⼊下式 ? 之後的內容。
    // http:localhost/my_test/untitled1.php?a=12&b=24
    // 36 

    $a = isset($_GET['a']) ? $_GET['a'] : 25;
    $b = isset($_GET['b']) ? $_GET['b'] : 25;
    echo $a + $b;  // 50

    ?>



</body>

</html>