<?php

namespace frontend\controllers;

use common\models\ActOfRendering;
use common\services\ReportService;
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
        $service = new ReportService(ActOfRendering::class, '@common/reports/invoice-for-payment.php');
        return Yii::$app->response->sendContentAsFile($service->handle($id), 'report.docx');
    }
}
