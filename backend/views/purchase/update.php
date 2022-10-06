<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Purchase */

$this->title = 'Update Purchase';
$this->params['breadcrumbs'][] = ['label' => 'Purchases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <!-- <div class="col-md-4"></div> -->
    <div class="col-md-4 purchase-update mx-auto p-5 bg-white rounded">
        <h4><?= Html::encode($this->title) ?></h4>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
    <!-- <div class="col-md-4"></div> -->
</div>
