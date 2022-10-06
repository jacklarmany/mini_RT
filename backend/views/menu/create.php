<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Menu */

$this->title = Yii::t('app', 'Create Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-create">
    <div class="col-md-4 mx-auto">
        <div class="bg-white p-5 rounded shadow-sm">

            <h1><?= Html::encode($this->title) ?></h1>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>
<?php
$js = <<<JS
        
    $(".field-menu-qty").hide();
    $("#menu-categories_id").change(function(){
        var menu_categories_id = $(this).val();
        if(menu_categories_id == 1){
            $(".field-menu-qty").show();
        }
        else{
            $(".field-menu-qty").hide();
        }
     });
     
    JS;
$this->registerJs($js);
?>