<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\AccountCashWarrantSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="account-cash-warrant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'date_of_preparation') ?>

    <?= $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'customer') ?>

    <?php // echo $form->field($model, 'passport_series') ?>

    <?php // echo $form->field($model, 'passport_number') ?>

    <?php // echo $form->field($model, 'passport_date') ?>

    <?php // echo $form->field($model, 'passport_issued') ?>

    <?php // echo $form->field($model, 'passport_code') ?>

    <?php // echo $form->field($model, 'credit') ?>

    <?php // echo $form->field($model, 'corresponding_account') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
