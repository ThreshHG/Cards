<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $pass
 *
 * @property UsersCards[] $usersCards
 * @property UsersUsers[] $usersUsers
 * @property UsersUsers[] $usersUsers0
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'pass'], 'required'],
            [['username', 'pass'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'pass' => 'Pass',
        ];
    }

    /**
     * Gets query for [[UsersCards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersCards()
    {
        return $this->hasMany(UsersCards::className(), ['users_id' => 'id']);
    }
    //custom, si no anda borrar
    public function getCards()
    {
        return $this->hasMany(UsersCards::className(), ['users_id' => 'id'])->viaTable('users_cards',['cards' => 'id']);
    }

    /**
     * Gets query for [[UsersUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersUsers()
    {
        return $this->hasMany(UsersUsers::className(), ['users2_id' => 'id']);
    }

    /**
     * Gets query for [[UsersUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsersUsers0()
    {
        return $this->hasMany(UsersUsers::className(), ['users_id' => 'id']);
    }
}
