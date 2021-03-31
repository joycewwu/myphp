<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 class=""> <?= isset($_GET['age']) ? "年齡: {$_GET['age']}" : "無提供年齡" ?> </h2>
    <?php if (isset($_GET['age']) && intval($_GET['age']) >= 18) : ?>

        <img src="./imgs/avatar1.jpg" alt="" width="200px">

    <?php else : ?>
        <img src="./imgs/avatar2.jpg" alt="" width="200px">

    <?php endif; ?>
</body>

</html>