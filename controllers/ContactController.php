<?php

namespace app\controllers;

use yii\web\Controller;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $mContactForm = new \app\models\ContactForm();
        $mContactForm->name = "contactForm";
        $mContactForm->email = "user@gmail.com";
        $mContactForm->subject = "subject";
        $mContactForm->body = "body";
        dd($mContactForm);
//        var_dump($mContactForm);
    }
}