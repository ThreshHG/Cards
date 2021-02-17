<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsersUsers;

/**
 * UsersUsersSearch represents the model behind the search form of `app\models\UsersUsers`.
 */
class UsersUsersSearch extends UsersUsers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'users_id', 'users2_id', 'usr1_blocked_usr2', 'usr2_blocked_usr1'], 'integer'],
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
        $query = UsersUsers::find();

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
            'users_id' => $this->users_id,
            'users2_id' => $this->users2_id,
            'usr1_blocked_usr2' => $this->usr1_blocked_usr2,
            'usr2_blocked_usr1' => $this->usr2_blocked_usr1,
        ]);

        return $dataProvider;
    }
}
