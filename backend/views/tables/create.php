<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Table */

$this->title = Yii::t('app', 'Create Table');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="bg-light border p-5">

                <h1><?= Html::encode($this->title) ?></h1>

                <?= $this->render('_form', [
                    'model' => $model,
                ]) ?>

            </div>
        </div>
    </div>
</div>
