
<div class="bread-container">
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?=\yii\helpers\Url::home()?>">Home</a><span>|</span></li>
                <li><?=$category->title?></li>
            </ul>
        </div>
    </div>
</div>
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
        <div class="w3l_banner_nav_right_banner3">
            <h3>Best Deals For New Products<span class="blink_me"></span></h3>
        </div>
        <div class="w3l_banner_nav_right_banner3_btm">
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="images/13.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>Grocery Store</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                    </div>
                </div>
                <h4>Utensils</h4>
                <ol>
                    <li>sunt in culpa qui officia</li>
                    <li>commodo consequat</li>
                    <li>sed do eiusmod tempor incididunt</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="images/14.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>Grocery Store</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                    </div>
                </div>
                <h4>Hair Care</h4>
                <ol>
                    <li>enim ipsam voluptatem officia</li>
                    <li>tempora incidunt ut labore et</li>
                    <li>vel eum iure reprehenderit</li>
                </ol>
            </div>
            <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <img src="images/15.jpg" alt=" " class="img-responsive" />
                    <div class="mask">
                        <h4>Grocery Store</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
                    </div>
                </div>
                <h4>Cookies</h4>
                <ol>
                    <li>dolorem eum fugiat voluptas</li>
                    <li>ut aliquid ex ea commodi</li>
                    <li>magnam aliquam quaerat</li>
                </ol>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3ls_w3l_banner_nav_right_grid">
            <h3><?=$category->title?></h3>
            <?if(!empty($products)):?>
            <div class="w3ls_w3l_banner_nav_right_grid1">
                <?foreach($products as $product):?>
                <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <?if($product->is_offer):?>
                                    <?= \yii\helpers\Html::img("@web/images/offer.png", ["alt" => "offer", "class" => "img-responsive"])?>
                                <?endif;?>
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id])?>">
                                                <?php if($product->img):?>
                                                <?= \yii\helpers\Html::img("@web/images/{$product->img}", ["alt" => "{$product->title}", "class" => "img-responsive"])?>
                                                <?php else:?>
                                                <?= \yii\helpers\Html::img("@web/images/no-image.png", ["alt" => "{$product->title}", "class" => "img-responsive"])?>
                                                <?php endif;?>
                                            </a>
                                            <p><?= $product->title?></p>
                                            <h4>$<?= $product->price?>
                                                <?if((float)$product->old_price):?>
                                                    <span>$<?= $product->old_price?></span>
                                                <?endif;?>
                                            </h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?=$product->id?>" class="btn btn-primary button add-to-cart">Добавить в корзину</a>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
                <div class="clearfix"> </div>
                <div class="col-md-12">
                    <?=\yii\widgets\LinkPager::widget([
                            'pagination' => $pages,
                    ])?>
                </div>
            </div>
            <?else:?>
            <h6>Товаров пока нет...</h6>
            <?endif;?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

