<?php

namespace common\models;

use Yii;


 
class Death_hosxp extends \yii\db\ActiveRecord
{  
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'death';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db2');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['death_id'], 'required'],
            [['death_id', 'wpreg', 'death_cert_id', 'death_source', 'newborn_death_cause_id'], 'integer'],
            [['death_date', 'last_update', 'death_time', 'death_diag_date_1', 'death_diag_date_2', 'death_diag_date_3', 'death_diag_date_4', 'death_cert_date', 'update_datetime'], 'safe'],
            [['hn', 'an'], 'string', 'max' => 9],
            [['cid'], 'string', 'max' => 17],
            [['hcode', 'death_hospcode'], 'string', 'max' => 5],
            [['death_diag_1', 'death_diag_2', 'death_diag_3', 'death_diag_4', 'death_diag_other', 'death_cause'], 'string', 'max' => 6],
            [['death_place', 'nopreg', 'autopsy_perform', 'no_detail', 'death_preg_42_day'], 'string', 'max' => 1],
            [['last_pttype'], 'string', 'max' => 2],
            [['odisease', 'death_cert_doctor'], 'string', 'max' => 7],
            [['death_cause_text'], 'string', 'max' => 250],
            [['death_number'], 'string', 'max' => 25],
            [['hos_guid'], 'string', 'max' => 38],
            [['staff'], 'string', 'max' => 50],
            
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'death_id' => 'Death ID',
            'hn' => 'Hn',
            'cid' => 'Cid',
            'hcode' => 'Hcode',
            'death_date' => 'Death Date',
            'death_diag_1' => 'Death Diag 1',
            'death_diag_2' => 'Death Diag 2',
            'death_diag_3' => 'Death Diag 3',
            'death_diag_4' => 'Death Diag 4',
            'death_diag_other' => 'Death Diag Other',
            'death_cause' => 'Death Cause',
            'death_place' => 'Death Place',
            'last_update' => 'Last Update',
            'last_pttype' => 'Last Pttype',
            'an' => 'An',
            'nopreg' => 'Nopreg',
            'wpreg' => 'Wpreg',
            'odisease' => 'Odisease',
            'death_time' => 'Death Time',
            'death_diag_date_1' => 'Death Diag Date 1',
            'death_diag_date_2' => 'Death Diag Date 2',
            'death_diag_date_3' => 'Death Diag Date 3',
            'death_diag_date_4' => 'Death Diag Date 4',
            'death_cause_text' => 'Death Cause Text',
            'death_cert_id' => 'Death Cert ID',
            'death_cert_date' => 'Death Cert Date',
            'death_cert_doctor' => 'Death Cert Doctor',
            'death_source' => 'Death Source',
            'death_number' => 'Death Number',
            'newborn_death_cause_id' => 'Newborn Death Cause ID',
            'hos_guid' => 'Hos Guid',
            'autopsy_perform' => 'Autopsy Perform',
            'no_detail' => 'No Detail',
            'death_hospcode' => 'Death Hospcode',
            'death_preg_42_day' => 'Death Preg 42 Day',
            'update_datetime' => 'Update Datetime',
            'staff' => 'Staff',
            
        ];
    }
    public function getPatients(){
        return $this->hasOne(\common\models\Patient::className(), ['hn'=>'hn']);
    }
}
