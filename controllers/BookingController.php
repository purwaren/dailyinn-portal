<?php
/**
 * Created by PhpStorm.
 * User: purwaren
 * Date: 11/8/17
 * Time: 7:31 PM
 */

namespace app\controllers;


use app\models\CreateBookingForm;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use Yii;

class BookingController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
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

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['captcha', 'create'],
                        'allow' => true,
                    ]
                ]
            ]
        ];
    }

    public function actionCreate($checkin, $checkout, $room, $qty)
    {
        $model = new CreateBookingForm();
        $model->checkin = $checkin;
        $model->checkout = $checkout;
        $model->room = $room;
        $model->qty = $qty;

        if($model->load(Yii::$app->request->post()) && $model->save())
        {

            Yii::$app->session->setFlash('Success', 'Your reservation has been forwarded to our front office staff. We will contact you shortly');
        }

        return $this->render('create',[
            'model'=>$model
        ]);
    }
}