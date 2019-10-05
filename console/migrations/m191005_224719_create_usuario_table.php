<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%usuario}}`.
 */
class m191005_224719_create_usuario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Usuario', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(100)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Usuario');
    }
}
