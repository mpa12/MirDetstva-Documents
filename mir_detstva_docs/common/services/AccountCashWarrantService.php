<?php

namespace common\services;

use common\models\AccountCashWarrant;
use PhpOffice\PhpWord\TemplateProcessor;

/**
 * @property AccountCashWarrant $model
 */
class AccountCashWarrantService extends ReportService
{
    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        $phpWord->setValue('number', (string)$this->model->number);
        $phpWord->setValue('customer', $this->model->customer);
        $phpWord->setValue('fromDateText', $this->model->fromDateText);
        $phpWord->setValue('fromDateAsText', $this->model->fromDateAsText);
        $phpWord->setValue('priceText', $this->model->priceText);
        $phpWord->setValue('priceAsText', $this->model->priceAsText);
        $phpWord->setValue('passport_series', $this->model->passport_series);
        $phpWord->setValue('passport_number', $this->model->passport_number);
        $phpWord->setValue('passport_issued', $this->model->passport_issued);
        $phpWord->setValue('passport_code', $this->model->passport_code);
        $phpWord->setValue('credit', $this->model->credit);
        $phpWord->setValue('corresponding_account', $this->model->corresponding_account);
        $phpWord->setValue('passportDate', $this->model->passportDate);

        return $phpWord;
    }
}
