<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Cliente;

class InsertController extends Controller
{
    public function actionIndex(){
        $clientes = [
            ['nome' => 'Kilderson Sena'],
            ['nome' => 'Vinicius Aquino'],
            ['nome' => 'Francisco MArcos'],
            ['nome' => 'Thiago BArros'],
            ['nome' => 'Mateus Santos']
        ];

    
        // Essa é mais vantajosa porque utiliza apenas um comando SQL Insert com a lista já dentro
    $insert = \Yii::$app->db
    ->createCommand()
    ->batchInsert(Cliente::tableName(), ['nome'], $clientes)
    ->execute();

    var_dump($insert);


/*
Geralmente fazemos assim, porém isso executa vários um comando sql pra cada linha, logo a opção acima se torna mais eficiente.
foreach($clientes as $c){
            $row = new Cliente;
            $row->nome = $c['nome'];
            $row->save();
        }
*/
        echo 'inseridoooooooooo pohaaa';
    }
}