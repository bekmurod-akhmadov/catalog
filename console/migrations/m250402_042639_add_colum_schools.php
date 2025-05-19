<?php

use yii\db\Migration;

class m250402_042639_add_colum_schools extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('program' , 'school_type' , $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250402_042639_add_colum_schools cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250402_042639_add_colum_schools cannot be reverted.\n";

        return false;
    }
    */
}
