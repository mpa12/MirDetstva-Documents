<?php

namespace common\services;

use common\models\PackingList;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property PackingList $model
 */
class PackingListService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('consignee', $this->model->consignee);
        $phpWord->setValue('payer', $this->model->payer);
        $phpWord->setValue('fromDateText', $this->model->fromDateText);
        $phpWord->setValue('fromDateAsText', $this->model->fromDateAsText);

        return $phpWord;
    }
}
