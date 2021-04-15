<div>
    <?php
    $pass = '123456';
    $md5 = md5($pass);
    $sha1 = sha1($pass);
    echo "md5: $md5 <br>";
    echo "md5: $md5 <br>";
    echo "sha1: $sha1 <br>";
    echo "sha1: $sha1 <br>";
    // 不建議使用md5 和 sha1 ，因當使用者使用相同密碼時 md5 和 sha1 會產出一樣的密碼編號

    echo "password_hash: " . password_hash($pass, PASSWORD_DEFAULT) . "<br>";
    echo "password_hash: " . password_hash($pass, PASSWORD_DEFAULT) . "<br>";

    // 相同情況下，建議使用password_hash則會產出不同的編號

    ?>
</div>