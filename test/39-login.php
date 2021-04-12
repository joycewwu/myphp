<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '登入';

if (isset($_POST['account']) and isset($_POST['password'])) {
    if ($_POST['account'] == 'joyce' and $_POST['password'] == '12345') {
        $_SESSION['account'] = 'joyce';
    } else {
        $msg = '帳號或密碼錯誤';
    }
}

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">

    <div class="row mt-3">
        <?php if (isset($msg)) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $msg ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['account'])) : ?>
            <div class="alert alert-success" role="alert">
                您好 <?= $_SESSION['account'] . ' ，歡迎登入!' ?>
            </div>
            <div class="ml-2 mt-3"><a href="41-logout.php">登出</a></div>

        <?php else : ?>
            <div class="col-md-6">
                <form name="form1" method="post">
                    <div class="form-group">
                        <label for="account">account address</label>
                        <input type="text" class="form-control" id="account" name="account">

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        <?php endif; ?>

    </div>


</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>