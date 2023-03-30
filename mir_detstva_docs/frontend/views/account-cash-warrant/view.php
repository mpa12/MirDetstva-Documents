<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\AccountCashWarrant $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Расходные кассовые ордера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="account-cash-warrant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот документ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'number',
            'created_at',
            'date_of_preparation',
            'price',
            'customer',
            'passport_series',
            'passport_number',
            'passport_date',
            'passport_issued',
            'passport_code',
            'credit',
            'corresponding_account',
        ],
    ]) ?>

</div>
