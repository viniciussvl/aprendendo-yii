<?php

namespace app\controllers;

use app\filters\TempoFilter;
use yii\base\Controller;
use yii\filters\AccessControl;

class FiltrosController extends Controller
{
    public function behaviors(){
        return [
            'tempo' => [
                'class' => TempoFilter::className(),
                'message' => 'Olha só o quanto demorou:'
            ],
            'access' => [
                'class' => AccessControl::className(),
                // 'except' => ['create] acessa apenas o create
                'only' => ['create', 'update'],
                'rules' => [
                    ['allow' => false]
                ]
            ]
        ];
    }

    public function actionIndex(){
        return 'Listagem';
    }

    public function actionCreate(){
        return 'Novo';
    }

    public function actionUpdate(){
        return 'Atualizar';
    }

    public function actionDelete(){
        return 'Delete';
    }
}