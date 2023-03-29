<?php

use common\models\ActOfRendering;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ActOfRenderingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Акты об оказании услуг';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-of-rendering-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать акт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'number',
            'fromDateText',
            'customer',
            'priceText',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, ActOfRendering $model) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать акт', ['/act-of-rendering/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать счет', ['/invoice-for-payment/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ]
        ],
    ]); ?>


</div>
