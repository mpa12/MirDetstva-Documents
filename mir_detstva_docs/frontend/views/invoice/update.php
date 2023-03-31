<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Invoice $model */

$this->title = 'Редактирование счета-фактуры: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Счета-фактуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировние';
?>
<div class="invoice-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
