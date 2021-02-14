<!-- products-breadcrumb -->
<div class="bread-container">
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=\yii\helpers\Url::home()?>">Home</a><span>|</span></li>
                <li>Оформление заказа</li>
            </ul>
        </div>
    </div>
</div>
<!-- //products-breadcrumb -->
<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?=$this->render('//layouts/inc/sidebar.php')?>
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <!-- about -->
        <div class="privacy about">
            <?= \app\widgets\Alert::widget();?>
            <h3>Оформление заказа</h3>
            <?php if(!empty($session['cart'])):?>
            <div class="checkout-right">
                <h4>Сейчас в корзине: <span><?=count($session['cart'])?> продуктов</span></h4>
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Картинка</th>
                        <th>Количество</th>
                        <th>Продукт</th>

                        <th>Цена</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php $i = 1; foreach ($session['cart'] as $id => $item):?>
                    <tr>
                        <td class="invert"><?=$i;?></td>
                        <td class="invert-image">
                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $id])?>">
                                <?= \yii\helpers\Html::img("@web/images/{$item['img']}", ["alt" => $item['title'], "class" => "img-responsive"])?>
                            </a></td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus" data-id="<?=$id?>" data-qty="-1">&nbsp;</div>
                                    <div class="entry value"><span><?= $item['qty']?></span></div>
                                    <div class="entry value-plus active " data-id="<?=$id?>" data-qty="1">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert"><?=$item['title']?></td>

                        <td class="invert">$<?=$item['price']?></td>
                        <td class="invert">
                            <div class="rem">
                                <a href="<?= \yii\helpers\Url::to(['cart/del-item', 'id' => $id])?>" class="close1"> </a>
                            </div>

                        </td>
                    </tr>
                    <?php $i++; endforeach;?>

                    </tbody></table>
            </div>
            <div class="checkout-left">
                <div class="col-md-4 checkout-left-basket">
                    <h4>Continue to basket</h4>
                    <ul>
                        <?php foreach ($session['cart'] as $item):?>
                        <li><?=$item['title']?> <i>:</i> <span>$<?=$item['price'] * $item['qty']?> </span></li>
                        <?php endforeach;?>
                        <li>Итого <i>:</i> <span>$<?=$session['cart.sum']?></span></li>
                    </ul>
                </div>
                <div class="col-md-8 address_form_agile">
                    <h4>Данные покупателя</h4>
                    <?php
                    $form = \yii\widgets\ActiveForm::begin();
                    echo  $form->field($order, 'name');
                    echo  $form->field($order, 'email');
                    echo  $form->field($order, 'phone');
                    echo  $form->field($order, 'address');
                    echo  $form->field($order, 'note')->textarea(['rows' => 5]);
                    echo \yii\helpers\Html::submitButton('Заказать', ['class' => 'submit check_out']);
                    ?>

                    <?php \yii\widgets\ActiveForm::end();?>
                </div>

                <div class="clearfix"> </div>

            </div>
            <?php else:?>
            <h3>Корзина пуста</h3>
            <?php endif;?>
        </div>
        <!-- //about -->
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->