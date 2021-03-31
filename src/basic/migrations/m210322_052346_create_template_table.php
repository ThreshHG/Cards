<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%template}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%element}}`
 * - `{{%element}}`
 * - `{{%element}}`
 * - `{{%element}}`
 * - `{{%element}}`
 * - `{{%element}}`
 * - `{{%element}}`
 */
class m210322_052346_create_template_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%template}}', [
            'id' => $this->primaryKey(),
            'name_id' => $this->integer(),
            'cost_id' => $this->integer(),
            'health_id' => $this->integer(),
            'atk_id' => $this->integer(),
            'description_id' => $this->integer(),
            'type_id' => $this->integer(),
            'font' => $this->string(),
            'background_id' => $this->integer(),
            'columns' => $this->integer(),
            'rows' => $this->integer(),
        ]);

        // creates index for column `name_id`
        $this->createIndex(
            '{{%idx-template-name_id}}',
            '{{%template}}',
            'name_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-name_id}}',
            '{{%template}}',
            'name_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `cost_id`
        $this->createIndex(
            '{{%idx-template-cost_id}}',
            '{{%template}}',
            'cost_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-cost_id}}',
            '{{%template}}',
            'cost_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `health_id`
        $this->createIndex(
            '{{%idx-template-health_id}}',
            '{{%template}}',
            'health_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-health_id}}',
            '{{%template}}',
            'health_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `atk_id`
        $this->createIndex(
            '{{%idx-template-atk_id}}',
            '{{%template}}',
            'atk_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-atk_id}}',
            '{{%template}}',
            'atk_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `description_id`
        $this->createIndex(
            '{{%idx-template-description_id}}',
            '{{%template}}',
            'description_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-description_id}}',
            '{{%template}}',
            'description_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `type_id`
        $this->createIndex(
            '{{%idx-template-type_id}}',
            '{{%template}}',
            'type_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-type_id}}',
            '{{%template}}',
            'type_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `background_id`
        $this->createIndex(
            '{{%idx-template-background_id}}',
            '{{%template}}',
            'background_id'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-background_id}}',
            '{{%template}}',
            'background_id',
            '{{%element}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-name_id}}',
            '{{%template}}'
        );

        // drops index for column `name_id`
        $this->dropIndex(
            '{{%idx-template-name_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-cost_id}}',
            '{{%template}}'
        );

        // drops index for column `cost_id`
        $this->dropIndex(
            '{{%idx-template-cost_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-health_id}}',
            '{{%template}}'
        );

        // drops index for column `health_id`
        $this->dropIndex(
            '{{%idx-template-health_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-atk_id}}',
            '{{%template}}'
        );

        // drops index for column `atk_id`
        $this->dropIndex(
            '{{%idx-template-atk_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-description_id}}',
            '{{%template}}'
        );

        // drops index for column `description_id`
        $this->dropIndex(
            '{{%idx-template-description_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-type_id}}',
            '{{%template}}'
        );

        // drops index for column `type_id`
        $this->dropIndex(
            '{{%idx-template-type_id}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-background_id}}',
            '{{%template}}'
        );

        // drops index for column `background_id`
        $this->dropIndex(
            '{{%idx-template-background_id}}',
            '{{%template}}'
        );

        $this->dropTable('{{%template}}');
    }
}
