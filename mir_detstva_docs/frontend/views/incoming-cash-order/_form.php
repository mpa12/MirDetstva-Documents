<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\IncomingCashOrder $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="incoming-cash-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'from_date')->input('date') ?></div>
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'price')->textInput() ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'debit')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'corresponding_account')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
