<?php

use common\models\PackingList;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PackingListSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Товарные накладные';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packing-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товарную накладную', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'consignee:ntext',
            'payer:ntext',
            'number',
            'date_of_preparation',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PackingList $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать документ', ['/packing-list/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
        ],
    ]); ?>


</div>
