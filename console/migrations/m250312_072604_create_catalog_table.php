<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catalog}}`.
 */
class m250312_072604_create_catalog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%catalog}}', [
            'id' => $this->primaryKey(),
            'subject_board' => $this->integer()->notNull(),
            'course_name' => $this->string(255)->notNull(),
            'department' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'course_code' => $this->string(),
            'prerequisite' => $this->string(255),
            'lecture_hours' => $this->integer(),
            'tutorials_hours' => $this->integer(),
            'lab_hours' => $this->integer(),
            'semester' => $this->string(255),
            'ects_credit' => $this->integer(),
            'us_credit' => $this->integer(),
            'degree' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%catalog}}');
    }
}
