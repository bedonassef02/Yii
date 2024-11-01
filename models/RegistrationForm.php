<?php
namespace app\models;
use Yii;
use yii\base\Model;
class RegistrationForm extends Model {
    public $username;
    public $password;
    public $email;
    public $subscriptions;
    public $photos;
    /**
     * @return array customized attribute labels
     */
    public function attributeLabels() {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'subscriptions' => 'Subscriptions',
            'photos' => 'Photos',
        ];
    }

    public function rules() {
        return [
            // the username, password, email, country, city, and phone attributes are required
            [['password', 'email', 'country', 'city', 'phone'], 'required'],
            ['username', 'required', 'message' => 'Username is required'],
            ['country', 'trim'],
            ['city', 'default'],
            // the email attribute should be a valid email address
            ['email', 'email'],
            ['city', 'default', 'value' => 'Paris'],
        ];
    }
}
?>