<?php

use yii\db\Migration;

/**
 * Class m230328_103707_create_act_of_rendering
 */
class m230328_103707_create_act_of_rendering extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('act_of_rendering', [
            'id' => $this->primaryKey(),
            'created_at' => $this->timestamp()->notNull(),
            'number' => $this->integer()->notNull(),
            'from_date' => $this->timestamp()->notNull(),
            'customer' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('act_of_rendering');
    }
}
