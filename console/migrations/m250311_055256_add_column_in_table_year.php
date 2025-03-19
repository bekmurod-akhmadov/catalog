<?php

use yii\db\Migration;

class m250311_055256_add_column_in_table_year extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('year' , 'program_id', $this->integer()->notNull());
        $this->dropColumn('semester' , 'program_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250311_055256_add_column_in_table_year cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250311_055256_add_column_in_table_year cannot be reverted.\n";

        return false;
    }
    */
}
