<?php 
namespace app\controllers;

use Yii;
use app\models\CadastroModel;
use app\models\Pessoa;
use yii\web\Controller;
use yii\data\Pagination;


class ExerciciosController extends Controller
{

    public function actionFormulario(){

        $cadastroModel = new CadastroModel;
        $form_data = Yii::$app->request->post();

        if($cadastroModel->load($form_data) && $cadastroModel->validate()){
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        }

        return $this->render('formulario', [
            'model' => $cadastroModel
        ]);
    }

    public function actionPessoas(){
        /* $pessoas = Pessoa::find()->orderBy('nome')->all();
        echo '<pre>' . var_dump($pessoas) . '</pre>'; */

        $pessoa = Pessoa::findOne(2);
        $pessoa->nome = 'Thiago Doideira';
        $pessoa->save();
        var_dump($pessoa->nome . ' - ' . $pessoa->email);
    }

    public function actionPaginacao(){
        $query = Pessoa::find();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count()
        ]);

        $pessoas = $query->orderBy('nome')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);
    }
}