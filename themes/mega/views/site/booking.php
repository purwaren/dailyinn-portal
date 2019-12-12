<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\CreateBookingForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Create Booking';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mg-page-title parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?= Html::encode($this->title) ?></h2>
                <p>Please provide your contact information. Our staff will contact you shortly</p>
            </div>
        </div>
    </div>
</div>

<div class="mg-page">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <h2 class="mg-sec-left-title">Create Reservation</h2>
                <?php if (Yii::$app->session->hasFlash('success')) { ?>

                    <div class="alert alert-success">
                        <?= Yii::$app->session->getFlash('success') ?>
                    </div>
                <?php } elseif (isset($_GET['book'])) { ?>
                <div class="alert alert-info">
                    Check In: <?= $model->checkin ?><br />Check Out: <?= $model->checkout?><br />
                    <?= $model->room ?> : <?= $model->qty ?>
                </div>
                <?php } ?>
                <?php $form = ActiveForm::begin(['id' => 'booking-form','options'=>['class'=>'clearfix']]); ?>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true,'class'=>'form-control','id'=>'name']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'email')->input('email',['class'=>'form-control', 'id'=>'email']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'phone')->textInput(['class'=>'form-control','id'=>'phone']) ?>
                    </div>
                    <div class="mg-contact-form-input">
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(),[ 'options'=>['class'=>'form-control']]) ?>
                    </div>
                    <input type="submit" class="btn btn-dark-main pull-right" value="Submit">
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