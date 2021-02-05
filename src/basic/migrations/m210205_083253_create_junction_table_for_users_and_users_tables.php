<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_users}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m210205_083253_create_junction_table_for_users_and_users_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_users}}', [
            'users_id' => $this->integer()->notNull(),
            'users2_id' => $this->integer()->notNull(),
            'usr1_blocked_usr2' => $this->boolean(),
            'usr2_blocked_usr1' => $this->boolean(),
        ]);

        // creates index for column `users_id`
        $this->createIndex(
            '{{%idx-users_users-users_id}}',
            '{{%users_users}}',
            'users_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_users-users_id}}',
            '{{%users_users}}',
            'users_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            '{{%idx-users_users-users2_id}}',
            '{{%users_users}}',
            'users2_id'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-users_users-users2_id}}',
            '{{%users_users}}',
            'users2_id',
            '{{%users}}',
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
            '{{%fk-users_users-users_id}}',
            '{{%users_users}}'
        );

        // drops index for column `users_id`
        $this->dropIndex(
            '{{%idx-users_users-users_id}}',
            '{{%users_users}}'
        );

        $this->dropTable('{{%users_users}}');
    }
}
