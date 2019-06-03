<?php

namespace app\controllers;

use Yii;
use app\models\CreateEvent;
use app\models\SearchCreateEvent;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Assistant;

/**
 * CreateEventController implements the CRUD actions for CreateEvent model.
 */
class CreateEventController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all CreateEvent models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchCreateEvent();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CreateEvent model.
     * @param integer $event_id
     * @param integer $assistant_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($event_id, $assistant_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($event_id, $assistant_id),
        ]);
    }

    /**
     * Creates a new CreateEvent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CreateEvent();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'event_id' => $model->event_id, 'assistant_id' => $model->assistant_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CreateEvent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $event_id
     * @param integer $assistant_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($event_id, $assistant_id)
    {
        $model = $this->findModel($event_id, $assistant_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'event_id' => $model->event_id, 'assistant_id' => $model->assistant_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CreateEvent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $event_id
     * @param integer $assistant_id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($event_id, $assistant_id)
    {
        $this->findModel($event_id, $assistant_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CreateEvent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $event_id
     * @param integer $assistant_id
     * @return CreateEvent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($event_id, $assistant_id)
    {
        if (($model = CreateEvent::findOne(['event_id' => $event_id, 'assistant_id' => $assistant_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
