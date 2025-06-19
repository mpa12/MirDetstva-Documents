<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ActOfRendering $model */

$this->title = 'Редактирование акта и счета: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Акты и счета', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="act-of-rendering-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
