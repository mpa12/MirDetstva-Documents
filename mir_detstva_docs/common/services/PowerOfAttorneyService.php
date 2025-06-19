<?php

namespace common\services;

use common\models\PowerOfAttorney;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property PowerOfAttorney $model
 */
class PowerOfAttorneyService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('provider', $this->model->provider);
        $phpWord->setValue('customer', $this->model->customer);
        $phpWord->setValue('passport_series', $this->model->passport_series);
        $phpWord->setValue('passport_number', $this->model->passport_number);
        $phpWord->setValue('passport_issued', $this->model->passport_issued);
        $phpWord->setValue('passportDate', $this->model->passportDate);
        $phpWord->setValue('fromDate', $this->model->fromDate);
        $phpWord->setValue('toDate', $this->model->toDate);
        $phpWord->setValue('fromDateAsText', $this->model->fromDateAsText);
        $phpWord->setValue('toDateAsText', $this->model->toDateAsText);

        return $phpWord;
    }
}
