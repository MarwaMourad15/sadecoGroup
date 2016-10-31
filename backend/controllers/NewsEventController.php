<?php

namespace backend\controllers;

use Yii;
use backend\models\NewsEvent;
use backend\models\NewsEventSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsEventController implements the CRUD actions for NewsEvent model.
 */
class NewsEventController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }

    /**
     * Lists all NewsEvent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsEventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single NewsEvent model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new NewsEvent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new NewsEvent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (isset($_FILES['NewsEvent']['name']['image'])) {
                $imageName = $_FILES['NewsEvent']['name']['image'];
                $imageTmpName = $_FILES['NewsEvent']['tmp_name']['image'];
                $path = '/uploads/events/';
                if(!empty($imageName)) {
                    $model->image = $path . $imageName;
                    if ($model->save(false))
                        if (move_uploaded_file($imageTmpName, dirname(dirname(__DIR__)) . $path .$imageName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been Added successfully');
                            //return json_encode((object)NULL);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'An Error Occurred while uploading image. Please try again!');
                            //return json_encode(['error' => 'An Error Occurred. Please try again!']);
                        }
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing NewsEvent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($_FILES['NewsEvent']['name']['image']!='') {
                $imageName = $_FILES['NewsEvent']['name']['image'];
                $imageTmpName = $_FILES['NewsEvent']['tmp_name']['image'];
                $path = '/uploads/events/';
                if(!empty($imageName)) {
                    $model->image = $path . $imageName;
                    if ($model->save(false))
                        if (move_uploaded_file($imageTmpName, dirname(dirname(__DIR__)) . $path .$imageName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been Updated successfully');
                            //return json_encode((object)NULL);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'An Error Occurred while uploading image. Please try again!');
                            //return json_encode(['error' => 'An Error Occurred. Please try again!']);
                        }
                }
            }
            else
            {
                $model->image = $oldImage;
                $model->save(false);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing NewsEvent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the NewsEvent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return NewsEvent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = NewsEvent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
