<?php

use yii\db\Migration;

class m250404_045205_add_columns_table_catalog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catalog','subject_board_id' , $this->integer()->notNull());
        $this->addColumn('catalog','course_type', $this->integer()->notNull());
        $this->addColumn('catalog','program', $this->string(255)->notNull());
        $this->addColumn('catalog','year', $this->integer()->notNull());
        $this->addColumn('catalog','status', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250404_045205_add_columns_table_catalog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250404_045205_add_columns_table_catalog cannot be reverted.\n";

        return false;
    }
    */
}
