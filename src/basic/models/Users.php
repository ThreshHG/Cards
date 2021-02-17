<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $pass
 * @property string $auth_key
 * @property string $access_token
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
            [['username', 'pass', 'auth_key', 'access_token'], 'required'],
            [['username', 'pass', 'auth_key', 'access_token'], 'string', 'max' => 255],
            [['username'], 'unique'],
            [['auth_key'], 'unique'],
            [['access_token'], 'unique'],
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
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }

    /**
     * Gets query for [[UsersCards]].
     *
     * @return \yii\db\ActiveQuery|UsersCardsQuery
     */
    public function getUsersCards()
    {
        return $this->hasMany(UsersCards::className(), ['users_id' => 'id']);
    }

    /**
     * Gets query for [[UsersUsers]].
     *
     * @return \yii\db\ActiveQuery|UsersUsersQuery
     */
    public function getUsersUsers()
    {
        return $this->hasMany(UsersUsers::className(), ['users2_id' => 'id']);
    }

    /**
     * Gets query for [[UsersUsers0]].
     *
     * @return \yii\db\ActiveQuery|UsersUsersQuery
     */
    public function getUsersUsers0()
    {
        return $this->hasMany(UsersUsers::className(), ['users_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }
}
