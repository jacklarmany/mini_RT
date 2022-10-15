<?php

use backend\models\Menu;
use backend\models\Tables;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SaleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Prfile');
$this->params['breadcrumbs'][] = $this->title;
$user = \backend\models\User::find()->where(['id' => \Yii::$app->user->id])->one();
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
                <button class="btn btn-sm btn-outline-default" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-lock"></i> <?= Yii::t('app', 'Change password') ?></button>
            </div>
        </div>
    </div>
</div>

<!-- /// MODAL CHANGE PASSWORD /// -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="width:30% ;">
        <div class="modal-content">
            <div class="modal-body p-5">
                <div class="form-group field-purchase-price">
                    <label for="purchase-price">Old password</label>
                    <input type="text" id="username" class="form-control mb-2" name="username" maxlength="255" placeholder="">
                </div>
                <div class="form-group field-purchase-price">
                    <label for="purchase-price">New password</label>
                    <input type="text" id="email" class="form-control mb-2" name="email" maxlength="255" placeholder="<?= Yii::t('app', 'Type new password') ?>">
                    <input type="text" id="email" class="form-control mb-2" name="email" maxlength="255" placeholder="<?= Yii::t('app', 'Type new password again') ?>">
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?= Yii::t('app', 'Close') ?></button>
                    <button type="button" class="btn btn-primary"><?= Yii::t('app', 'Save changes') ?></button>
                </div>
            </div>
        </div>
    </div>
</div>