<?php

namespace common\models;

use Yii;
use yii\db\Query;

class Death {
    function DeathAll(){
        $sql="SELECT d.hn,d.cid,CONCAT(ps.pname,ps.fname,'  ',ps.lname)AS fullname ,dp.death_place_name,d.death_date 
                FROM death d 
                JOIN hos.patient ps ON ps.hn=d.hn
                JOIN hos.death_place dp ON dp.death_place_id=d.death_place"
                ;
        $result = \Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
        
    }
    
}

