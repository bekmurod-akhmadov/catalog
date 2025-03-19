<?php

use yii\db\Migration;

class m250307_085708_add_column_table_course extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('course' , 'semester_id' , $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250307_085708_add_column_table_course cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250307_085708_add_column_table_course cannot be reverted.\n";

        return false;
    }
    */
}
