<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>

<body>

    <?php
    // $a = "xyz\nabc\"def\'ghi\\";
    // $b = 'xyz\nabc\"def\'ghi\\';
    // echo $a;
    // echo $b;

    // PHP 的字串還有個好處，就是可以換⾏標⽰，所以⽅便定義較⻑且包含換⾏的字串。 若⽂字內容也包含雙引號時，可以使⽤「即為⽂件」(Heredoc)表⽰法。
    // Heredoc 表 ⽰法是以 <<< 為開頭，緊接「標⽰名」(可⾃訂，通常為⼤寫字⺟)，加換⾏。 Heredoc 結束時，在新的⼀⾏使⽤「標⽰名」即可。

    $a = "PHP -MySQL
是好朋友!";
    $b = <<<HDOC
<h1>PHP - </h1>
<div style="color:#F00;">MySQL</div>
HDOC;
    echo $a;
    echo $b;

    ?>

</body>

</html>