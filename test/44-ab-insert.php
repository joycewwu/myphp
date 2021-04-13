<?php include __DIR__ . '/parts/config.php'; ?>
<?php
$title = '新增資料';
$pageName = 'ab-insert'

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<style>
    /* form .form-group small.error {} */
    small.error {
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title">新增資料</h5>
                    <!-- 在  <form name> 裡下 novalidate，後面下的required或特定格式一律不管 -->
                    <!-- onclick="return false;" & onclick="event.preventDefault()" 先click但取消傳送-->
                    <form name="form1" method="post" novalidate onsubmit="checkForm(); return false;">
                        <div class="form-group">
                            <label for="name">姓名*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <small class="form-text error"></small>
                            <!-- <input required> =必填欄位 -->

                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <!--  <input type="email"> =須為email格式 -->
                            <input type="email" class="form-control" id="email" name="email">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <label for="mobile">手機 </label>
                            <input type="text" class="form-control" id="mobile" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}">
                            <!--  <input pattern="\d{10}">使用RE-->
                            <small class="form-text error"></small>

                        </div>
                        <div class="form-group">
                            <label for="birthday">生日</label>
                            <input type="date" class="form-control" id="birthday" name="birthday">

                        </div>
                        <div class="form-group">
                            <label for="address">地址</label>
                            <!-- <input type="text" class="form-control" id="address" name="address"> -->
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">新增</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>


</div>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    // re判斷
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $name = $('#name'),
        $email = $('#email'),
        $mobile = $('#mobile');
    const fields = [$name, $email, $mobile];
    // const smalls = [$name.next(), $email.next(), $mobile.next()];


    function checkForm() {
        // 檢查後回復原來狀態(無紅框或text error)
        fields.forEach(el => {
            el.css('border', '1px solid #CCCCCC');
            // 檢查後框框變
            el.next().text('');
            //檢查後回傳空字串，取消 
        });

        // 反向思考，先假設is true，若遇到false在判斷
        let isPass = true;


        if ($name.val().length < 2) {
            isPass = false;
            $name.css('border', '1px solid red');
            $name.next().text('請輸入正確的姓名');
        }
        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }
        if (!mobile_re.test($mobile.val())) {
            isPass = false;
            $mobile.css('border', '1px solid red');
            $mobile.next().text('請輸入正確的手機號碼');
        }

        if (isPass) {
            $.post(
                '46-ab-insert-api.php',
                $(document.form1).serialize(),
                function(data) {
                    if (data.sucess) {
                        alert('資料新增成功');
                    }
                },
                'json'
            )
        }


    }
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>