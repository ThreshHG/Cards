<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element}}`.
 */
class m210322_051401_create_element_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%element}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'axisx1' => $this->integer(),
            'axisy1' => $this->integer(),
            'axisx2' => $this->integer(),
            'axisy2' => $this->integer(),
            'axisz' => $this->integer(),
            'borderwidth' => $this->integer(),
            'bordercolor' => $this->string(),
            'innercolor' => $this->string(),
            'radiolt' => $this->integer(),
            'radiort' => $this->integer(),
            'radiolb' => $this->integer(),
            'radiorb' => $this->integer(),
            'fontcolor' => $this->string(),
            'fontsize' => $this->integer(),
            'image' => 'longblob',
            'textalign' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%element}}');
    }
}
