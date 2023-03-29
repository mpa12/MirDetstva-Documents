<?php

namespace frontend\controllers;

use common\services\InvoiceForPaymentService;
use Yii;
use yii\web\Controller;
use yii\web\RangeNotSatisfiableHttpException;
use yii\web\Response;

class InvoiceForPaymentController extends Controller
{

    /**
     * Скачивание акта
     *
     * @param int $id
     * @return Response
     * @throws RangeNotSatisfiableHttpException
     */
    public function actionDownload(int $id): Response
    {
        $service = new InvoiceForPaymentService();
        return Yii::$app->response->sendContentAsFile($service->handle($id), 'report.docx');
    }
}
