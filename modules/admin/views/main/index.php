<?php
$this->title = 'Статистика магазина';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?=$orders?></h3>

                <p>Заказов</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="<?=\yii\helpers\Url::to(['order/index'])?>" class="small-box-footer">
                Просмотреть <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?=$products?></h3>

                <p>Товаров</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=\yii\helpers\Url::to(['product/index'])?>" class="small-box-footer">
                Просмотреть <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?=$categories?></h3>

                <p>Категорий</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?=\yii\helpers\Url::to(['categories/index'])?>" class="small-box-footer">
                Просмотреть <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

</div>