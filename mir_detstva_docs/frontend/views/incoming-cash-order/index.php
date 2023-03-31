<?php

use common\models\IncomingCashOrder;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IncomingCashOrderSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Приходные кассовые ордера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoming-cash-order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать приходный кассовый ордер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'from_date',
            'number',
            'customer',
            'price',
            'debit',
            'corresponding_account',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, IncomingCashOrder $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать документ', ['/incoming-cash-order/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
        ],
    ]); ?>


</div>
