<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cards".
 *
 * @property int $id
 * @property string $name
 * @property int|null $cost
 * @property int|null $health
 * @property int|null $atk
 * @property string|null $description
 * @property string|null $type
 * @property string|null $faccion
 * @property string|null $bg_color
 * @property string|null $border_color
 * @property resource|null $image
 *
 * @property UsersCards[] $usersCards
 */
class Cards extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cards';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['cost', 'health', 'atk'], 'integer'],
            [['image'], 'string'],
            [['name', 'description', 'type', 'faccion', 'bg_color', 'border_color'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cost' => 'Cost',
            'health' => 'Health',
            'atk' => 'Atk',
            'description' => 'Description',
            'type' => 'Type',
            'faccion' => 'Faccion',
            'bg_color' => 'Bg Color',
            'border_color' => 'Border Color',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[UsersCards]].
     *
     * @return \yii\db\ActiveQuery|UsersCardsQuery
     */
    public function getUsersCards()
    {
        return $this->hasMany(UsersCards::className(), ['cards_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return CardsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CardsQuery(get_called_class());
    }
}
