<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%packing_list}}`.
 */
class m230330_063027_create_packing_list_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%packing_list}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'consignee' => $this->text()->notNull(),
            'payer' => $this->text()->notNull(),
            'number' => $this->integer()->notNull(),
            'date_of_preparation' => $this->timestamp()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%packing_list}}');
    }
}
