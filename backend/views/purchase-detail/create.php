<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PurchaseDetail */

$this->title = Yii::t('app', 'Create Purchase Detail');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Purchase Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="purchase-detail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
