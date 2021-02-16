<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cards}}`.
 */
class m210215_203547_create_cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cards}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'cost' => $this->integer(),
            'health' => $this->integer(),
            'atk' => $this->integer(),
            'description' => $this->string(),
            'type' => $this->string(),
            'faccion' => $this->string(),
            'bg_color' => $this->string(),
            'border_color' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cards}}');
    }
}
