<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Invoice $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="invoice-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'from_date')->input('date') ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'consignee_and_address')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'buyer')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="row mb-3">
        <div class="col"><?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?></div>
        <div class="col"><?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?></div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
