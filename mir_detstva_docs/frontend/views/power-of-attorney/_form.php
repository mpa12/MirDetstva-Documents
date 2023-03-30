<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PowerOfAttorney $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="power-of-attorney-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col"><?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'from_date')->input('date') ?></div>
        <div class="col"><?= $form->field($model, 'to_date')->input('date') ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'passport_series')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'passport_number')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'passport_date')->input('date') ?></div>
    </div>

    <div class="row">
        <div class="col"><?= $form->field($model, 'passport_issued')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'provider')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
