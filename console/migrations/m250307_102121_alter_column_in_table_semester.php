<?php

use yii\db\Migration;

class m250307_102121_alter_column_in_table_semester extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('semester', 'course_type' , 'program_id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250307_102121_alter_column_in_table_semester cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250307_102121_alter_column_in_table_semester cannot be reverted.\n";

        return false;
    }
    */
}
