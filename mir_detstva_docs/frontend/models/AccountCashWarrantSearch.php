<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\AccountCashWarrant;

/**
 * AccountCashWarrantSearch represents the model behind the search form of `common\models\AccountCashWarrant`.
 */
class AccountCashWarrantSearch extends AccountCashWarrant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number'], 'integer'],
            [['created_at', 'date_of_preparation', 'customer', 'passport_series', 'passport_number', 'passport_date', 'passport_issued', 'passport_code'], 'safe'],
            [['price', 'credit', 'corresponding_account'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AccountCashWarrant::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'number' => $this->number,
            'created_at' => $this->created_at,
            'date_of_preparation' => $this->date_of_preparation,
            'price' => $this->price,
            'passport_date' => $this->passport_date,
            'credit' => $this->credit,
            'corresponding_account' => $this->corresponding_account,
        ]);

        $query->andFilterWhere(['ilike', 'customer', $this->customer])
            ->andFilterWhere(['ilike', 'passport_series', $this->passport_series])
            ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
            ->andFilterWhere(['ilike', 'passport_issued', $this->passport_issued])
            ->andFilterWhere(['ilike', 'passport_code', $this->passport_code]);

        return $dataProvider;
    }
}
