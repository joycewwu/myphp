<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '購物車';
$pageName = 'cart';

if (empty($_SESSION['cart'])) {
    header('Location: product-list.php'); // 最好給個提示訊息
    exit;
}





?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col"><i class="fas fa-trash-alt"></i></th>
                        <th scope="col">封面</th>
                        <th scope="col">書名</th>
                        <th scope="col">單價</th>
                        <th scope="col">數量</th>
                        <th scope="col">小計</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['cart'] as $v) : ?>
                        <tr data-sid="<?= $v['sid'] ?>">
                            <td>
                                <a href="javascript:" onclick="deleteItem(event)">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                            <td>
                                <img src="<?= WEB_ROOT ?>/proj/imgs/small/<?= $v['book_id'] ?>.jpg" class="card-img-top" alt="">
                            </td>
                            <td><?= $v['bookname'] ?></td>
                            <td><?= $v['price'] ?></td>
                            <td><?= $v['quantity'] ?></td>
                            <td><?= $v['price'] * $v['quantity'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    function deleteItem(event) {
        let me = $(event.currentTarget);
        let sid = me.closest('tr').attr('data-sid');

        $.get('cart-api.php', {
            action: 'delete',
            pid: sid
        }, function(data) {
            location.reload(); // 刷頁面
        }, 'json');

    }
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>