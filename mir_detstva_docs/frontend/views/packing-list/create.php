<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PackingList $model */

$this->title = 'Создание товарной накладной';
$this->params['breadcrumbs'][] = ['label' => 'Товарные накладные', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="packing-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
