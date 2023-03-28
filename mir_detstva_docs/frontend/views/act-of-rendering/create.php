<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\ActOfRendering $model */

$this->title = 'Создание акта об оказании услуг';
$this->params['breadcrumbs'][] = ['label' => 'Акты об оказании услуг', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="act-of-rendering-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
