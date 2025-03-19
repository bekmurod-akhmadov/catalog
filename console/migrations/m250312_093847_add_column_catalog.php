<?php

use yii\db\Migration;

class m250312_093847_add_column_catalog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('catalog' , 'syllabus_template' , $this->string(255));
        $this->addColumn('catalog' , 'term' , $this->string(255));
        $this->addColumn('catalog' , 'part_of_team' , $this->string(255));
        $this->addColumn('catalog' , 'format' , $this->string(255));
        $this->addColumn('catalog' , 'section_status' , $this->string(255));
        $this->addColumn('catalog' , 'maximum_enrollment' , $this->integer());
        $this->addColumn('catalog' , 'seats_avail' , $this->integer());
        $this->addColumn('catalog' , 'waitlist_total' , $this->string(255));
        $this->addColumn('catalog' , 'last_day_to_register' , $this->date());
        $this->addColumn('catalog' , 'instructor' , $this->integer());
        $this->addColumn('catalog' , 'meeting_info' , $this->string());
        $this->addColumn('catalog' , 'notes' , $this->string());
        $this->addColumn('course' , 'accreditation_subject_area' , $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250312_093847_add_column_catalog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250312_093847_add_column_catalog cannot be reverted.\n";

        return false;
    }
    */
}
