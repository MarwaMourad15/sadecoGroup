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

    public function actionNewsletter(){
        if(isset($_POST['newsletter_email'])) {
            $newsletter_email = $_POST['newsletter_email'];
            $post=new Newsletter();
            $post->email=$newsletter_email;
            if($post->save()){
                $status = '1';
            }else{
                $status = '0';
            }
            Yii::$app->session->setFlash('status', $status);

        }
        return $this->redirect(Yii::$app->request->referrer);
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
        die('ad');
        var_dump(Yii::$app->user->identity);
        die;
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


    public function actionCheckout()
    {
        if(isset($_POST['contact_email'])){
            $contact_email = $_POST['contact_email'];
            $params['contact_email'] = $contact_email;
        }

        if(isset($_POST['deliver_method'])){
            $deliver_method = $_POST['deliver_method'];
            $params['delivery_method_id'] = $deliver_method;
        }

        if(isset($_POST['delivery_date'])){
            $delivery_date = $_POST['delivery_date'];
            $params['delivery_date'] = $delivery_date;
        }

        if(isset($_POST['billing_country'])){
            $billing_country = $_POST['billing_country'];
            $params['billing_country_id'] = $billing_country;
        }

        if(isset($_POST['billing_city'])){
            $billing_city = $_POST['billing_city'];
            $params['billing_city'] = $billing_city;
        }

        if(isset($_POST['billing_address'])){
            $billing_address = $_POST['billing_address'];
            $params['billing_address'] = $billing_address;
        }

        if(isset($_POST['shipping_country'])){
            $shipping_country = $_POST['shipping_country'];
            $params['shipping_country_id'] = $shipping_country;
        }

        if(isset($_POST['shipping_city'])){
            $shipping_city = $_POST['shipping_city'];
            $params['shipping_city'] = $shipping_city;
        }

        if(isset($_POST['shipping_address'])){
            $shipping_address = $_POST['shipping_address'];
            $params['shipping_address'] = $shipping_address;
        }

        if(isset($_POST['items'])){
            $items = $_POST['items'];
            $params['items'] = base64_decode($items);
            $rfq = User::CallCurl('create_rfq.php' , 'post',$params);
            if($rfq[0]['success'] == false){
                Yii::$app->session->setFlash('error', $rfq[0]['error']);
            }else{
                Yii::$app->session->setFlash('success', 'Thank you');
            }
        }


        $billing_countries = User::CallCurl('get_billing_countries.php' , 'get' , []);
        $shipping_countries = User::CallCurl('get_shipping_countries.php' , 'get' , []);
        $delivery_methods = User::CallCurl('get_delivery_mothods.php' , 'get' , []);



        return $this->render('checkout', ['delivery_methods'=> $delivery_methods,'billing_countries' => $billing_countries, 'shipping_countries' =>$shipping_countries]);
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
        $model = new UserFeedback();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (isset($_FILES['UserFeedback']['name']['attached_file'])) {
                $imageName = $_FILES['UserFeedback']['name']['attached_file'];
                $imageTmpName = $_FILES['UserFeedback']['tmp_name']['attached_file'];
                $path = '/uploads/attachment/';
                if(!empty($imageName)) {
                    $model->attached_file = $path . $imageName;
                    if ($model->save(false))
                        if (move_uploaded_file($imageTmpName, dirname(dirname(__DIR__)) . $path .$imageName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been Added successfully');
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'An Error Occurred while uploading image. Please try again!');
                        }
                }
            }
            $id = $model->id;
            $feedback = UserFeedback::findOne($id);
            $setting = Setting::findOne(1);
            $message = Yii::$app->mailer->compose();
            if ($feedback['email_used'] == 'SCS') {
                $email_send = $setting['email_scs'];
            } else if ($feedback['email_used'] == 'SAP'){
                $email_send = $setting['email_sap'];
            }
            $message->setFrom($feedback['email'])
                    ->setTo($email_send)
                    ->setSubject($feedback['message'])
                    ->setTextBody($feedback['message'])
                    ->attach($feedback['attached_file'])
                    ->send();
        }

        $page = Pages::findOne(3);
        return $this->render('contact-us', ['page'=>$page,'model' => $model,]);
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

        $search_option = User::CallCurl('get_downloads_search_options.php' , 'get' , []);
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
        $downloads = User::CallCurl('get_downloads.php' , 'post' , $params);

        //$downloads = json_decode($downloads_res , true);
        return $this->render('download', ['page'=>$page ,'search_option'=>$search_option
            , 'downloads'=>$downloads , 'keyword'=>$keyword , 'option_id'=>$option_id]);
    }

    public function actionTraining()
    {
        $page = Pages::findOne(6);
        $trainings = User::CallCurl('get_training.php' , 'get' , []);
        return $this->render('training', ['page'=>$page , 'trainings'=>$trainings]);
    }
    public function actionTrainingDetails()
    {
        $type = $_REQUEST['type'];
        $params['training_type'] = $type;
        $trainings = User::CallCurl('get_training_details.php' , 'post' , $params);
        return $this->render('training-detail', ['trainings'=>$trainings , 'type'=>$type]);
    }

    public function actionSign()
    {
        $error ='';
        $model = new User(['scenario' => 'sign-up']);
        $accounts = User::CallCurl('get_accounts.php' , 'get',[]);
        $countries = User::CallCurl('get_countries.php' , 'get',[]);
        $interests = User::CallCurl('get_interests.php' , 'get',[]);

        $model->status = User::STATUS_INACTIVE;
        $model->role = 'user';
        if ($model->load(Yii::$app->request->post()) && $model->validate())//
        {

            $params['first_name'] = $model->first_name;
            $params['last_name'] = $model->last_name;
            $params['name'] = $model->first_name.' '.$model->last_name;
            $params['mobile'] = $model->mobile;
            $params['office_phone'] = $model->office_phone;
            $params['fax'] = $model->fax;
            $params['email'] = $model->email;
            $params['account_id'] = $model->account_id;
            $params['other_account_name'] = $model->other_account_name;
            $params['account_website'] = $model->account_website;
            $params['title'] = $model->title;
            $params['interest_id'] = $model->interest_id;
            $params['mailing_country_id'] = $model->mailing_country_id;
            $params['mailing_city'] = $model->mailing_city;
            $params['mailing_address'] = $model->mailing_address;
            $params['signup_type'] = 1;
            $signup = User::CallCurl('signup.php' , 'post' , $params);
            if(isset($signup[0]['error']))
            {
                $error = $signup[0]['error'];
            }
            else
            {
                $model->save();
                Yii::$app->authManager->assign(Yii::$app->authManager->getRole($model->role), $model->id);
                $error='Thank you for Registration in our website.<br>We will contact you soon for activate your account.';
            }
        }

        return $this->render('sign', ['model'=>$model, 'accounts'=>$accounts , 'countries'=>$countries , 'interests'=>$interests , 'error'=>$error]);
    }

    public function actionSurvey()
    {
        $page = Pages::findOne(8);
        $survies = User::CallCurl('get_surveys.php' , 'get',[]);
        return $this->render('survey', ['survies' => $survies,'page' => $page]);
    }

    public function actionSurveyAfter()
    {
        $params['survey_id'] = $_GET['id'];
        $survies_form = User::CallCurl('get_survey_form.php' , 'post',$params);


        if(isset($_POST['name'])) {
            $visitor_name = $_POST['name'];
            $params['visitor_name'] = $visitor_name;
        }
        if(isset($_POST['email'])) {
            $visitor_email = $_POST['email'];
            $params['visitor_email'] = $visitor_email;
        }
        if(isset($_POST['company'])) {
            $visitor_company = $_POST['company'];
            $params['visitor_company'] = $visitor_company;
        }
        if(isset($_POST['title'])) {
            $visitor_title = $_POST['title'];
            $params['visitor_title'] = $visitor_title;
        }

        $survey_answers = array();
        if(isset($_POST['answers'])){
            foreach($_POST['answers_comment'] as $key => $value){
                $survey_c[$key] = $value;
            }

            foreach($_POST['answers'] as $key => $value){
                $survey_a[$key] = $value;
            }
            $count = count($survies_form);
            for($i=0 ; $i<$count ;$i++){
                $comment = '';
                if(isset($survey_c[$i]))
                    $comment = $survey_c[$i];

                if(isset($survey_a[$i]))
                    $answer = $survey_a[$i];


                $survey_answers[] = ['question_id'=>$i , 'answer' => $answer , 'Comment'=>$comment ];
            }
            $params['survey_answers'] = json_encode($survey_answers);
        }

        if(isset($_POST['survey_id'])) {
            $survey_id = $_POST['survey_id'];
            $params['survey_id'] = $survey_id;
            $params['contact_email'] = 'marwa_mourad_2011@yahoo.com';
            $survies = User::CallCurl('save_survey.php' , 'post',$params);
            if($survies[0]['success'] == false){
                Yii::$app->session->setFlash('error', $survies[0]['error']);
            }else{
                Yii::$app->session->setFlash('success', 'Thank you');
            }
        }



        return $this->render('survey-after', ['survies_form' => $survies_form,'survey_id' => $_GET['id'] ]);
    }

    public function actionSearch()
    {
        die($_POST['type']);
        return $this->render('search', []);
    }

    public function actionSearchDetail1()
    {
        return $this->render('search-detail1', []);
    }

    public function actionSearchDetail2()
    {
        return $this->render('search-detail2', []);
    }


}
