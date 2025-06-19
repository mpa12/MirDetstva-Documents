<?php

use common\models\IncomingCashOrder;
use yii\db\Migration;

/**
 * Class m230402_062241_update_incoming_cash_order_table
 */
class m230402_062241_update_incoming_cash_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        IncomingCashOrder::deleteAll();
        $this->alterColumn('{{%incoming_cash_order}}', 'debit', $this->float());
        $this->alterColumn('{{%incoming_cash_order}}', 'corresponding_account', $this->string());

        $this->addColumn('{{%incoming_cash_order}}', 'base', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%incoming_cash_order}}', 'debit', $this->float()->notNull());
        $this->alterColumn('{{%incoming_cash_order}}', 'corresponding_account', $this->string()->notNull());

        $this->dropColumn('{{%incoming_cash_order}}', 'base');
    }
}
