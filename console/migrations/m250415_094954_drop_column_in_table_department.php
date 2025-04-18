<?php

use yii\db\Migration;

class m250415_094954_drop_column_in_table_department extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('department' , 'graduate');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250415_094954_drop_column_in_table_department cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250415_094954_drop_column_in_table_department cannot be reverted.\n";

        return false;
    }
    */
}
