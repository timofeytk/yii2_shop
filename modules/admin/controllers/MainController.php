<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Categories;
use app\modules\admin\models\Order;
use app\modules\admin\models\Product;

class MainController extends AppAdminController
{

    public function actionIndex(){
        $orders = Order::find()->count();
        $products = Product::find()->count();
        $categories = Categories::find()->count();
        return $this->render('index', compact('orders', 'products', 'categories'));
    }

}