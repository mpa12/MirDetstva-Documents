<?php

use common\models\Invoice;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\InvoiceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Счета-фактуры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать счет-фактуру', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'number',
            'from_date',
            'consignee_and_address',
            'buyer',
//            'address',
            'inn',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Invoice $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать документ', ['/invoice/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
        ],
    ]); ?>


</div>
