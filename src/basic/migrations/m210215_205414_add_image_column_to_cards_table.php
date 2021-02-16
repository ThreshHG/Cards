<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%cards}}`.
 */
class m210215_205414_add_image_column_to_cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%cards}}', 'image', 'LONGBLOB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%cards}}', 'image');
    }
}
