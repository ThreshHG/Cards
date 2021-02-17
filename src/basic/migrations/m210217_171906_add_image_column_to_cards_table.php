<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%cards}}`.
 */
class m210217_171906_add_image_column_to_cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%cards}}', 'image', 'longblob');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%cards}}', 'image');
    }
}
