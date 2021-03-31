<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="score" min="0" max="100" value="<?= $_GET['score'] ?? '' ?>">
        <input type="submit">
    </form>


    <?php if (isset($_GET['score'])) {
        $s = intval($_GET['score']);
    }

    echo $s;
    ?>

</body>

</html>