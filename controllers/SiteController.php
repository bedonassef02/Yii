<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\web\View;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTestInterface()
    {
        $container = new \yii\di\Container();

        $container->set('app\components\MyInterface', 'app\components\First');
        $obj = $container->get('app\components\MyInterface');
        $obj->test();

        $container->set('app\components\MyInterface', 'app\components\Second');
        $obj = $container->get('app\components\MyInterface');
        $obj->test();
    }
}

?>