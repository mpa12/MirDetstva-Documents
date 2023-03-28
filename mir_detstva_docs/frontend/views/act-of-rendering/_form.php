<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\ActOfRendering $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class=act-of-rendering-form>

    <?php $form = ActiveForm::begin(); ?>

    <div class=row>
        <div class=col>
            <?= $form->field($model, 'number')->textInput() ?>
        </div>
        <div class=col>
            <?= $form->field($model, 'from_date')->input('date') ?>
        </div>
    </div>

    <div class=row>
        <div class=col>
            <?= $form->field($model, 'customer')->textInput(['maxlength' => true]) ?>
        </div>
        <div class=col>
            <?= $form->field($model, 'price')->textInput() ?>
        </div>
    </div>

    <div class=mt-3>
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
