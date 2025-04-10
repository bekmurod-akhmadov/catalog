<?php

use yii\db\Migration;

class m250404_062239_alter_column_in_table_catalog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('catalog', 'subject_board_id' , $this->integer()->defaultValue(null));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250404_062239_alter_column_in_table_catalog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250404_062239_alter_column_in_table_catalog cannot be reverted.\n";

        return false;
    }
    */
}
