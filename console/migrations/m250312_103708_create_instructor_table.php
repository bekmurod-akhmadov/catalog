<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%instructor}}`.
 */
class m250312_103708_create_instructor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%instructor}}', [
            'id' => $this->primaryKey(),
            'last_name' => $this->string(255)->notNull(),
            'first_name' => $this->string(255)->notNull(),
            'academic_degree' => $this->string(255),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%instructor}}');
    }
}
