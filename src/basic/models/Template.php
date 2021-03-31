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
 * @property int|null $description_id
 * @property int|null $type_id
 * @property string|null $font
 * @property int|null $background_id
 * @property int|null $columns
 * @property int|null $rows
 *
 * @property Cards[] $cards
 * @property Element $atk
 * @property Element $background
 * @property Element $cost
 * @property Element $description
 * @property Element $health
 * @property Element $name
 * @property Element $type
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
            [['name_id', 'cost_id', 'health_id', 'atk_id', 'description_id', 'type_id', 'background_id', 'columns', 'rows'], 'integer'],
            [['font'], 'string', 'max' => 255],
            [['atk_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['atk_id' => 'id']],
            [['background_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['background_id' => 'id']],
            [['cost_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['cost_id' => 'id']],
            [['description_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['description_id' => 'id']],
            [['health_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['health_id' => 'id']],
            [['name_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['name_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Element::className(), 'targetAttribute' => ['type_id' => 'id']],
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
            'description_id' => 'Description ID',
            'type_id' => 'Type ID',
            'font' => 'Font',
            'background_id' => 'Background ID',
            'columns' => 'Columns',
            'rows' => 'Rows',
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
     * Gets query for [[Background]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getBackground()
    {
        return $this->hasOne(Element::className(), ['id' => 'background_id']);
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
     * Gets query for [[Description]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getDescription()
    {
        return $this->hasOne(Element::className(), ['id' => 'description_id']);
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
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery|ElementQuery
     */
    public function getType()
    {
        return $this->hasOne(Element::className(), ['id' => 'type_id']);
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
