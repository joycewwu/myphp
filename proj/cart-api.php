<?php include __DIR__ . '/parts/config.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


// 1.列表, 2.加入, 3.變更數量, 4.移除項目
// 1.list, 2.add, 3.update, 4.delete

$action = isset($_GET['action']) ? $_GET['action'] : 'list'; // 操作的動作
$pid = isset($_GET['pid']) ? intval($_GET['pid']) : 0; // 商品 id
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;  // 數量

switch ($action) {
    case 'update':
    case 'add':
        if (!empty($pid)) {
            if (!empty($qty)) {
                $sql = "SELECT * FROM products WHERE sid=$pid ";
                $row = $pdo->query($sql)->fetch();

                if (!empty($row)) {
                    $row['quantity'] = $qty;  // 把數量加入
                    $_SESSION['cart'][$row['sid']] = $row; // 放到購物車裡
                }
            } else {
                unset($_SESSION['cart'][$pid]); // 移除該項商品
            }
        }
        break;
    case 'delete':
        if (!empty($pid)) {
            unset($_SESSION['cart'][$pid]); //移除該項目
        }
        break;
    default:
    case 'list':
}

echo json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
