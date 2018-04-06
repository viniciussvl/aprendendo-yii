<?php
use \yii\widgets\LinkPager;
use \yii\bootstrap\ActiveForm;

?>

<h1>Pessoas</h1>
<hr>

<div class="col-md-6">
    <ul>
        <?php foreach($pessoas as $p): ?>
            <li><?= $p->nome . ' - ' . $p->email; ?></li>
        <?php endforeach; ?>
    </ul>
    
    <?= LinkPager::widget(['pagination' => $pagination]); ?>
</div>

