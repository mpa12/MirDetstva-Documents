<?php

use common\models\AccountCashWarrant;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\AccountCashWarrantSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Расходные кассовые ордера';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-cash-warrant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать расходный кассовыйй ордер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'date_of_preparation',
            'price',
            'customer',
            //'passport_series',
            //'passport_number',
            //'passport_date',
            //'passport_issued',
            //'passport_code',
            //'credit',
            //'corresponding_account',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AccountCashWarrant $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать документ', ['/account-cash-warrant/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
        ],
    ]); ?>


</div>
