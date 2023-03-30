<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "account_cash_warrant".
 *
 * @property int $id
 * @property int $number
 * @property string $created_at
 * @property string $date_of_preparation
 * @property float $price
 * @property string $customer
 * @property string $passport_series
 * @property string $passport_number
 * @property string $passport_date
 * @property string $passport_issued
 * @property string $passport_code
 * @property float $credit
 * @property float $corresponding_account
 */
class AccountCashWarrant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'account_cash_warrant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'date_of_preparation', 'price', 'customer', 'passport_series', 'passport_number', 'passport_date', 'passport_issued', 'passport_code', 'credit', 'corresponding_account'], 'required'],
            [['number'], 'default', 'value' => null],
            [['number'], 'integer'],
            [['created_at', 'date_of_preparation', 'passport_date'], 'safe'],
            [['price', 'credit', 'corresponding_account'], 'number'],
            [['customer', 'passport_issued'], 'string', 'max' => 255],
            [['passport_series'], 'string', 'max' => 4],
            [['passport_number'], 'string', 'max' => 6],
            [['passport_code'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Номер документа',
            'created_at' => 'Created At',
            'date_of_preparation' => 'Дата составления',
            'price' => 'Сумма',
            'customer' => 'Выдан (кому, ФИО)',
            'passport_series' => 'Серия пасспорта',
            'passport_number' => 'Номер паспорта',
            'passport_date' => 'Дата выдачи паспорта',
            'passport_issued' => 'Кем выдан паспорт',
            'passport_code' => 'Код подразделения паспорта',
            'credit' => 'Кредит',
            'corresponding_account' => 'Корреспондирующий счет',
        ];
    }
}
