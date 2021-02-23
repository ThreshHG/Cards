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
 * @property int|null $template_id
 *
 * @property Template $template
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
            [['cost', 'health', 'atk', 'template_id'], 'integer'],
            [['name', 'description', 'type', 'faccion'], 'string', 'max' => 255],
            [['template_id'], 'exist', 'skipOnError' => true, 'targetClass' => Template::className(), 'targetAttribute' => ['template_id' => 'id']],
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
            'template_id' => 'Template ID',
        ];
    }

    /**
     * Gets query for [[Template]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplate()
    {
        return $this->hasOne(Template::className(), ['id' => 'template_id']);
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
