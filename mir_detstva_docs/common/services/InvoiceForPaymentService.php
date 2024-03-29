<?php

namespace common\services;

use common\models\ActOfRendering;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property ActOfRendering $model
 */
class InvoiceForPaymentService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('customer', $this->model->customer);
        $phpWord->setValue('fromDateText', $this->model->fromDateText);
        $phpWord->setValue('priceText', $this->model->priceText);
        $phpWord->setValue('priceAsText', $this->model->priceAsText);
        $phpWord->setValue('datePlusFour', $this->model->fromDateTextPlusFour);
        $phpWord->setValue('product', $this->model->product);

        return $phpWord;
    }
}
