<?php
namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
class SiteController extends Controller {
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex() {

        return phpinfo();

        return $this->render('index');
    }

    public function actionTestWidget() {
        return $this->render('testwidget');
    }
    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLogout() {
        Yii::$app->user->logout();
        return $this->goHome();
    }
    public function actionContact() {
        //load ContactForm model
        $model = new ContactForm();
        //if there was a POST request, then try to load POST data into a model
        if ($model->load(Yii::$app->request->post()) && $model>contact(Yii::$app->params
            ['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
    public function actionAbout() {
        $email = "admin@support.com";
        $phone = "+78007898100";
        return $this->render('about',[
            'email' => $email,
            'phone' => $phone
        ]);
    }
    public function actionSpeak($message = "default message") {
        return $this->render("speak",['message' => $message]);
    }
}
?>