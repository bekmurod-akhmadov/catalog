<?php

use yii\db\Migration;

class m250318_095337_add_column_table_department extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('department' , 'graduate' , $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250318_095337_add_column_table_department cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250318_095337_add_column_table_department cannot be reverted.\n";

        return false;
    }
    */
}
