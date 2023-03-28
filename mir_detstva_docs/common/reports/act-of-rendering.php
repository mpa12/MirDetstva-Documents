<table>
    <?php foreach (range(1, 2) as $row) { ?>
        <tr style="padding: 0; font-size: 11px">
            <?php foreach (range(1, 33) as $cell) { ?>
                <td style="width: 25px"></td>
            <?php } ?>
        </tr>
    <?php } ?>

    <tr style="padding: 0; border: 1px solid black; font-size: 11px">
        <td style="width: 25px"></td>
        <td colspan="31" style="font-size: 19px; font-weight: bold; border-bottom: 2px solid black">
            Акт № 1 от 1 марта 2000 г.
        </td>
        <td style="width: 25px"></td>
    </tr>

    <tr style="padding: 0; font-size: 11px">
        <?php foreach (range(1, 33) as $cell) { ?>
            <td style="width: 25px"></td>
        <?php } ?>
    </tr>

    <tr style="padding: 0; font-size: 11px; height: 75px">
        <td style="width: 25px"></td>
        <td style="width: 100px; text-align: center; vertical-align: middle; font-size: 12px">Исполнитель:</td>
        <td colspan="31" style="font-size: 13px; font-weight: bold; vertical-align: middle">
            Частное Учреждение Отдыха И Оздоровления Детей “Мир Детства” (ЧУ ООД “Мир Детства”), ИНН 2723036002, КПП 272302001, 680000, Хабаровский кр., г. Хабаровск, ул. Узловая, д. 6, тел.: +79104555535, р/с 40703810770000000690, в банке ДАЛЬНЕВОСТОЧНЫЙ БАНК ПАО СБЕРБАНК, БИК 040813608, к/с 30101810600000000608
        </td>
    </tr>
</table>