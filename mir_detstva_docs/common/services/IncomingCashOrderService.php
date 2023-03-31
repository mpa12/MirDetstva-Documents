<?php

namespace common\services;

use common\models\IncomingCashOrder;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property IncomingCashOrder $model
 */
class IncomingCashOrderService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('customer', $this->model->customer);
        $phpWord->setValue('corresponding_account', $this->model->corresponding_account);
        $phpWord->setValue('debit', $this->model->debit);
        $phpWord->setValue('fromDate', $this->model->fromDate);
        $phpWord->setValue('fromDateText', $this->model->fromDateText);
        $phpWord->setValue('priceText', $this->model->priceText);
        $phpWord->setValue('priceAsText', $this->model->priceAsText);
        $phpWord->setValue('priceSeparately', $this->model->priceSeparately);

        return $phpWord;
    }
}
