<?php

namespace common\models;

use common\helpers\PriceTextHelper;
use Yii;
use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * This is the model class for table "invoice".
 *
 * @property int $id
 * @property string $created_at
 * @property int $number
 * @property string $from_date
 * @property string $consignee_and_address
 * @property string $buyer
 * @property string $address
 * @property string $inn
 * @property string $fromDate
 * @property string $products
 * @property string $productsTotalSum
 * @property string $productsTotalSumText
 */
class Invoice extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'invoice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'from_date'], 'safe'],
            [['number', 'from_date', 'consignee_and_address', 'buyer', 'address', 'inn', 'products'], 'required'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['consignee_and_address', 'buyer', 'address', 'inn'], 'string', 'max' => 255],
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
            'number' => 'Номер документа',
            'from_date' => 'Дата документа',
            'consignee_and_address' => 'Грузополучатель и его адрес',
            'buyer' => 'Покупатель',
            'address' => 'Адрес',
            'inn' => 'ИНН',
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

    public function getProductsTotalSum(): float|int
    {
        $data = Json::decode($this->products);
        $data = array_column($data, 'product_sum');
        $data = array_map(fn($item) => (int)$item, $data);
        return array_sum($data);
    }

    public function getProductsTotalSumText(): string
    {
        $text = PriceTextHelper::num2str($this->productsTotalSum);

        // Перевод в верхний регситр первой буквы
        return mb_strtoupper(mb_substr($text, 0, 1, 'utf-8'), 'utf-8')
            . mb_substr($text, 1, null, 'utf-8');
    }
}
