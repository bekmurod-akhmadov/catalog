<?php

use yii\db\Migration;

class m250318_051557_add_column_table_subject_board extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('subject_board' , 'graduate' , $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250318_051557_add_column_table_subject_board cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250318_051557_add_column_table_subject_board cannot be reverted.\n";

        return false;
    }
    */
}
