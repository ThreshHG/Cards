<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cards}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%template}}`
 */
class m210223_195632_create_cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cards}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'cost' => $this->integer(),
            'health' => $this->integer(),
            'atk' => $this->integer(),
            'description' => $this->string(),
            'type' => $this->string(),
            'faccion' => $this->string(),
            'template_id' => $this->integer(),
        ]);

        // creates index for column `template_id`
        $this->createIndex(
            '{{%idx-cards-template_id}}',
            '{{%cards}}',
            'template_id'
        );

        // add foreign key for table `{{%template}}`
        $this->addForeignKey(
            '{{%fk-cards-template_id}}',
            '{{%cards}}',
            'template_id',
            '{{%template}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%template}}`
        $this->dropForeignKey(
            '{{%fk-cards-template_id}}',
            '{{%cards}}'
        );

        // drops index for column `template_id`
        $this->dropIndex(
            '{{%idx-cards-template_id}}',
            '{{%cards}}'
        );

        $this->dropTable('{{%cards}}');
    }
}
