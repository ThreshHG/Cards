<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UsersUsers]].
 *
 * @see UsersUsers
 */
class UsersUsersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return UsersUsers[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return UsersUsers|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
