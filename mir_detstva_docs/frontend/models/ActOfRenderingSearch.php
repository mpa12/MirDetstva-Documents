<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ActOfRendering;

/**
 * ActOfRenderingSearch represents the model behind the search form of `common\models\ActOfRendering`.
 */
class ActOfRenderingSearch extends ActOfRendering
{
    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id', 'number'], 'integer'],
            [['created_at', 'from_date', 'customer'], 'safe'],
            [['price'], 'number'],
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
        $query = ActOfRendering::find();

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
            'number' => $this->number,
            'from_date' => $this->from_date,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['ilike', 'customer', $this->customer]);

        return $dataProvider;
    }
}
