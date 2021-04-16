<div>
    <?php
    // 註冊的時候
    $pass = '123456';

    // password: 用戶的密碼。 hash: 一個由 password_hash() 創建的散列值。
    $p1 = password_hash($pass, PASSWORD_DEFAULT);
    $p2 = password_hash($pass, PASSWORD_DEFAULT);

    echo "$p1 <br>";
    echo "$p2 <br>";
    // 登入的時候
    echo password_verify('123457', $p1) ? 'yes<br>' : 'no<br>';
    echo password_verify($pass, $p2) ? 'yes<br>' : 'no<br>';



    ?>
</div>