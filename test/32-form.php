<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="container">
    <!--  <pre> 保留標籤內文字的原始編排，就是對空白字元包括換行符號都不做任何處理。
<pre> 除了全域屬性外，沒有定義其他屬性 (attribute) 。
此外， <pre> 的文件物件模型 (DOM) 介面為 HTMLElement 。 -->
    <div class="row">
        <pre>
            <?php print_r($_POST)  ?>
        </pre>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form name="form1" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="<?= empty($_POST['email']) ? '' : htmlentities($_POST['email']) ?>" name="email">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" value="<?= empty($_POST['password']) ? '' : htmlentities($_POST['password']) ?>" name="password">

                    <!-- htmlentities 是用來跳脫字元 -->
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php'; ?>