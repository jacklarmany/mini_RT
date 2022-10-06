<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Menu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="col-md-8 mx-auto">
    <div class="p-5 bg-white rounded shadow-sm">
        <div class="row">
            <div class="col-md-5">
                <img src="<?= Yii::$app->request->baseUrl ?>/images/<?= $model->photo ?>" alt="" class="img-fluid">
            </div>
            <div class="col-md-7">
                <p class="text-right">
                    <?= Html::a('<span class="fa fa-file-pdf-o"></span> ' . Yii::t('app', 'Export to PDF'), ['view', 'id' => $model->id, 'export' => true], ['target' => '_blank', 'class' => 'rounded btn btn-success']); ?>
                    <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
                <?= DetailView::widget([
                    'model' => $model,
                    'options' => ['class' => 'table table-bordered table-hover detail-view'],
                    'attributes' => [
                        'id',
                        'name',
                        'qty',
                        'prices',
                        'categories_id',
                        'user_id',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</div>