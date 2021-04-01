<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- echo: <? ?>  -->
    <!-- echo <?= $title ?? '我的首頁' ?>  -->
    <!-- echo <?= $title ?>  -->
    <!-- 此處可在php檔做更改 -->
    <title><?= $title ?? '我的首頁' ?></title>
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/test/bootstrap/css/bootstrap.css">
</head>