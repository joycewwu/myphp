<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quote</title>
</head>

<body>
    <?php
    $name = "Joyce";
    // 雙引號 "" 裡面包含變數，會顯示變數值;若是單引號 ''則顯示文字
    echo "Hello, $name <br>"; // Hello, Joyce 
    echo '<br/>';
    echo 'Hello, $name <br>'; // Hello, $name
    echo '<br/>';

    echo "Hello, {$name} Wu <br>";
    echo "Hello, ${name} Wu <br>";

    ?>



</body>

</html>