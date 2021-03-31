<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-color</title>
</head>

<style>
    td {
        width: 30px;
        height: 30px;
    }
</style>

<body>

    <table>
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 16; $k++) :
                    $c = sprintf('#%X%X00%X%X', $k, $k, $i, $i);
                ?>
                    <td style="background-color: <?= $c ?>;">&nbsp;</td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
</body>

</html>