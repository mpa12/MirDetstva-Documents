<?php

use common\models\ActOfRendering;
use yii\db\Migration;

/**
 * Class m230402_063711_update_act_of_rendering_table
 */
class m230402_063711_update_act_of_rendering_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        ActOfRendering::deleteAll();
        $this->addColumn('act_of_rendering', 'product', $this->string()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('act_of_rendering', 'product');
    }
}
