<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cards;

/**
 * CardsSearch represents the model behind the search form of `app\models\Cards`.
 */
class CardsSearch extends Cards
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cost', 'health', 'atk'], 'integer'],
            [['name', 'description', 'type', 'faccion', 'bg_color', 'border_color', 'image'], 'safe'],
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
        $query = Cards::find();

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
            'cost' => $this->cost,
            'health' => $this->health,
            'atk' => $this->atk,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'faccion', $this->faccion])
            ->andFilterWhere(['like', 'bg_color', $this->bg_color])
            ->andFilterWhere(['like', 'border_color', $this->border_color])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
