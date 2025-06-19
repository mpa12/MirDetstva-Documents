<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\PowerOfAttorney $model */

$this->title = 'Создание доверенности';
$this->params['breadcrumbs'][] = ['label' => 'Доверенности', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="power-of-attorney-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
