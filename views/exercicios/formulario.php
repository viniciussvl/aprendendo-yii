<?php
use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;

?>

<h2>Formulario com o Yii</h2>

<?php $form = \yii\bootstrap\ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome'); ?>
    <?= $form->field($model, 'email'); ?>
    <?= $form->field($model, 'idade'); ?>

    <div class="form-group">
    <?= Html::submitButton('Enviar Dados', ['class' => 'btn btn-primary']) ?>
    </div>



<?php ActiveForm::end(); ?>

