<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users_cards".
 *
 * @property int $id
 * @property int|null $users_id
 * @property int|null $cards_id
 * @property string|null $name
 *
 * @property Cards $cards
 * @property Users $users
 */
class UsersCards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users_cards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'cards_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['cards_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cards::className(), 'targetAttribute' => ['cards_id' => 'id']],
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
            'cards_id' => 'Cards ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Cards]].
     *
     * @return \yii\db\ActiveQuery|CardsQuery
     */
    public function getCards()
    {
        return $this->hasOne(Cards::className(), ['id' => 'cards_id']);
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
     * @return UsersCardsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersCardsQuery(get_called_class());
    }
}
