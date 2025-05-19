<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subject_board}}`.
 */
class m250307_072155_create_subject_board_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject_board}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subject_board}}');
    }
}
