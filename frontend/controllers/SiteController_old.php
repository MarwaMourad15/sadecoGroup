<?php
namespace frontend\controllers;

use backend\models\About;
use backend\models\Calibration;
use backend\models\HomeSlider;
use backend\models\LibCatalouge;
use backend\models\Library;
use backend\models\NewsEvent;
use backend\models\Pages;
use backend\models\Partner;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use linslin\yii2\curl;
/**
 * Site controller
 */
class SiteController extends Controller
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
        $slider = HomeSlider::find()->orderBy('id ASC')->all();
        $home_brief = Pages::findOne(1);
        $partner = Partner::find()->orderBy('id ASC')->all();

        return $this->render('index' , ['slider'=>$slider , 'home_brief'=>$home_brief , 'partner'=>$partner]);

    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout($id)
    {
        $about = About::findOne($id);
        return $this->render('about' , ['about'=>$about]);
    }

    public function actionCalibration($id)
    {
        $calibration = Calibration::findOne($id);
        return $this->render('calibration', ['calibration'=>$calibration]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionCart()
    {
        return $this->render('cart', []);
    }

    public function actionNewsEvents()
    {
        $news = NewsEvent::find()->orderBy('id ASC')->all();
        return $this->render('news-events', ['news'=>$news]);
    }

    public function actionEventDetails($id)
    {
        $model = NewsEvent::findOne($id);
        return $this->render('news-details', ['model'=>$model]);
    }


    public function actionContactUs()
    {
        return $this->render('contact-us', []);
    }

    public function actionLibrary()
    {
        $keyword = '' ;
        $category_id = 0 ;
        $extra_sql = 'WHERE 1=1 ';
        if(isset($_POST['keyword']))
        {
            $keyword = $_POST['keyword'];
            $addCondition = '';
            $extra_sql.= ' AND ( lower(`title`) like \'%' . strtolower($keyword) . '%\' OR lower(`description`) like \'%' . strtolower($keyword) . '%\'  ) ';
        }

        if(isset($_POST['category_id']))
        {
            $category_id = $_POST['category_id'];
            if($category_id!=0)
                $extra_sql.=' AND `catalouge_id` = \''.$category_id.'\' ';
        }
        $page = Pages::findOne(4);
        $categories = LibCatalouge::find()->orderBy('id ASC')->all();

        /*$libraries = Library::find()
            ->andWhere(['catalouge_id'=> $category])
            ->andWhere(['like', 'title', $keyword])
            ->andWhere(['like', 'description', $keyword])
            ->orderBy('id ASC')
            ->all();*/
        $libraries = Library::findBySql('SELECT * FROM `library`  '.$extra_sql.' ORDER BY id ASC ')->all();
        return $this->render('library', ['page'=>$page , 'categories'=>$categories
            , 'libraries'=>$libraries , 'keyword'=>$keyword , 'category_id'=>$category_id]);
    }

    public function actionDownload()
    {
        $page = Pages::findOne(5);

        $search_option = $this->CallCurl('get_downloads_search_options.php' , 'get' , []);
        //$search_option = $curl->get('http://sadecogroup.net/crm/api/get_downloads_search_options.php');
        $params = [];
        $keyword = '' ;
        $option_id = 0 ;
        if(isset($_POST['keyword']))
        {
            $keyword = $_POST['keyword'];
            $params['keyword'] = $keyword;
        }
        if(isset($_POST['option_id']))
        {
            $option_id = $_POST['option_id'];
            $params['document_type'] = $option_id;
        }
        $downloads = $this->CallCurl('get_downloads.php' , 'post' , $params);

        //$downloads = json_decode($downloads_res , true);
        return $this->render('download', ['page'=>$page ,'search_option'=>$search_option
            , 'downloads'=>$downloads , 'keyword'=>$keyword , 'option_id'=>$option_id]);
    }

    public function actionTraining()
    {
        return $this->render('training', []);
    }

    public function actionSurvey()
    {
        return $this->render('survey', []);
    }


    protected function CallCurl($url , $method , $params)
    {
        $curl = new curl\Curl();
        if($method=='get') {
            $response = $curl->get('http://sadecogroup.net/crm/api/' . $url);
        }
        if($method=='post') {
            $response = $curl->setOption(
                CURLOPT_POSTFIELDS,
                http_build_query($params))
                ->post('http://sadecogroup.net/crm/api/' . $url);
        }

        return json_decode($response , true);
    }


}
