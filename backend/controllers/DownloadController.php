<?php

namespace backend\controllers;

use Yii;
use backend\models\Download;
use backend\models\DownloadSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DownloadController implements the CRUD actions for Download model.
 */
class DownloadController extends Controller
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
     * Lists all Download models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DownloadSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Download model.
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
     * Creates a new Download model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Download();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if (isset($_FILES['Download']['name']['image'])) {
                $imageName = $_FILES['Download']['name']['image'];
                $imageTmpName = $_FILES['Download']['tmp_name']['image'];
                $path = '/uploads/download/';
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

            if (isset($_FILES['Download']['name']['file'])) {
                $fileName = $_FILES['Download']['name']['file'];
                $fileTmpName = $_FILES['Download']['tmp_name']['file'];
                $path = '/uploads/download/';
                if (!empty($fileName)) {
                    $model->file = $path . $fileName;
                    if ($model->save(false))
                        if (move_uploaded_file($fileTmpName, dirname(dirname(__DIR__)) . $path . $fileName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been Added successfully');
                            //return json_encode((object)NULL);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'An Error Occurred while uploading file. Please try again!');
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
     * Updates an existing Download model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $oldImage = $model->image;
        $oldFile = $model->file;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if (($_FILES['Download']['name']['image']!='')) {

                $imageName = $_FILES['Download']['name']['image'];
                $imageTmpName = $_FILES['Download']['tmp_name']['image'];
                $path = '/uploads/download/';
                if(!empty($imageName)) {
                    $model->image = $path . $imageName;
                    if ($model->save(false))
                        if (move_uploaded_file($imageTmpName, dirname(dirname(__DIR__)) . $path .$imageName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been updated successfully');
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

            if (($_FILES['Download']['name']['file']!='')) {
                $fileName = $_FILES['Download']['name']['file'];
                $fileTmpName = $_FILES['Download']['tmp_name']['file'];
                $path = '/uploads/download/';
                if (!empty($fileName)) {
                    $model->file = $path . $fileName;
                    if ($model->save(false))
                        if (move_uploaded_file($fileTmpName, dirname(dirname(__DIR__)) . $path . $fileName)) {
                            Yii::$app->getSession()->setFlash('success', 'Item has been updated successfully');
                            //return json_encode((object)NULL);
                        } else {
                            Yii::$app->getSession()->setFlash('success', 'An Error Occurred while uploading file. Please try again!');
                            //return json_encode(['error' => 'An Error Occurred. Please try again!']);
                        }
                }
            }
            else
            {
                $model->file = $oldFile;
                $model->save(false);
            }

//die;
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Download model.
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
     * Finds the Download model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Download the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Download::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
