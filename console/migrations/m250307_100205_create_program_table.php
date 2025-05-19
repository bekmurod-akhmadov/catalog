<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%program}}`.
 */
class m250307_100205_create_program_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%program}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text(),
            'application_type' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%program}}');
    }
}
