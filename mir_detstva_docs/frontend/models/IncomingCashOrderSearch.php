<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\IncomingCashOrder;

/**
 * IncomingCashOrderSearch represents the model behind the search form of `common\models\IncomingCashOrder`.
 */
class IncomingCashOrderSearch extends IncomingCashOrder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number'], 'integer'],
            [['created_at', 'from_date', 'customer', 'corresponding_account'], 'safe'],
            [['price', 'debit'], 'number'],
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
        $query = IncomingCashOrder::find();

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
            'created_at' => $this->created_at,
            'from_date' => $this->from_date,
            'number' => $this->number,
            'price' => $this->price,
            'debit' => $this->debit,
        ]);

        $query->andFilterWhere(['ilike', 'customer', $this->customer])
            ->andFilterWhere(['ilike', 'corresponding_account', $this->corresponding_account]);

        return $dataProvider;
    }
}
