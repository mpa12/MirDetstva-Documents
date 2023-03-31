<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%incoming_cash_order}}`.
 */
class m230331_015103_create_incoming_cash_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%incoming_cash_order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'from_date' => $this->date()->notNull(),
            'number' => $this->integer()->notNull(),
            'customer' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
            'debit' => $this->float()->notNull(),
            'corresponding_account' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%incoming_cash_order}}');
    }
}
