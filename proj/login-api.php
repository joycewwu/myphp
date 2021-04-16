<?php include __DIR__ . '/parts/config.php';


$output = [
    'success' => false,
    'code' => 0,
    'error' => '帳號或密碼錯誤'
];

if (isset($_POST['email'])) {

    // TODO: 欄位資料檢查

    $a_sql = "SELECT * FROM `members` WHERE `email`=?";
    $a_stmt = $pdo->prepare($a_sql);
    $a_stmt->execute([$_POST['email']]);
    $row = $a_stmt->fetch();

    if (empty($row)) {
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;  // 程式結束
    }

    // $POST['password'] 為使用者設定的password
    // $row['password'] 為電腦給得編碼

    if (password_verify($_POST['password'], $row['password'])) {
        unset($row['password']);
        unset($row['hash']);
        $_SESSION['user'] = $row; //使用者得到的password跟$row相符則登入為success
        $output['success'] = true;
        $output['error'] = '';
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
