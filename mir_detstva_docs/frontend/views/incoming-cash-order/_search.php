<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\IncomingCashOrderSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="incoming-cash-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'from_date') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'customer') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'debit') ?>

    <?php // echo $form->field($model, 'corresponding_account') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
