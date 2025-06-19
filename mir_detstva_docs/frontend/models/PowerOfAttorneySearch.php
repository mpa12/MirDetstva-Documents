<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PowerOfAttorney;

/**
 * PowerOfAttorneySearch represents the model behind the search form of `common\models\PowerOfAttorney`.
 */
class PowerOfAttorneySearch extends PowerOfAttorney
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number'], 'integer'],
            [['created_at', 'from_date', 'to_date', 'passport_series', 'passport_number', 'passport_date', 'passport_issued', 'provider'], 'safe'],
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
        $query = PowerOfAttorney::find();

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
            'to_date' => $this->to_date,
            'number' => $this->number,
            'passport_date' => $this->passport_date,
        ]);

        $query->andFilterWhere(['ilike', 'passport_series', $this->passport_series])
            ->andFilterWhere(['ilike', 'passport_number', $this->passport_number])
            ->andFilterWhere(['ilike', 'passport_issued', $this->passport_issued])
            ->andFilterWhere(['ilike', 'provider', $this->provider]);

        return $dataProvider;
    }
}
