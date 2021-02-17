<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_users".
 *
 * @property int $id
 * @property int $users_id
 * @property int $users2_id
 * @property int|null $usr1_blocked_usr2
 * @property int|null $usr2_blocked_usr1
 *
 * @property Users $users2
 * @property Users $users
 */
class UsersUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'users2_id'], 'required'],
            [['users_id', 'users2_id', 'usr1_blocked_usr2', 'usr2_blocked_usr1'], 'integer'],
            [['users2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['users2_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users_id' => 'Users ID',
            'users2_id' => 'Users2 ID',
            'usr1_blocked_usr2' => 'Usr1 Blocked Usr2',
            'usr2_blocked_usr1' => 'Usr2 Blocked Usr1',
        ];
    }

    /**
     * Gets query for [[Users2]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUsers2()
    {
        return $this->hasOne(Users::className(), ['id' => 'users2_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery|UsersQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'users_id']);
    }

    /**
     * {@inheritdoc}
     * @return UsersUsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersUsersQuery(get_called_class());
    }
}
