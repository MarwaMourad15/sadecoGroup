<?php

namespace backend\controllers;

use Yii;
use backend\models\Library;
use backend\models\LibrarySearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LibraryController implements the CRUD actions for Library model.
 */
class LibraryController extends Controller
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
     * Lists all Library models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LibrarySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Library model.
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
     * Creates a new Library model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Library();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if (isset($_FILES['Library']['name']['image'])) {
                $imageName = $_FILES['Library']['name']['image'];
                $imageTmpName = $_FILES['Library']['tmp_name']['image'];
                $path = '/uploads/library/';
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
     * Updates an existing Library model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImage = $model->image;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if ($_FILES['Library']['name']['image']!='') {
                $imageName = $_FILES['Library']['name']['image'];
                $imageTmpName = $_FILES['Library']['tmp_name']['image'];
                $path = '/uploads/library/';
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
     * Deletes an existing Library model.
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
     * Finds the Library model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Library the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Library::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
