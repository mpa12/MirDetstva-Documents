<?php

namespace common\models;

use common\helpers\PriceTextHelper;
use Yii;
use yii\base\InvalidConfigException;

/**
 * This is the model class for table "act_of_rendering".
 *
 * @property int $id
 * @property string $created_at
 * @property int $number
 * @property string $from_date
 * @property string $customer
 * @property float $price
 * @property string $fromDateText
 * @property string $fromDateTextPlusFour
 * @property string $priceText
 * @property string $priceAsText
 * @property string $product
 */
class ActOfRendering extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'act_of_rendering';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['number', 'from_date', 'customer', 'price', 'product'], 'required'],
            [['created_at', 'from_date'], 'safe'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['price'], 'number'],
            [['customer', 'product'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'number' => 'Номер акта',
            'from_date' => 'Дата акта',
            'fromDateText' => 'Дата акта',
            'customer' => 'Заказчик',
            'price' => 'Цена',
            'priceText' => 'Цена',
            'product' => 'Товар',
        ];
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


    /**
     * Получение даты в виде текста + 4 дня
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDateTextPlusFour(): string
    {
        $date = strtotime($this->from_date . ' +4 day');
        return Yii::$app->formatter->asDate($date, 'd MMMM yyyy г.');
    }
}
