<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Prfile');
$this->params['breadcrumbs'][] = $this->title;
$user = \backend\models\User::find()->where(['id' => \Yii::$app->user->id])->one();
?>
<?php
if (Yii::$app->session->hasFlash('done')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Yii::t('app', 'You have changed your password.!') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php
}
?>
<div class="col-md-12 mx-auto">
    <div class="col-md-5 mx-auto">
        <div class="border p-5 rounded shadow-sm bg-light" style="border:1px inset #999">
            <div class="text-center">
                <img src="<?= Yii::$app->request->baseUrl ?>/icons/user-96.png">
            </div>
            <div class="form-group field-purchase-price">
                <label for="purchase-price">Username</label>
                <input type="text" id="username" class="form-control mb-2" name="username" maxlength="255" placeholder="<?= $user->username ?>">
            </div>
            <div class="form-group field-purchase-price">
                <label for="purchase-price">Email</label>
                <input type="text" id="email" class="form-control mb-2" name="email" maxlength="255" placeholder="<?= $user->email ?>">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-sm btn-outline-default"><i class="fa fa-envelope"></i> <?= Yii::t('app', 'Change email') ?></button>
                <button class="btn btn-sm btn-outline-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-lock"></i><a href="index.php?r=user/change-password"><?= Yii::t('app', 'Change password') ?></a></button>
            </div>
        </div>
    </div>
</div>


<?php

$script = <<< JS
    $("#savechange").click(function(){
        var oldpassword = $("#oldpassword").val();
        var newpassword = $("#newpassword").val();
        var connewpassword = $("#connewpassword").val();
        $.post("index.php?r=user/change-password&oldp="+oldpassword+"&newp="+newpassword+"&connewp="+connewpassword,function(op){
            alert(op);
        })
    })
JS;

$this->registerJs($script);

?>