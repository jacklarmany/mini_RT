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

$this->title = Yii::t('app', 'Sales');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-index mx-auto shadow col-md-10 p-5 bg-white rounded border">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php //echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'shadow-sm bg-white table-bordered table-hover', 'style' => 'width:100%'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bill_no',
            [
                'attribute' => Yii::t('app', 'Date/Time'),
                'contentOptions' => ['style' => 'width:20%'],
                'attribute' => 'date',
                'value' => function ($data) {
                    return $data->date . " " . $data->time;
                }
            ],
            [
                'attribute' => Yii::t('app', 'Table'),
                'attribute' => 'table_id',
                'filter' => \yii\helpers\ArrayHelper::map(Tables::find()->asArray()->all(), 'id', 'name'),
                'value' => function ($data) {
                    return $data->table->name;
                }
            ],
            [
                'attribute' => Yii::t('app', 'Menu'),
                'attribute' => 'menu_id',
                'filter' => \yii\helpers\ArrayHelper::map(Menu::find()->asArray()->all(), 'id', 'name'),
                'value' => function ($data) {
                    return $data->menu->name;
                }
            ],
            [
                'attribute' => Yii::t('app', 'Qty'),
                'attribute' => 'qty',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' =>  ['style' => 'text-align:center'],
                'value' => function ($data) {
                    return $data->qty;
                }
            ],
            [
                'attribute' => Yii::t('app', 'Price'),
                'attribute' => 'price',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' =>  ['style' => 'text-align:right'],
                'value' => function ($data) {
                    return number_format($data->price, 2);
                }
            ],
            [
                'attribute' => Yii::t('app', 'Amount'),
                'attribute' => 'amount',
                'headerOptions' => ['style' => 'text-align:center'],
                'contentOptions' =>  ['style' => 'text-align:right'],
                'value' => function ($data) {
                    return number_format($data->amount, 2);
                }
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, \backend\models\Sale $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //     }
            // ],
        ],
    ]); ?>


</div>