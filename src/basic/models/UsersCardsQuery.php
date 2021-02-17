<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UsersCards]].
 *
 * @see UsersCards
 */
class UsersCardsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return UsersCards[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return UsersCards|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
