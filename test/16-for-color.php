<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        td {
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>

    <table>

        <tr>
            <?php for ($k = 0; $k < 16; $k++) : ?>
                <td style="background-color: #<?= sprintf('%X%X', $k, $k) ?>0000;">&nbsp;</td>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php for ($j = 0; $j < 16; $j++) : ?>
                <td style="background-color: #<?= sprintf('%X%X', $j, $j) ?>0000;">&nbsp;</td>
            <?php endfor; ?>
        </tr>

    </table>

</body>

</html>