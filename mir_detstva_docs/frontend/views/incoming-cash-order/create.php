<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\IncomingCashOrder $model */

$this->title = 'Создание приходного кассового ордера';
$this->params['breadcrumbs'][] = ['label' => 'Приходные кассовые ордера', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="incoming-cash-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
