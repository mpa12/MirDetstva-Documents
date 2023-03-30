<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PackingList $model */

$this->title = 'Редактирование товарной накладной: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Товарные накладные', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="packing-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
