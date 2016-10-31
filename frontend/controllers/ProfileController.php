<?php
namespace frontend\controllers;

use backend\models\About;
use backend\models\Calibration;
use backend\models\HomeSlider;
use backend\models\LibCatalouge;
use backend\models\Library;
use backend\models\NewsEvent;
use backend\models\Newsletter;
use backend\models\Pages;
use backend\models\Partner;
use backend\models\Setting;
use backend\models\User;
use backend\models\UserFeedback;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\swiftmailer\Mailer;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use linslin\yii2\curl;
/**
 * Site controller
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCertificate()
    {
        $param['contact_email'] = 'marwa_mourad_2011@yahoo.com';
        $certificates_result = User::CallCurl('get_certificates.php' , 'post' , $param);
        $certificates = $certificates_result['0']['result'];
        return $this->render('certificate' , ['certificates'=>$certificates]);
    }

    public function actionAlerts()
    {
        $param['contact_email'] = 'marwa_mourad_2011@yahoo.com';
        $alarms_result = User::CallCurl('get_alarms.php' , 'post' , $param);
        $alarms = $alarms_result['0']['result'];
        return $this->render('alerts' , ['alarms'=>$alarms]);
    }

    public function actionOpenrfq()
    {
        $param['contact_email'] = 'marwa_mourad_2011@yahoo.com';
        $openRFQ_result = User::CallCurl('get_open_rfq_balance.php' , 'post' , $param);
        $openRFQ = $openRFQ_result['0']['result'];
        return $this->render('openrfq' , ['openrfq' => $openRFQ]);
    }

    public function actionRfq()
    {
        $param['contact_email'] = 'marwa_mourad_2011@yahoo.com';
        $getRFQ = User::CallCurl('get_rfq.php' , 'post' , $param);
        $rfq = $getRFQ['0']['result'];
        return $this->render('rfq' , ['rfq' => $rfq]);
    }





}
