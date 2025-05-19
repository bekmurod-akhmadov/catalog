<?php

use yii\db\Migration;

class m250403_045557_edit_type_program_id_table_course extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('course', 'program_id', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('your_table', 'program_id', $this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250403_045557_edit_type_program_id_table_course cannot be reverted.\n";

        return false;
    }
    */
}
