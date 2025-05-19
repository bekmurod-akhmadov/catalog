<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%semester}}`.
 */
class m250307_071626_create_semester_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%semester}}', [
            'id' => $this->primaryKey(),
            'year_id' => $this->integer()->notNull(),
            'semester' => $this->string(255)->notNull(),
            'course_type' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%semester}}');
    }
}
