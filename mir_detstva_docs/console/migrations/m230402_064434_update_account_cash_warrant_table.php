<?php

use common\models\AccountCashWarrant;
use yii\db\Migration;

/**
 * Class m230402_064434_update_account_cash_warrant_table
 */
class m230402_064434_update_account_cash_warrant_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        AccountCashWarrant::deleteAll();
        $this->alterColumn('{{%account_cash_warrant}}', 'credit', $this->float());
        $this->alterColumn('{{%account_cash_warrant}}', 'corresponding_account', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('{{%account_cash_warrant}}', 'credit', $this->float()->notNull());
        $this->alterColumn('{{%account_cash_warrant}}', 'corresponding_account', $this->string()->notNull());
    }
}
