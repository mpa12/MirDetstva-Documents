<?php

namespace common\services;

use common\models\Invoice;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property Invoice $model
 */
class InvoiceService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('consignee_and_address', $this->model->consignee_and_address);
        $phpWord->setValue('buyer', $this->model->buyer);
        $phpWord->setValue('address', $this->model->address);
        $phpWord->setValue('inn', $this->model->inn);
        $phpWord->setValue('fromDate', $this->model->fromDate);

        return $phpWord;
    }
}
