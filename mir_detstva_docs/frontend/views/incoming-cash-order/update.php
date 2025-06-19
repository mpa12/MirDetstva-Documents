<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\IncomingCashOrder $model */

$this->title = 'Редактирование приходного кассового ордера: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Приходные кассовые ордера', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="incoming-cash-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
