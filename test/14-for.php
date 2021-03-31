<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>

<body>

    <table border="1">
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 10; $k++) : ?>
                    <td><?= ($i + 1) * ($k + 1) ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>


    <pre>
<?php
//sprintf() 格式化format 作用
// printf() 格式化fotmat 字串後還會輸出到畫面
printf('%s * %s = %s', 2, 4, 8);
echo "\n";
printf('%X', 15233);

?>
</pre>

</body>

</html>