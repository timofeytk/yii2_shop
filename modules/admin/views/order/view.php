<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<?php $items = $model->orderProduct?>
<div class="order-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'total',
            'status',
            'name',
            'email:email',
            'phone',
            'address',
            'note:ntext',
        ],
    ]) ?>
    <h2>Товары</h2>
    <table class="table table-striped table-bordered detail-view">
        <thead></thead>
        <tbody>
        <?php foreach ($items as $item):?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->title?></td>
            <td><?=$item->qty?></td>
            <td><?=$item->price?></td>
            <td><?=$item->total?></td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
