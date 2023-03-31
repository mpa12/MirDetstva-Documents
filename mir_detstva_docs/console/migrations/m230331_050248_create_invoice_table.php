<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%invoice}}`.
 */
class m230331_050248_create_invoice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%invoice}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'number' => $this->integer()->notNull(),
            'from_date' => $this->date()->notNull(),
            'consignee_and_address' => $this->string()->notNull(),
            'buyer' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'inn' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%invoice}}');
    }
}
