<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%year}}`.
 */
class m250307_071616_create_year_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%year}}', [
            'id' => $this->primaryKey(),
            'year' => $this->string(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%year}}');
    }
}
