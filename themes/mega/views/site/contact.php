<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= Html::encode($this->title) ?></h2>
                <p>If you have business inquiries or other questions, please fill out the following form to contact us. Thank you</p>
            </div>
        </div>
    </div>
</div>

<div class="mg-page">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <h2 class="mg-sec-left-title">Send an E-mail</h2>
                <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    <div class="alert alert-success">
                        Thank you for contacting us. We will respond to you as soon as possible.
                    </div>

                <?php endif; ?>
                <?php $form = ActiveForm::begin(['id' => 'contact-form','options'=>['class'=>'clearfix']]); ?>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true,'class'=>'form-control','id'=>'full-name']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'email')->input('email',['class'=>'form-control', 'id'=>'email']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'subject')->textInput(['class'=>'form-control','id'=>'subject']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'body')->textarea(['class'=>'form-control', 'id'=>'message','rows'=>5]) ?>
                    </div><div class="mg-contact-form-input">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(),['options'=>['class'=>'form-control']]) ?>
                    </div>
                    <input type="submit" class="btn btn-dark-main pull-right" value="Send">
                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-md-7">
                <h2 class="mg-sec-left-title">Office Address</h2>
                <p>Come by our office, open every Monday - Saturday at 08:00 till 17:00</p>
                <ul class="mg-contact-info">
                    <li><i class="fa fa-map-marker"></i> Jl. Jendral Ahmad Yani Kav. 67 Cempaka Putih </li>
                    <li><i class="fa fa-phone"></i> +6221 21473999 </li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:#"> marketing@dailyinn.id</a></li>
                </ul>
                <div id="mg-map" class="mg-map"></div>
            </div>
        </div>
    </div>
</div>