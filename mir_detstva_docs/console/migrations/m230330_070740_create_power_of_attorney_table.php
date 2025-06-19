<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%power_of_attorney}}`.
 */
class m230330_070740_create_power_of_attorney_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%power_of_attorney}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'from_date' => $this->date()->notNull(),
            'to_date' => $this->date()->notNull(),
            'number' => $this->integer()->notNull(),
            'passport_series' => $this->string(4)->notNull(),
            'passport_number' => $this->string(6)->notNull(),
            'passport_date' => $this->date()->notNull(),
            'passport_issued' => $this->string()->notNull(),
            'provider' => $this->string()->notNull(),
            'customer' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%power_of_attorney}}');
    }
}
