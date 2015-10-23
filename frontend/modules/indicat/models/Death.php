<?php

namespace frontend\modules\indicat\models;
use Yii;
class Death extends \yii\db\ActiveRecord {
   public function DeathAll(){
      
     $sql="SELECT d.*, CONCAT(pt.pname,pt.fname,' ',pt.lname)AS fullname"
                . " FROM death d "
                . "JOIN hos.patient pt ON pt.hn=d.hn  
     ORDER BY d.death_date ";
   
        $result = Yii::$app->db->createCommand($sql)
                ->queryAll();
        return $result;
    }     
}