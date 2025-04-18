<?php

use yii\db\Migration;

class m250415_095805_drop_column_in_table_department_2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('department' , 'graduate' , $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250415_095805_drop_column_in_table_department_2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250415_095805_drop_column_in_table_department_2 cannot be reverted.\n";

        return false;
    }
    */
}
