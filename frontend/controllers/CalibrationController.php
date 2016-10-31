<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 01:26 م
 */
namespace frontend\controllers;

use backend\models\Pages;
use common\models\User;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class CalibrationController extends Controller
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

    public function actionServices()
    {
        $brief = Pages::findOne(7);
        $params['service_type'] = 1;
        $services=[];
        $scopes = User::CallCurl('get_service_scopes.php' , 'post' , $params);
        if(isset($_POST['scope']) ) {
            $params['scope'] = $_POST['scope'];
            $params['sub_scope'] = $_POST['sub_scope'];
            $services = User::CallCurl('get_services_by_scopes.php', 'post', $params);
        }
        return $this->render('services' , ['brief'=>$brief , 'scopes'=>$scopes, 'services'=>$services]);
    }

    public function actionServiceDetail($id)
    {
        //$params['crmid'] = $_REQUEST['id'];
        $params['crmid'] = $id;
        $services = User::CallCurl('get_service_by_crmid.php', 'post', $params);
        $service = $services[0];
        return $this->render('service-detail' , ['service'=>$service]);
    }
}
