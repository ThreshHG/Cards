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
class m210223_195418_create_template_table extends Migration
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
            'description' => $this->integer(),
            'type' => $this->integer(),
            'faccion' => $this->integer(),
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

        // creates index for column `description`
        $this->createIndex(
            '{{%idx-template-description}}',
            '{{%template}}',
            'description'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-description}}',
            '{{%template}}',
            'description',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `type`
        $this->createIndex(
            '{{%idx-template-type}}',
            '{{%template}}',
            'type'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-type}}',
            '{{%template}}',
            'type',
            '{{%element}}',
            'id',
            'CASCADE'
        );

        // creates index for column `faccion`
        $this->createIndex(
            '{{%idx-template-faccion}}',
            '{{%template}}',
            'faccion'
        );

        // add foreign key for table `{{%element}}`
        $this->addForeignKey(
            '{{%fk-template-faccion}}',
            '{{%template}}',
            'faccion',
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
            '{{%fk-template-description}}',
            '{{%template}}'
        );

        // drops index for column `description`
        $this->dropIndex(
            '{{%idx-template-description}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-type}}',
            '{{%template}}'
        );

        // drops index for column `type`
        $this->dropIndex(
            '{{%idx-template-type}}',
            '{{%template}}'
        );

        // drops foreign key for table `{{%element}}`
        $this->dropForeignKey(
            '{{%fk-template-faccion}}',
            '{{%template}}'
        );

        // drops index for column `faccion`
        $this->dropIndex(
            '{{%idx-template-faccion}}',
            '{{%template}}'
        );

        $this->dropTable('{{%template}}');
    }
}
