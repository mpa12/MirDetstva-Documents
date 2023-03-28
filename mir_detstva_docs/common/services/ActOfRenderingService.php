<?php

namespace common\services;

use common\models\ActOfRendering;
use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Shared\Html;
use Yii;

class ActOfRenderingService
{
    public ?ActOfRendering $model = null;

    public function handle(int $id)
    {
        $this->model = $this->getModel($id);
        return $this->getDocument();
    }

    public function getDocument()
    {
        $phpWord = $this->generatingDocument();
        $fileName = 'report.docx';
        $objWriter = IOFactory::createWriter($phpWord);
        $objWriter->save($fileName);

        return file_get_contents($fileName);
    }

    public function generatingDocument(): PhpWord
    {
        $phpWord = new PhpWord();

        $section = $phpWord->addSection();

        $this->setDocumentMargins($section);

        $view = Yii::$app->getView();
        $html = $view->render('@common/reports/act-of-rendering.php', [
            'param1' => 'value1',
            'param2' => 'value2',
        ]);
        Html::addHtml($section, $html);

        return $phpWord;
    }

    public function setDocumentMargins(Section $section)
    {
        $sectionStyle = $section->getStyle();

        $sectionStyle->setMarginTop(Converter::cmToTwip());
        $sectionStyle->setMarginRight(Converter::cmToTwip());
        $sectionStyle->setMarginBottom(Converter::cmToTwip());
        $sectionStyle->setMarginLeft(Converter::cmToTwip());
    }

    public function getModel(int $id): ?ActOfRendering
    {
        return ActOfRendering::findOne($id);
    }
}
