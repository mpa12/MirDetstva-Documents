<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PowerOfAttorney $model */

$this->title = 'Редактирование доверенности: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Доверенности', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="power-of-attorney-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
