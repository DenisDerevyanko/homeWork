<?php
    namespace app\controllers;
    use Yii;
    use \yii\web\Controller;
 // контроллер будет наследовать этот класс.
        class SiteController extends Controller
 {
            public function actionIndex()
   {
    $message = "Hello, Vlad!";
    return $message;
 }
   }
