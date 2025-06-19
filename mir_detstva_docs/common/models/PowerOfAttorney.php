<?php

namespace common\models;

use Yii;
use yii\base\InvalidConfigException;

/**
 * This is the model class for table "power_of_attorney".
 *
 * @property int $id
 * @property string $created_at
 * @property string $from_date
 * @property string $to_date
 * @property int $number
 * @property string $passport_series
 * @property string $passport_number
 * @property string $passport_date
 * @property string $passport_issued
 * @property string $provider
 * @property string $customer
 * @property string $passportDate
 * @property string $fromDate
 * @property string $toDate
 * @property string $fromDateAsText
 * @property string $toDateAsText
 */
class PowerOfAttorney extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'power_of_attorney';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'from_date', 'to_date', 'passport_date'], 'safe'],
            [['from_date', 'to_date', 'number', 'passport_series', 'passport_number', 'passport_date', 'passport_issued', 'provider', 'customer'], 'required'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['passport_series'], 'string', 'max' => 4],
            [['passport_number'], 'string', 'max' => 6],
            [['passport_issued', 'provider', 'customer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'from_date' => 'Дата выдачи',
            'to_date' => 'Срок действия',
            'number' => 'Номер документа',
            'passport_series' => 'Серия паспорта',
            'passport_number' => 'Номер паспорта',
            'passport_date' => 'Дата выдачи паспорта',
            'passport_issued' => 'Кем выдан паспорт',
            'provider' => 'Поставщик',
            'customer' => 'Доверенное лицо',
        ];
    }

    /**
     * Получение даты получения паспорта
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getPassportDate(): string
    {
        return Yii::$app->formatter->asDate($this->passport_date, 'dd.MM.yyyy');
    }

    /**
     * Получение даты выдачи документа
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDate(): string
    {
        return Yii::$app->formatter->asDate($this->from_date, 'dd.MM.yyyy');
    }

    /**
     * Получение даты окончания документа
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getToDate(): string
    {
        return Yii::$app->formatter->asDate($this->to_date, 'dd.MM.yyyy');
    }

    /**
     * Получение даты выдачи документа
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDateAsText(): string
    {
        return Yii::$app->formatter->asDate($this->from_date, 'd MMMM yyyy г.');
    }

    /**
     * Получение даты окончания документа
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getToDateAsText(): string
    {
        return Yii::$app->formatter->asDate($this->to_date, 'd MMMM yyyy г.');
    }
}
