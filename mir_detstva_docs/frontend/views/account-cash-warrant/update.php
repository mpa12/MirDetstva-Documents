<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AccountCashWarrant $model */

$this->title = 'Редактирование расходного кассового ордера: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Расходные кассовые ордера', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="account-cash-warrant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
