<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\AccountCashWarrant $model */

$this->title = 'Создать расходный кассовый ордер';
$this->params['breadcrumbs'][] = ['label' => 'Расходные кассовые ордера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="account-cash-warrant-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
