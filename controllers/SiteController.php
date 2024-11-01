<?php

namespace app\controllers;

use app\models\RegistrationForm;
use yii\base\DynamicModel;
use yii\bootstrap5\ActiveForm;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{

    public function actionRegistration() {
        $model = new RegistrationForm();
        if (\Yii::$app->request->isAjax && $model->load((array)\Yii::$app->request)) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        return $this->render('registration', ['model' => $model]);
    }
    function actionIndex()
    {
        return $this->render('index');
    }

}

?>