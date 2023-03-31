<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\InvoiceSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="invoice-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'number') ?>

    <?= $form->field($model, 'from_date') ?>

    <?= $form->field($model, 'consignee_and_address') ?>

    <?php // echo $form->field($model, 'buyer') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'inn') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сброс', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
