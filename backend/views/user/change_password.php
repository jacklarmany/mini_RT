<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = Yii::t('app', 'Change Password');
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-signup">
<?php
if (Yii::$app->session->hasFlash('done')) {
    ?>
    <div class="mw-100 mh-100">
        <div class="mh-100">
            <div class="alert alert-primary text-center font-weight-bolder" role="alert">
                <?=Yii::t('app','You have changed your password.!')?>

            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <p><?= Yii::t('app', 'Please fill out the following fields to change password:') ?></p>
    <div class="row">
        <div class="col-12">
            <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
            <?= $form->field($model, 'oldPassword')->passwordInput() ?>
            <?= $form->field($model, 'newPassword')->passwordInput() ?>
            <?= $form->field($model, 'retypePassword')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>
    <?php
}
?>