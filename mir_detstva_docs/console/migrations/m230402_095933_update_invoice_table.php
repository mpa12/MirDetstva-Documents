<?php

use yii\db\Migration;

/**
 * Class m230402_095933_update_invoice_table
 */
class m230402_095933_update_invoice_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('invoice', 'products', $this->json()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('invoice', 'products');
    }
}
