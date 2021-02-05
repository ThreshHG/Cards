<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_cards}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 * - `{{%cards}}`
 */
class m210205_081749_create_junction_table_for_users_and_cards_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_cards}}', [
            'users_id' => $this->integer()->notNull(),
            'cards_id' => $this->integer()->notNull(),
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            //'PRIMARY KEY(users_id, cards_id)',
        ]);

        // creates index for column `users_id`
        $this->createIndex(
            '{{%idx-users_cards-users_id}}',
            '{{%users_cards}}',
            'users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_cards-users_id}}',
            '{{%users_cards}}',
            'users_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );

        // creates index for column `cards_id`
        $this->createIndex(
            '{{%idx-users_cards-cards_id}}',
            '{{%users_cards}}',
            'cards_id'
        );

        // add foreign key for table `{{%cards}}`
        $this->addForeignKey(
            '{{%fk-users_cards-cards_id}}',
            '{{%users_cards}}',
            'cards_id',
            '{{%cards}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-users_cards-users_id}}',
            '{{%users_cards}}'
        );

        // drops index for column `users_id`
        $this->dropIndex(
            '{{%idx-users_cards-users_id}}',
            '{{%users_cards}}'
        );

        // drops foreign key for table `{{%cards}}`
        $this->dropForeignKey(
            '{{%fk-users_cards-cards_id}}',
            '{{%users_cards}}'
        );

        // drops index for column `cards_id`
        $this->dropIndex(
            '{{%idx-users_cards-cards_id}}',
            '{{%users_cards}}'
        );

        $this->dropTable('{{%users_cards}}');
    }
}
