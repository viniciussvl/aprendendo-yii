<?php 

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FormatterController extends Controller 
{
    public function actionIndex(){
        $appLang = Yii::$app->language;

        /** @var MyFormatter $formatter */
        $formatter = Yii::$app->formatter;

        echo "<h2>{$appLang}</h2>";

        echo "<p>Percentuais: {$formatter->asPercent(0.15333, 2)} </p>";
        echo "<p>Booleans: {$formatter->asBoolean(false)} </p>";
        echo "<p>E-mails: {$formatter->asEmail('viniciussvl@hotmail.com')} </p>";
        echo "<p>NText: {$formatter->asNtext("Vinicius\nAlves\nde\nAquino")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09", "short")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09", "medium")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09", "long")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09", "full")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09")} </p>";
        echo "<p>Data: {$formatter->asDate("2018-04-09")} </p>";
        echo "<p>Moeda: {$formatter->asCurrency(12345.67)} </p>";
        echo "<p>Size: {$formatter->asShortSize(102400)} </p>";
        echo "<p>Echo: {$formatter->asCpf(102400)} </p>";
    }
}