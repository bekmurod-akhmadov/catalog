<?php

use yii\db\Migration;

class m250415_100414_add_columns_in_table_instructor extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('instructor' , 'department' , $this->integer());
        $this->addColumn('instructor' , 'school' , $this->integer());
        $this->addColumn('instructor' , 'administrative_position' , $this->integer());
        $this->addColumn('instructor' , 'academic_position' , $this->integer());
        $this->addColumn('instructor' , 'status' , $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250415_100414_add_columns_in_table_instructor cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250415_100414_add_columns_in_table_instructor cannot be reverted.\n";

        return false;
    }
    */
}
