<?php

namespace common\services;

use common\models\Invoice;
use PhpOffice\PhpWord\TemplateProcessor;
use yii\helpers\Json;

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

        $data = Json::decode($this->model->products);

        $phpWord->cloneRow('block', count($data));
        $count = 1;

        foreach ($data as $item) {
            $phpWord->setValue("product_name#$count", $item['product_name']);
            $phpWord->setValue("product_count#$count", $item['product_count']);
            $phpWord->setValue("product_price#$count", $item['product_price']);
            $phpWord->setValue("product_sum#$count", $item['product_sum']);
            $phpWord->setValue("block#$count", '');
            $count++;
        }

        return $phpWord;
    }
}
