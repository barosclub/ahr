<?php

namespace frontend\modules\indicat\controllers;

use Yii;
use frontend\modules\indicat\models\Death;
use common\models\Death_hosxp;
use frontend\modules\indicat\models\DeathSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\modules\indicat\models\Death_hosxpSearch;

/**
 * DeathController implements the CRUD actions for Death model.
 */
class DeathController extends Controller
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
        ];
    }

    /**
     * Lists all Death models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DeathSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
 public function actionDeathhosxp()
    {
        $searchModel = new Death_hosxpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('deathhosxp', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Death model.
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
     * Creates a new Death model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Death();
 $hosxp = new Death();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->death_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'hosxp'=> $hosxp,
            ]);
        }
    }

    /**
     * Updates an existing Death model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {  
 
 $model = new death();

 $hosxp = $this->findModelhosxp($id);
        if ($hosxp->load(Yii::$app->request->post())
             && $model->load(Yii::$app->request->post()   )) {
      
     //  $hosxp = new death();
              $model->death_id=$hosxp->death_id;
              
            $model->save();
     
        return $this->redirect(['view', 'id' => $model->death_id]);    
        
        }else {  
  //$hosxp= new Death();
 
  // $hosxp= $this->findModelhosxp($id);
            return $this->render('update', [
                'model' => $model,
                'hosxp' => $hosxp,
            ]);
        }
    }
    

    /**
     * Deletes an existing Death model.
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
     * Finds the Death model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Death the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
      
         if (($model = Death::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function findModelhosxp($id)
    {
        if (($model = Death_hosxp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
