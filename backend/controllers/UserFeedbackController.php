<?php

namespace backend\controllers;

use Yii;
use backend\models\UserFeedback;
use backend\models\UserFeedbackSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserFeedbackController implements the CRUD actions for UserFeedback model.
 */
class UserFeedbackController extends Controller
{
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
        ];
    }

    /**
     * Lists all UserFeedback models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserFeedbackSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserFeedback model.
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
     * Creates a new UserFeedback model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
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
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserFeedback model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

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
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing UserFeedback model.
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
     * Finds the UserFeedback model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserFeedback the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserFeedback::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
