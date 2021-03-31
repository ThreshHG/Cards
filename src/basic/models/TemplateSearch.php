<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Template;

/**
 * TemplateSearch represents the model behind the search form of `app\models\Template`.
 */
class TemplateSearch extends Template
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name_id', 'cost_id', 'health_id', 'atk_id', 'description_id', 'type_id', 'background_id', 'columns', 'rows'], 'integer'],
            [['font'], 'safe'],
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
        $query = Template::find();

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
            'name_id' => $this->name_id,
            'cost_id' => $this->cost_id,
            'health_id' => $this->health_id,
            'atk_id' => $this->atk_id,
            'description_id' => $this->description_id,
            'type_id' => $this->type_id,
            'background_id' => $this->background_id,
            'columns' => $this->columns,
            'rows' => $this->rows,
        ]);

        $query->andFilterWhere(['like', 'font', $this->font]);

        return $dataProvider;
    }
}
