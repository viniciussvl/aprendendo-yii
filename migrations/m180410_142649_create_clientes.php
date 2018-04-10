<?php

use yii\db\Migration;

/**
 * Class m180410_142649_create_clientes
 */
class m180410_142649_create_clientes extends Migration
{

    public function safeUp()
    {
        $this->createTable('{{%clientes}}', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%clientes}}');
    }

    
}
