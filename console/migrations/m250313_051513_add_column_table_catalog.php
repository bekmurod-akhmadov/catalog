<?php

use yii\db\Migration;

class m250313_051513_add_column_table_catalog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catalog' , 'last_date_to_add_or_drop' , $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('catalog', 'last_date_to_add_or_drop');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250313_051513_add_column_table_catalog cannot be reverted.\n";

        return false;
    }
    */
}
