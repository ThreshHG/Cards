<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%element}}`.
 */
class m210223_194506_create_element_table extends Migration
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
            'gridrows' => $this->integer(),
            'gridcolumns' => $this->integer(),
            'radiolt' => $this->integer(),
            'radiort' => $this->integer(),
            'radiolb' => $this->integer(),
            'radiorb' => $this->integer(),
            'image' => 'longblob',
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
