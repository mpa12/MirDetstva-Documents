<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ActOfRendering $model */

$this->title = 'Создание акта и счета';
$this->params['breadcrumbs'][] = ['label' => 'Акты и счета', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-of-rendering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
