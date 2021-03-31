<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "element".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $axisx1
 * @property int|null $axisy1
 * @property int|null $axisx2
 * @property int|null $axisy2
 * @property int|null $axisz
 * @property int|null $borderwidth
 * @property string|null $bordercolor
 * @property string|null $innercolor
 * @property int|null $radiolt
 * @property int|null $radiort
 * @property int|null $radiolb
 * @property int|null $radiorb
 * @property string|null $fontcolor
 * @property int|null $fontsize
 * @property resource|null $image
 * @property string|null $textalign
 *
 * @property Template[] $templates
 * @property Template[] $templates0
 * @property Template[] $templates1
 * @property Template[] $templates2
 * @property Template[] $templates3
 * @property Template[] $templates4
 * @property Template[] $templates5
 */
class Element extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'element';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['axisx1', 'axisy1', 'axisx2', 'axisy2', 'axisz', 'borderwidth', 'radiolt', 'radiort', 'radiolb', 'radiorb', 'fontsize'], 'integer'],
            [['image'], 'string'],
            [['name', 'bordercolor', 'innercolor', 'fontcolor', 'textalign'], 'string', 'max' => 255],
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
            'axisx1' => 'Axisx1',
            'axisy1' => 'Axisy1',
            'axisx2' => 'Axisx2',
            'axisy2' => 'Axisy2',
            'axisz' => 'Axisz',
            'borderwidth' => 'Borderwidth',
            'bordercolor' => 'Bordercolor',
            'innercolor' => 'Innercolor',
            'radiolt' => 'Radiolt',
            'radiort' => 'Radiort',
            'radiolb' => 'Radiolb',
            'radiorb' => 'Radiorb',
            'fontcolor' => 'Fontcolor',
            'fontsize' => 'Fontsize',
            'image' => 'Image',
            'textalign' => 'Textalign',
        ];
    }

    /**
     * Gets query for [[Templates]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates()
    {
        return $this->hasMany(Template::className(), ['atk_id' => 'id']);
    }

    /**
     * Gets query for [[Templates0]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates0()
    {
        return $this->hasMany(Template::className(), ['background_id' => 'id']);
    }

    /**
     * Gets query for [[Templates1]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates1()
    {
        return $this->hasMany(Template::className(), ['cost_id' => 'id']);
    }

    /**
     * Gets query for [[Templates2]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates2()
    {
        return $this->hasMany(Template::className(), ['description_id' => 'id']);
    }

    /**
     * Gets query for [[Templates3]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates3()
    {
        return $this->hasMany(Template::className(), ['health_id' => 'id']);
    }

    /**
     * Gets query for [[Templates4]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates4()
    {
        return $this->hasMany(Template::className(), ['name_id' => 'id']);
    }

    /**
     * Gets query for [[Templates5]].
     *
     * @return \yii\db\ActiveQuery|TemplateQuery
     */
    public function getTemplates5()
    {
        return $this->hasMany(Template::className(), ['type_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ElementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ElementQuery(get_called_class());
    }
}
