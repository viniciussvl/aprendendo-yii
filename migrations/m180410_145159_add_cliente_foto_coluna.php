<?php

use yii\db\Migration;
use app\models\Cliente;

/**
 * Class m180410_145159_add_cliente_foto_coluna
 */
class m180410_145159_add_cliente_foto_coluna extends Migration
{

    public function safeUp()
    {
        $this->addColumn(Cliente::tableName(), 'foto', $this->string(60));
    }


    public function safeDown()
    {
       $this->dropColumn(Cliente::tableName(), 'foto');
    }

  
}
