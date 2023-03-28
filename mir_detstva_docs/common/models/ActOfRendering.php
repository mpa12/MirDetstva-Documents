<?php

namespace common\models;

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
            [['number', 'from_date', 'customer', 'price'], 'required'],
            [['created_at', 'from_date'], 'safe'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['price'], 'number'],
            [['customer'], 'string', 'max' => 255],
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
            'customer' => 'Заказчик',
            'price' => 'Цена',
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
}
