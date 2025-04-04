<?php

use yii\db\Migration;

class m250404_045205_add_columns_table_catalog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

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
