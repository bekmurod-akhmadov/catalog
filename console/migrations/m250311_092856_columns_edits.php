<?php

use yii\db\Migration;

class m250311_092856_columns_edits extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('semester' , 'year_id');
        $this->dropColumn('year' , 'program_id');
        $this->addColumn('course' , 'year_id' , $this->integer());
        $this->addColumn('course' , 'program_id' , $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250311_092856_columns_edits cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250311_092856_columns_edits cannot be reverted.\n";

        return false;
    }
    */
}
