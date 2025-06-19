<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account_cash_warrant}}`.
 */
class m230329_073450_create_account_cash_warrant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account_cash_warrant}}', [
            'id' => $this->primaryKey(),
            'number' => $this->integer()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'date_of_preparation' => $this->timestamp()->notNull(),
            'price' => $this->float()->notNull(),
            'customer' => $this->string()->notNull(),
            'passport_series' => $this->string(4)->notNull(),
            'passport_number' => $this->string(6)->notNull(),
            'passport_date' => $this->date()->notNull(),
            'passport_issued' => $this->string()->notNull(),
            'passport_code' => $this->string(7)->notNull(),
            'credit' => $this->float()->notNull(),
            'corresponding_account' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account_cash_warrant}}');
    }
}
