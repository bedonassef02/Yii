<?php

namespace app\controllers;

use app\models\RegistrationForm;
use yii\base\DynamicModel;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionAdHocValidation() {
        $model = DynamicModel::validateData([
            'username' => 'John',
            'email' => 'john@gmail.com'
        ], [
            [['username', 'email'], 'string', 'max' => 12],
            ['email', 'email'],
        ]);

        if ($model->hasErrors()) {
            var_dump($model->errors);
        } else {
            echo "success";
        }
    }
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