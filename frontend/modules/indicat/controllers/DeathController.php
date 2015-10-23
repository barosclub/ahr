<?php

namespace frontend\modules\indicat\controllers;

//use yii;
use yii\web\Controller;
use frontend\modules\indicat\models\Death;
use yii\data\ArrayDataProvider;

Class DeathController extends Controller {

    public function actionIndex() {
        $pdall = new Death();
        $death = $pdall->DeathAll();

        $provider = new ArrayDataProvider([

            'allModels' => $death,
            'sort' => [
                'attributes' => [ 'hn', 'an', 'death_date'],
            ],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);
        $data['provider'] = $provider;
        return $this->render('index',$data );
    }

    public function actionReport() {
        $sql = "select year(d.death_date) AS 'ปี',

 SUM( CASE
       WHEN month(d.death_date) = 1 THEN 1 ELSE 0 end)as 'มกราคม',
 SUM( CASE
       WHEN month(d.death_date) = 2 THEN 1
        ELSE 0
end)
as 'กุมภาพันธ์',
SUM( CASE
       WHEN month(d.death_date) = 3 THEN 1
        ELSE 0
end)
as 'มีนาคม',
SUM( CASE
       WHEN month(d.death_date) = 4 THEN 1
        ELSE 0
end)
as 'เมษายน',

 SUM( CASE
       WHEN month(d.death_date) = 5 THEN 1
        ELSE 0
end)
as 'พฤษภาคม',

SUM( CASE
       WHEN month(d.death_date) = 6 THEN 1
        ELSE 0
end)
as 'มิถุนายน',

 SUM( CASE
       WHEN month(d.death_date) = 7 THEN 1
        ELSE 0
end)
as 'กรกฎาคม',

SUM( CASE
       WHEN month(d.death_date) = 8 THEN 1
        ELSE 0
end)
as 'สิงหาคม',

SUM( CASE
       WHEN month(d.death_date) = 9 THEN 1
        ELSE 0
end)
as 'กันยายน',

 SUM( CASE
       WHEN month(d.death_date) = 10  THEN 1
        ELSE 0
end)
as 'ตุลาคม',

SUM( CASE
       WHEN month(d.death_date) = 11 THEN 1
        ELSE 0
end)
as 'พฤศจิกายน',

SUM( CASE
       WHEN month(d.death_date) = 12 THEN 1
        ELSE 0
end)
as 'ธันวาคม'

from death d
where year(d.death_date) between '2011' and '2015' AND d.death_place in(0,1,2)
group by year(d.death_date)";
        $result = Yii::$app->db2->createCommand($sql)
                ->queryAll();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $result,
            'pagination' => FALSE,
        ]);
        //print_r($result);
        return $this->render('report', [
                    'dataProvider' => $dataProvider
        ]);
    }

}
