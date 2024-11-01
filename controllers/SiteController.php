<?php

namespace app\controllers;

use app\models\RegistrationForm;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionRegistration() {
        $mRegistration = new RegistrationForm();
        return $this->render('registration', ['model' => $mRegistration]);
    }

    function actionIndex()
    {
        return $this->render('index');
    }

}

?>