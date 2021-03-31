<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Element;

/**
 * ElementSearch represents the model behind the search form of `app\models\Element`.
 */
class ElementSearch extends Element
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'axisx1', 'axisy1', 'axisx2', 'axisy2', 'axisz', 'borderwidth', 'radiolt', 'radiort', 'radiolb', 'radiorb', 'fontsize'], 'integer'],
            [['name', 'bordercolor', 'innercolor', 'fontcolor', 'image', 'textalign'], 'safe'],
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
        $query = Element::find();

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
            'axisx1' => $this->axisx1,
            'axisy1' => $this->axisy1,
            'axisx2' => $this->axisx2,
            'axisy2' => $this->axisy2,
            'axisz' => $this->axisz,
            'borderwidth' => $this->borderwidth,
            'radiolt' => $this->radiolt,
            'radiort' => $this->radiort,
            'radiolb' => $this->radiolb,
            'radiorb' => $this->radiorb,
            'fontsize' => $this->fontsize,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'bordercolor', $this->bordercolor])
            ->andFilterWhere(['like', 'innercolor', $this->innercolor])
            ->andFilterWhere(['like', 'fontcolor', $this->fontcolor])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'textalign', $this->textalign]);

        return $dataProvider;
    }
}
