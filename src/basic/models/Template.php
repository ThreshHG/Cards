<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "template".
 *
 * @property int $id
 * @property int|null $name_id
 * @property int|null $cost_id
 * @property int|null $health_id
 * @property int|null $atk_id
 * @property int|null $description
 * @property int|null $type
 * @property int|null $faccion
 *
 * @property Cards[] $cards
 * @property Element $atk
 * @property Element $cost
 * @property Element $description0
 * @property Element $faccion0
 * @property Element $health
 * @property Element $name
 * @property Element $type0
 */
class Template extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_id', 'cost_id', 'health_id', 'atk_id', 'description', 'type', 'faccion'], 'integer'],
            [['atk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['atk_id' => 'id']],
            [['cost_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['cost_id' => 'id']],
            [['description'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['description' => 'id']],
            [['faccion'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['faccion' => 'id']],
            [['health_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['health_id' => 'id']],
            [['name_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['name_id' => 'id']],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_id' => 'Name ID',
            'cost_id' => 'Cost ID',
            'health_id' => 'Health ID',
            'atk_id' => 'Atk ID',
            'description' => 'Description',
            'type' => 'Type',
            'faccion' => 'Faccion',
        ];
    }

    /**
     * Gets query for [[Cards]].
     *
     * @return \yii\db\ActiveQuery|CardsQuery
     */
    public function getCards()
    {
        return $this->hasMany(Cards::className(), ['template_id' => 'id']);
    }

    /**
     * Gets query for [[Atk]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getAtk()
    {
        return $this->hasOne(Element::className(), ['id' => 'atk_id']);
    }

    /**
     * Gets query for [[Cost]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getCost()
    {
        return $this->hasOne(Element::className(), ['id' => 'cost_id']);
    }

    /**
     * Gets query for [[Description0]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getDescription0()
    {
        return $this->hasOne(Element::className(), ['id' => 'description']);
    }

    /**
     * Gets query for [[Faccion0]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getFaccion0()
    {
        return $this->hasOne(Element::className(), ['id' => 'faccion']);
    }

    /**
     * Gets query for [[Health]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getHealth()
    {
        return $this->hasOne(Element::className(), ['id' => 'health_id']);
    }

    /**
     * Gets query for [[Name]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getName()
    {
        return $this->hasOne(Element::className(), ['id' => 'name_id']);
    }

    /**
     * Gets query for [[Type0]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getType0()
    {
        return $this->hasOne(Element::className(), ['id' => 'type']);
    }

    /**
     * {@inheritdoc}
     * @return TemplateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TemplateQuery(get_called_class());
    }
}
