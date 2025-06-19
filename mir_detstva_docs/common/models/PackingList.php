<?php

namespace common\models;

use Yii;
use yii\base\InvalidConfigException;

/**
 * This is the model class for table "packing_list".
 *
 * @property int $id
 * @property string $created_at
 * @property string $consignee
 * @property string $payer
 * @property int $number
 * @property string $date_of_preparation
 * @property string $fromDateText
 * @property string $fromDateAsText
 */
class PackingList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packing_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'date_of_preparation'], 'safe'],
            [['consignee', 'payer', 'number', 'date_of_preparation'], 'required'],
            [['consignee', 'payer'], 'string'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
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
            'consignee' => 'Грузополучатель',
            'payer' => 'Плательщик',
            'number' => 'Номер документа',
            'date_of_preparation' => 'Дата составления',
        ];
    }

    /**
     * Получение даты
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDateText(): string
    {
        return Yii::$app->formatter->asDate($this->date_of_preparation, 'dd.MM.yyyy');
    }

    /**
     * Получение даты в виде текста
     *
     * @return string
     * @throws InvalidConfigException
     */
    public function getFromDateAsText(): string
    {
        return Yii::$app->formatter->asDate($this->date_of_preparation, 'd MMMM yyyy года');
    }
}
