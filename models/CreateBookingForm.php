<?php

namespace app\models;

use yii\base\Model;
use Yii;

class CreateBookingForm extends Model
{
    public $checkin;
    public $checkout;
    public $room;
    public $qty;
    public $name;
    public $email;
    public $phone;
    public $verifyCode;

    public function rules()
    {
        return [
            [['checkin','checkout','room','qty','name','email','phone'],'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone Number'
        ];
    }

    public function save()
    {
        if ($this->validate())
        {
            $adminEmail = Yii::$app->params['orderEmail'];
            if ($this->validate()) {
                Yii::$app->mailer->compose('reservation',['model'=>$this])
                    ->setTo($adminEmail)
                    ->setFrom([Yii::$app->params['notifyEmail'] => $this->email.' ('.$this->name.') '])
                    ->setSubject("Reservation Via Web - ".date('d/m/Y'))
                    ->send();

                return true;
            }
            return false;
        }
    }
}