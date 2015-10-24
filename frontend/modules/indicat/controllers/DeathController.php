<?php

namespace frontend\modules\indicat\controllers;

use yii;
use common\models\Death;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class DeathController extends Controller {

    public function actionIndex() {
        $death = new Death();
        $showdeath = $death->DeathAll();
      $provider = new ArrayDataProvider([
    'allModels' => $showdeath,
    'sort' => [
        'attributes' => ['hn'],
    ],
    'pagination' => [
        'pageSize' => 20,
    ],
]);
      $data['provider']=$provider;
return $this->render('index',$data);
    }

   
}
