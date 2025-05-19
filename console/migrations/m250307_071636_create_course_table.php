<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%course}}`.
 */
class m250307_071636_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%course}}', [
            'id' => $this->primaryKey(),
            'course_code' => $this->string(255)->notNull(),
            'subjectboard_id' => $this->integer()->notNull(),
            'course_name' => $this->string()->notNull(),
            'course_type' => $this->integer()->notNull(),
            'prerequisite' => $this->string(255),
            'lecture' => $this->integer(),
            'tutorial_and_lab' => $this->integer(),
            'ects' => $this->integer(),
            'status' => $this->integer()->defaultValue(1)
        ]);
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%course}}');
    }
}
