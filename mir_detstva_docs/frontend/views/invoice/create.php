<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Invoice $model */

$this->title = 'Создание счета-фактуры';
$this->params['breadcrumbs'][] = ['label' => 'Счета-фактуры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invoice-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
