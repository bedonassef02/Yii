<?php

namespace app\controllers;

use app\models\RegistrationForm;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionRegistration() {
        $model = new RegistrationForm();
        return $this->render('registration', ['model' => $model]);
    }
    function actionIndex()
    {
        return $this->render('index');
    }

}

?>