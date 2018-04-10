<?php

namespace app\models;

use Yii;

class Cliente extends \yii\db\ActiveRecord
{

    /**
     * @var UploadedFile
     */
    public $fotoCliente;
   
    public static function tableName()
    {
        return '{{%clientes}}';
    }

 
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['fotoCliente'], 'file', 'extensions' => 'jpg, png'],
            [['nome', 'foto'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'foto' => 'Foto do Cliente',
            'fotoCliente' => 'Foto do Cliente'
        ];
    }
}
