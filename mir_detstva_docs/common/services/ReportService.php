<?php

namespace common\services;

use PhpOffice\PhpWord\Element\Section;
use PhpOffice\PhpWord\Exception\CopyFileException;
use PhpOffice\PhpWord\Exception\CreateTemporaryFileException;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\TemplateProcessor;
use yii\db\ActiveRecord;

class ReportService
{
    public ?ActiveRecord $model = null;

    public function __construct(public string $modelClass, public string $templatePath)
    {
        //
    }

    public function handle(int $id)
    {
        $this->model = $this->getModel($id);
        return $this->getDocument();
    }

    public function getDocument()
    {
        $fileName = 'report.docx';

        $phpWord = $this->generatingDocument();
        $phpWord = $this->setValues($phpWord);

        $phpWord->saveAs($fileName);

        return file_get_contents($fileName);
    }

    /**
     * @throws CopyFileException
     * @throws CreateTemporaryFileException
     */
    public function generatingDocument(): TemplateProcessor
    {
        return new TemplateProcessor($this->templatePath);
    }

    public function setDocumentMargins(Section $section): void
    {
        $sectionStyle = $section->getStyle();

        $sectionStyle->setMarginTop(Converter::cmToTwip());
        $sectionStyle->setMarginRight(Converter::cmToTwip());
        $sectionStyle->setMarginBottom(Converter::cmToTwip());
        $sectionStyle->setMarginLeft(Converter::cmToTwip());
    }

    public function getModel(int $id): ?ActiveRecord
    {
        return $this->modelClass::findOne($id);
    }

    public function setValues(TemplateProcessor $phpWord): TemplateProcessor
    {
        return $phpWord;
    }
}
