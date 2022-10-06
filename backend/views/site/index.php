<style>
    .btn5 {
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        font-weight: 400;
        line-height: 45px;
        position: relative;
        text-decoration: none;
        text-transform: uppercase;
        width: 100%;
        background-color: #fff;

        @media(min-width: 600px) {
            margin: 0 1em 2em;
        }

    }

    .btn-5 {
        /* outline: 2px solid; */
        outline-color: rgba(255, 255, 255, .5);
        transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .btn-5:hover {
        box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
        outline-color: rgba(255, 255, 255, 0);
        outline-offset: 0px;
        text-shadow: 1px 3px 5px blue;
        background-color: #E6E6E6;
    }
</style>
<div class="container mt-5 border-0 shadow-sm border" style="width:65%;">
    <div class="row border-0">
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5 shadow-sm">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute('/categories/index') ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa fa-3x fa-bottle-water"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Categories') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute('/menu/index') ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa-3x fa fa-jug-detergent"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Menu') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute('/menu/sale-product') ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa fa-shopping-cart text-danger fa-3x"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Sale water') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute('/sale/index') ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa fa-people-roof fa-3x"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Bills') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute('/purchase/index') ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa-solid fa fa-users-line fa-3x"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Purchase') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- 777 -->
        <div class="col-md-4 pt-5 pb-5 btn-5 btn5">
            <div class="rounded">
                <a href="<?= \yii\helpers\Url::toRoute(['/sale/index','benifit' => 'true']) ?>" style="text-decoration: none;">
                    <div class="card p-3 text-center">
                        <i class="fa fa-money fa-3x"></i>
                        <div class="content mt-2">
                            <h5><?= Yii::t('app', 'Benitfit') ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php
$script = <<< JS
    // $("#theme2").hide();
    $("#btntheme1").click(function(){
        var theme = 1;
        $.post("index.php?r=site/change-theme-index&theme="+theme,function(data){
            $("#btheme1").show();
            $("#btheme2").hide();
            location.reload();
        })
    })
    $("#btntheme2").click(function(){
        var theme = 2;
        $.post("index.php?r=site/change-theme-index&theme="+theme,function(data){
            $("#btheme2").show(); 
            $("#btheme1").hide();
            location.reload();
        })
    })
    JS;
$this->registerJs($script);
?>