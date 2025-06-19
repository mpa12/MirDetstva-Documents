<?php

namespace common\models;

use common\helpers\PriceTextHelper;
use Yii;
use yii\base\InvalidConfigException;

/**
 * This is the model class for table "incoming_cash_order".
 *
 * @property int $id
 * @property string $created_at
 * @property string $from_date
 * @property int $number
 * @property string $customer
 * @property float $price
 * @property float $debit
 * @property string $corresponding_account
 * @property string $fromDate
 * @property string $fromDateText
 * @property string $priceText
 * @property string $priceAsText
 * @property string $priceSeparately
 * @property string $base
 */
class IncomingCashOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incoming_cash_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'from_date'], 'safe'],
            [['from_date', 'number', 'customer', 'price', 'base'], 'required'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['price', 'debit'], 'number'],
            [['customer', 'corresponding_account'], 'string', 'max' => 255],
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
            'from_date' => 'Дата составления',
            'number' => 'Номер документа',
            'customer' => 'Принято от (ФИО)',
            'price' => 'Сумма, руб.коп.',
            'debit' => 'Дебет',
            'corresponding_account' => 'Корреспондирующий счет, субсчет',
            'base' => 'Основание',
        ];
    }

    /**
     * Получение даты
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDate(): string
    {
        return Yii::$app->formatter->asDate($this->from_date, 'dd.MM.yyyy');
    }

    /**
     * Получение даты в виде текста
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDateText(): string
    {
        return Yii::$app->formatter->asDate($this->from_date, 'd MMMM yyyy г.');
    }

    public function getPriceText(): string
    {
        return number_format($this->price, 2, ',', ' ');
    }

    public function getPriceAsText(): string
    {
        $text = PriceTextHelper::num2str($this->price);

        // Перевод в верхний регситр первой буквы
        return mb_strtoupper(mb_substr($text, 0, 1, 'utf-8'), 'utf-8')
            . mb_substr($text, 1, null, 'utf-8');
    }

    public function getPriceSeparately(): string
    {
        $whole = floor($this->price);
        $fraction = floor(($this->price - $whole) * 100);

        $whole = number_format($whole, 0, ',', ' ');

        return "$whole руб. $fraction коп.";
    }
}
