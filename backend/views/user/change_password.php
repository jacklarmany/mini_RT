<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
?>
<div class="modal-body p-5">
    <div class="site-signup">

        <div class="row">
            <div class="col-12">
                <?php $form = ActiveForm::begin(['id' => 'form-change']); ?>
                <?= $form->field($model, 'password_hash')->passwordInput() ?>
                <?= $form->field($model, 'newPassword')->passwordInput() ?>
                <?= $form->field($model, 'retypePassword')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-primary', 'name' => 'change-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>

</div>