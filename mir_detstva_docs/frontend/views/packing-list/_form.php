<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\PackingList $model */
/** @var yii\bootstrap5\ActiveForm $form */
?>

<div class="packing-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col"><?= $form->field($model, 'number')->textInput() ?></div>
        <div class="col"><?= $form->field($model, 'date_of_preparation')->input('date') ?></div>
    </div>

    <?= $form->field($model, 'consignee')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'payer')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
