<?php

namespace common\models;

use Yii;



class Patient extends \yii\db\ActiveRecord
{
   
     
    public static function tableName()
    {
        return 'patient';
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
            [['hos_guid'], 'required'],
            [['birthday', 'deathday', 'firstday', 'last_update', 'birthtime', 'last_visit', 'reg_time'], 'safe'],
            [['familyno', 'hn_int', 'hid', 'height', 'patient_type_id', 'hospital_department_id', 'ec_relation_type_id'], 'integer'],
            [['hos_guid'], 'string', 'max' => 38],
            [['hn', 'mother_hn', 'father_hn'], 'string', 'max' => 9],
            [['pname', 'membercard_no'], 'string', 'max' => 15],
            [['fname', 'lname', 'fatherlname', 'motherlname', 'spslname'], 'string', 'max' => 30],
            [['occupation'], 'string', 'max' => 4],
            [['citizenship', 'moopart', 'nationality'], 'string', 'max' => 3],
            [['addrpart', 'fathername', 'informname', 'informrelation', 'mathername', 'opdlocation', 'spsname', 'workaddr', 'road', 'email', 'oldcode', 'fname_soundex', 'lname_soundex', 'ec_fname', 'ec_lname'], 'string', 'max' => 50],
            [['tmbpart', 'amppart', 'chwpart', 'pttype', 'religion', 'person_type', 'death_code504', 'country', 'lang'], 'string', 'max' => 2],
            [['bloodgrp', 'hometel', 'informtel', 'worktel', 'mobile_phone_number'], 'string', 'max' => 20],
            [['clinic', 'addr_soi', 'alias_name'], 'string', 'max' => 100],
            [['drugallergy', 'old_addr'], 'string', 'max' => 250],
            [['informaddr'], 'string', 'max' => 200],
            [['marrystatus', 'sex', 'truebirthday', 'educate', 'family_status', 'labor_type', 'type_area', 'legal_action', 'node_id', 'admit', 'death', 'inregion', 'in_cups', 'destroyed', 'anonymous_person'], 'string', 'max' => 1],
            [['hcode', 'po_code', 'bloodgroup_rh'], 'string', 'max' => 5],
            [['cid', 'father_cid', 'mother_cid', 'couple_cid'], 'string', 'max' => 13],
            [['private_doctor_name'], 'string', 'max' => 75],
            [['death_diag', 'addressid'], 'string', 'max' => 6],
            [['midname', 'passport_no'], 'string', 'max' => 25],
            [['gov_chronic_id'], 'string', 'max' => 10],
            [['work_addr'], 'string', 'max' => 230],
            [['hn'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hos_guid' => 'Hos Guid',
            'hn' => 'Hn',
            'pname' => 'Pname',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'occupation' => 'Occupation',
            'citizenship' => 'Citizenship',
            'birthday' => 'Birthday',
            'addrpart' => 'Addrpart',
            'moopart' => 'Moopart',
            'tmbpart' => 'Tmbpart',
            'amppart' => 'Amppart',
            'chwpart' => 'Chwpart',
            'bloodgrp' => 'Bloodgrp',
            'clinic' => 'Clinic',
            'deathday' => 'Deathday',
            'drugallergy' => 'Drugallergy',
            'familyno' => 'Familyno',
            'fathername' => 'Fathername',
            'firstday' => 'Firstday',
            'hometel' => 'Hometel',
            'informaddr' => 'Informaddr',
            'informname' => 'Informname',
            'informrelation' => 'Informrelation',
            'informtel' => 'Informtel',
            'marrystatus' => 'Marrystatus',
            'mathername' => 'Mathername',
            'hn_int' => 'Hn Int',
            'nationality' => 'Nationality',
            'opdlocation' => 'Opdlocation',
            'pttype' => 'Pttype',
            'religion' => 'Religion',
            'sex' => 'Sex',
            'spsname' => 'Spsname',
            'truebirthday' => 'Truebirthday',
            'workaddr' => 'Workaddr',
            'worktel' => 'Worktel',
            'hcode' => 'Hcode',
            'cid' => 'Cid',
            'hid' => 'Hid',
            'educate' => 'Educate',
            'family_status' => 'Family Status',
            'labor_type' => 'Labor Type',
            'last_update' => 'Last Update',
            'type_area' => 'Type Area',
            'road' => 'Road',
            'father_cid' => 'Father Cid',
            'mother_cid' => 'Mother Cid',
            'couple_cid' => 'Couple Cid',
            'person_type' => 'Person Type',
            'private_doctor_name' => 'Private Doctor Name',
            'legal_action' => 'Legal Action',
            'death_code504' => 'Death Code504',
            'death_diag' => 'Death Diag',
            'node_id' => 'Node ID',
            'admit' => 'Admit',
            'midname' => 'Midname',
            'po_code' => 'Po Code',
            'fatherlname' => 'Fatherlname',
            'motherlname' => 'Motherlname',
            'spslname' => 'Spslname',
            'country' => 'Country',
            'email' => 'Email',
            'birthtime' => 'Birthtime',
            'mother_hn' => 'Mother Hn',
            'last_visit' => 'Last Visit',
            'death' => 'Death',
            'height' => 'Height',
            'inregion' => 'Inregion',
            'reg_time' => 'Reg Time',
            'oldcode' => 'Oldcode',
            'lang' => 'Lang',
            'gov_chronic_id' => 'Gov Chronic ID',
            'in_cups' => 'In Cups',
            'patient_type_id' => 'Patient Type ID',
            'addr_soi' => 'Addr Soi',
            'work_addr' => 'Work Addr',
            'father_hn' => 'Father Hn',
            'alias_name' => 'Alias Name',
            'destroyed' => 'Destroyed',
            'old_addr' => 'Old Addr',
            'fname_soundex' => 'Fname Soundex',
            'lname_soundex' => 'Lname Soundex',
            'bloodgroup_rh' => 'Bloodgroup Rh',
            'passport_no' => 'Passport No',
            'addressid' => 'Addressid',
            'mobile_phone_number' => 'Mobile Phone Number',
            'anonymous_person' => 'Anonymous Person',
            'ec_fname' => 'Ec Fname',
            'ec_lname' => 'Ec Lname',
            'hospital_department_id' => 'Hospital Department ID',
            'membercard_no' => 'Membercard No',
            'ec_relation_type_id' => 'Ec Relation Type ID',
        ];
    }
}
