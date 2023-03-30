<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\AccountCashWarrant $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="account-cash-warrant-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'date_of_preparation')->input('date') ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'price')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'passport_series')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'passport_date')->input('date') ?></div>
        <div class="col"><?= $form->field($model, 'passport_code')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row mb-3"><?= $form->field($model, 'passport_issued')->textInput(['maxlength' => true]) ?></div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'credit')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'corresponding_account')->textInput() ?></div>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
