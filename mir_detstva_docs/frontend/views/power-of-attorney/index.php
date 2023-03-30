<?php

use common\models\PowerOfAttorney;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\PowerOfAttorneySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Доверенности';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="power-of-attorney-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать доверенность', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'from_date',
            'to_date',
            'customer',
            'number',
            //'passport_series',
            //'passport_number',
            //'passport_date',
            //'passport_issued',
            'provider',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PowerOfAttorney $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            [
                'label' => '',
                'value' => fn ($model) => \yii\bootstrap5\Html::a(
                    'Скачать документ', ['/power-of-attorney/download', 'id' => $model->id]
                ),
                'format' => 'html'
            ],
        ],
    ]); ?>


</div>
