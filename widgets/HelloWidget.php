<?php

namespace app\widgets;
use yii\base\Widget;
use yii\helpers\Html;

Class HelloWidget extends Widget{

    public $message;
    public $submessage;

    public function init(){
        parent::init();
        if($this->message === null){
            $this->message = 'Hello World';
        }
        
        if($this->submessage === null){
            $this->submessage = "Estou aqui TESTEEEEEEEEEEEEEEEE";
        }
    }

    public function run(){
        $output = "<h2>" . Html::encode($this->message) . "</h2>";
        $output .= "<p>" . Html::encode($this->submessage) . "</p>";
        return $output;
    }
}