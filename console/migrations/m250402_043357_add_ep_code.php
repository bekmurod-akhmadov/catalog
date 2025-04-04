<?php

use yii\db\Migration;

class m250402_043357_add_ep_code extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('program' , 'ep_code' , $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250402_043357_add_ep_code cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250402_043357_add_ep_code cannot be reverted.\n";

        return false;
    }
    */
}
