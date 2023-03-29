<?php

/**
 * @var ActOfRendering $model
 */

use common\models\ActOfRendering;

?>

<table class="TableStyle0">
    <?php foreach (range(1, 1) as $row) { ?>
        <tr style="padding: 0; font-size: 11px">
            <?php foreach (range(1, 33) as $cell) { ?>
                <td style="width: 25px; height: 10px"></td>
            <?php } ?>
        </tr>
    <?php } ?>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="31" style="border-bottom: 2px solid black"><p style="margin-top: 0; margin-bottom: 0; font-size: 14pt; font-weight: bold;">Акт № <?= $model->number ?> от <?= $model->fromDateText ?></p></td>
        <td style="width: 25px"></td>
    </tr>

    <tr style="padding: 0">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="4"><p style="margin-top: 0; margin-bottom: 0; font-size: 9pt;">Исполнитель:</p></td>
        <td colspan="28"><p style="margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Частное Учреждение Отдыха И Оздоровления Детей “Мир Детства” (ЧУ ООД “Мир Детства”), ИНН 2723036002, КПП 272302001, 680000, Хабаровский кр., г. Хабаровск, ул. Узловая, д. 6, тел.: +79104555535, р/с 40703810770000000690, в банке ДАЛЬНЕВОСТОЧНЫЙ БАНК ПАО СБЕРБАНК, БИК 040813608, к/с 30101810600000000608</p></td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="4">
            <p style="margin-top: 0; margin-bottom: 0;"><span style="font-size: 9pt;">Заказчик:</span></p></td>
        <td colspan="28">
            <p style="margin-top: 0; margin-bottom: 0;font-size: 10pt; font-weight: bold;"><?= $model->customer ?></p></td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="4">
            <p style="margin-top: 0; margin-bottom: 0; font-size: 9pt;">Основание:</p>
        </td>
        <td colspan="28">
            <p style="margin-top: 0; margin-bottom: 0;font-size: 9pt; font-weight: bold;">Основной договор</p>
        </td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="2" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">№</p></td>
        <td colspan="17" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Наименование работ, услуг</p></td>
        <td colspan="3" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Кол-во</p></td>
        <td colspan="2" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Ед.</p></td>
        <td colspan="4" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Цена</p></td>
        <td colspan="4" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Сумма</p></td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="2" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;">1</p></td>
        <td colspan="17" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;">Путевка</p></td>
        <td colspan="3" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;">1</p></td>
        <td colspan="2" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;">шт</p></td>
        <td colspan="4" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;"><?= $model->priceText ?></p></td>
        <td colspan="4" style="border: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;"><?= $model->priceText ?></p></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td colspan="29"><p style="text-align: right; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Итого:</p></td>
        <td colspan="4"><p style="text-align: right; margin-top: 0; margin-bottom: 0; font-size: 9pt; background: yellow; font-weight: bold;"><?= $model->priceText ?></p></td>
    </tr>

    <tr>
        <td colspan="29"><p style="text-align: right; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">Без налога (НДС)</p></td>
        <td colspan="4"><p style="text-align: right; margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;">-</p></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="32"><p style="margin-top: 0; margin-bottom: 0; font-size: 8pt;">Всего оказано услуг 1, на сумму <?= $model->priceText ?></p></td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="31"><p style="margin-top: 0; margin-bottom: 0; font-size: 9pt; font-weight: bold;"><?= $model->priceAsText ?></p></td>
        <td style="width: 25px"></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="32" style="border-bottom: 2px solid black"><p style="margin-top: 0; margin-bottom: 0; font-size: 9pt;">Вышеперечисленные услуги выполнены полностью и в срок. Заказчик претензий по объему, качеству и срокам оказания услуг не имеет.</p></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="16"><p style="margin-top: 0; margin-bottom: 0; font-size: 10pt; font-weight: bold;">ИСПОЛНИТЕЛЬ</p></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td colspan="13"><p style="margin-top: 0; margin-bottom: 0; font-size: 10pt; font-weight: bold;">ЗАКАЗЧИК</p></td>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="16"><p style="margin-top: 0; margin-bottom: 0; font-size: 8pt;">Частное учреждение отдыха и оздоровления детей «Мир Детства»</p></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td colspan="13"><p style="margin-top: 0; margin-bottom: 0; font-size: 8pt;"><?= $model->customer ?></p></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr>
        <td style="width: 25px"></td>
        <td colspan="16" style="border-top: 1px solid black"><p style="text-align: center; margin-top: 0; margin-bottom: 0; font-size: 8pt;">Директор            Колесникова Т.С.</p></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td style="width: 25px"></td>
        <td colspan="13" style="width: 25px; border-top: 1px solid black"></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $item) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>
</table>
