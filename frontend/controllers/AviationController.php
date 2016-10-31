<?php
/**
 * Created by PhpStorm.
 * User: marwa
 * Date: 22/09/16
 * Time: 01:26 م
 */
namespace frontend\controllers;

use backend\models\Aviation;
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
class AviationController extends Controller
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
        $id = 1;
        $model = $this->findModel($id);
        $params['service_type'] = 0;
        $services=[];
        $scopes = User::CallCurl('get_service_scopes.php' , 'post' , $params);
        if(isset($_POST['scope'])) {
            $params['scope'] = $_POST['scope'];
            $params['sub_scope'] = $_POST['sub_scope'];
            $services = User::CallCurl('get_services_by_scopes.php', 'post', $params);
        }
        return $this->render('services' , ['model'=>$model , 'scopes'=>$scopes, 'services'=>$services]);
    }

    public function actionServiceDetail($id)
    {
        //$params['crmid'] = $_REQUEST['id'];
        $params['crmid'] = $id;
        $services = User::CallCurl('get_service_by_crmid.php', 'post', $params);
        $service = $services[0];
        return $this->render('service-detail' , ['service'=>$service]);
    }

    public function actionProducts()
    {
        $id = 2;
        $model = $this->findModel($id);
        $categories = User::CallCurl('get_product_categories.php' , 'get' , []);
        $session = Yii::$app->session;
        $session['categories'] = $categories;

        /*echo '<pre>';
        print_r($categories);
        foreach ($categories as $category) {
            $category_vs_sub = $category['categories_vs_sub_categories'];
            print_r($category_vs_sub);
            foreach ($category_vs_sub as $one_cat) {
                //echo $one_cat['product_category'].'<br>';
                $subs = str_replace('"', "", $one_cat['product_sub_category']);
                $subs = explode(',',$subs);
                foreach ($subs as $one_sub) {
                    //echo '     '.$one_sub.'<br>';
                }
            }
        }die;*/
        return $this->render('products',['model'=>$model ]);
    }

    public function actionSubCategory()
    {
        if (Yii::$app->request->isAjax) {
            $list = '';
            $category = $_POST['category'];
            $session = Yii::$app->session;
            $categories = $session['categories'];
            foreach ($categories as $cat) {
                $category_vs_sub = $cat['categories_vs_sub_categories'];
                foreach ($category_vs_sub as $one_cat) {
                    if ($one_cat['product_category'] == $category) {
                        $subs = str_replace('"', "", $one_cat['product_sub_category']);
                        $subs = explode(',', $subs);
                        $list.='<option value=""></option>';
                        foreach ($subs as $one_sub) {
                            ///echo '     ' . $one_sub . '<br>';
                            $list .= '<option value="' . $one_sub . '">' . $one_sub . '</option>';
                        }
                    } else {

                    }
                }
            }

            return $list;
        }
    }

    public function actionProductTitle()
    {
        if (Yii::$app->request->isAjax) {
            $list = '';
            $sub_category= $_POST['sub_category'];
            $session = Yii::$app->session;
            $categories = $session['categories'];
            foreach ($categories as $cat) {
                $category_vs_sub = $cat['sub_categories_vs_product_titles'];
                foreach ($category_vs_sub as $one_cat) {
                    if ($one_cat['product_sub_category'] == $sub_category) {
                        $subs = str_replace('"', "", $one_cat['product_title']);
                        $subs = explode(',', $subs);
                        $list.='<option value=""></option>';
                        foreach ($subs as $one_sub) {
                            ///echo '     ' . $one_sub . '<br>';
                            $list .= '<option value="' . $one_sub . '">' . $one_sub . '</option>';
                        }
                    } else {

                    }
                }
            }

            return $list;
        }
    }
    public function actionGetProducts()
    {
        if (Yii::$app->request->isAjax) {
            $list = '';
            $category= $_POST['category'];
            $sub_category= $_POST['sub_category'];
            $product_title= $_POST['product_title'];
            $params['category'] = $category;
            $params['sub_category'] = $sub_category;
            $params['product_title'] = $product_title;
            $products = User::CallCurl('get_product_bundles_by_category_title.php', 'post', $params);

            //print_r($products);
            //die;
            return $this->renderPartial('ajax-products',['products'=>$products , ]);
        }
    }


    public function actionSelectionGuide()
    {
        $id = 3;
        $model = $this->findModel($id);
        return $this->render('selection-guide',['model'=>$model , ]);
    }

    public function actionCrossReference()
    {
        $id = 4;
        $model = $this->findModel($id);
        if(isset($_POST['id'])) {
            $competitor_partno = $_POST['id'];
            $params['competitor_partno'] = $competitor_partno;
            $products = User::CallCurl('get_cross_reference_search_results.php', 'post', $params);
            $product_id = $_POST['id'];
        }else{
            $product_id = '';
            $products = NULL;
        }

        return $this->render('cross-reference',['model'=>$model ,'products'=> $products,'product_id'=> $product_id]);
    }

    public function actionSurveys()
    {
        $id = 5;
        $model = $this->findModel($id);
        return $this->render('surveys',['model'=>$model , ]);
    }

    public function actionOnlinePurchasingSolution()
    {
        $id = 6;
        $model = $this->findModel($id);
        return $this->render('online-purchasing-solution',['model'=>$model , ]);
    }

    protected function findModel($id)
    {
        if (($model = Aviation::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
