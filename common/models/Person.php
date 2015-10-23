<?php

namespace common\models;

use Yii;


class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
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
            [['person_id'], 'required'],
            [['person_id', 'house_id', 'house_regist_type_id', 'village_id', 'current_age', 'income_per_year', 'home_position_id', 'family_position_id', 'father_person_id', 'mother_person_id', 'sps_person_id', 'age_y', 'age_m', 'age_d', 'family_id', 'person_house_position_id', 'couple_person_id', 'person_discharge_id', 'person_labor_type_id', 'ncd_dm_history_type_id', 'ncd_ht_history_type_id', 'agriculture_member_type_id', 'nutrition_level', 'height_nutrition_level', 'bw_ht_nutrition_level', 'person_dm_screen_status_id', 'person_ht_screen_status_id', 'person_stroke_screen_status_id', 'person_obesity_screen_status_id', 'person_dmht_manage_type_id', 'last_screen_dmht_bdg_year'], 'integer'],
            [['birthdate', 'death_date', 'last_update', 'pttype_begin_date', 'pttype_expire_date', 'birthtime', 'last_update_pttype', 'movein_date', 'discharge_date'], 'safe'],
            [['body_weight_kg', 'height_cm'], 'number'],
            [['cid', 'father_cid', 'mother_cid', 'sps_cid'], 'string', 'max' => 13],
            [['pname'], 'string', 'max' => 25],
            [['fname', 'lname', 'pttype_no', 'old_code', 'care_person_name'], 'string', 'max' => 50],
            [['pcode', 'religion', 'pttype'], 'string', 'max' => 2],
            [['sex', 'education', 'marrystatus', 'has_house_regist', 'death', 'patient_link', 'found_dw_emr', 'deformed_status', 'senile', 'in_region', 'register_conflict', 'dw_chronic_register'], 'string', 'max' => 1],
            [['nationality', 'citizenship'], 'string', 'max' => 3],
            [['occupation'], 'string', 'max' => 4],
            [['chronic_disease_list', 'club_list'], 'string', 'max' => 250],
            [['blood_group', 'hometel', 'worktel', 'mobile_phone'], 'string', 'max' => 20],
            [['hos_guid', 'person_guid', 'house_guid'], 'string', 'max' => 38],
            [['drug_allergy'], 'string', 'max' => 150],
            [['pttype_hospmain', 'pttype_hospsub', 'bloodgroup_rh'], 'string', 'max' => 5],
            [['patient_hn'], 'string', 'max' => 9],
            [['father_name', 'mother_name', 'sps_name', 'work_addr'], 'string', 'max' => 100],
            [['home_phone'], 'string', 'max' => 30]
        ];
    }

  
    public function attributeLabels()
    {
        return [
            'person_id' => 'Person ID',
            'house_id' => 'House ID',
            'cid' => 'Cid',
            'pname' => 'Pname',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'pcode' => 'Pcode',
            'sex' => 'Sex',
            'nationality' => 'Nationality',
            'citizenship' => 'Citizenship',
            'education' => 'Education',
            'occupation' => 'Occupation',
            'religion' => 'Religion',
            'marrystatus' => 'Marrystatus',
            'house_regist_type_id' => 'House Regist Type ID',
            'birthdate' => 'Birthdate',
            'has_house_regist' => 'Has House Regist',
            'chronic_disease_list' => 'Chronic Disease List',
            'club_list' => 'Club List',
            'village_id' => 'Village ID',
            'blood_group' => 'Blood Group',
            'current_age' => 'Current Age',
            'death_date' => 'Death Date',
            'hos_guid' => 'Hos Guid',
            'income_per_year' => 'Income Per Year',
            'home_position_id' => 'Home Position ID',
            'family_position_id' => 'Family Position ID',
            'drug_allergy' => 'Drug Allergy',
            'last_update' => 'Last Update',
            'death' => 'Death',
            'pttype' => 'Pttype',
            'pttype_begin_date' => 'Pttype Begin Date',
            'pttype_expire_date' => 'Pttype Expire Date',
            'pttype_hospmain' => 'Pttype Hospmain',
            'pttype_hospsub' => 'Pttype Hospsub',
            'father_person_id' => 'Father Person ID',
            'mother_person_id' => 'Mother Person ID',
            'pttype_no' => 'Pttype No',
            'sps_person_id' => 'Sps Person ID',
            'birthtime' => 'Birthtime',
            'age_y' => 'Age Y',
            'age_m' => 'Age M',
            'age_d' => 'Age D',
            'family_id' => 'Family ID',
            'person_house_position_id' => 'Person House Position ID',
            'couple_person_id' => 'Couple Person ID',
            'person_guid' => 'Person Guid',
            'house_guid' => 'House Guid',
            'last_update_pttype' => 'Last Update Pttype',
            'patient_link' => 'Patient Link',
            'patient_hn' => 'Patient Hn',
            'found_dw_emr' => 'Found Dw Emr',
            'person_discharge_id' => 'Person Discharge ID',
            'movein_date' => 'Movein Date',
            'discharge_date' => 'Discharge Date',
            'person_labor_type_id' => 'Person Labor Type ID',
            'father_name' => 'Father Name',
            'mother_name' => 'Mother Name',
            'sps_name' => 'Sps Name',
            'father_cid' => 'Father Cid',
            'mother_cid' => 'Mother Cid',
            'sps_cid' => 'Sps Cid',
            'bloodgroup_rh' => 'Bloodgroup Rh',
            'home_phone' => 'Home Phone',
            'old_code' => 'Old Code',
            'deformed_status' => 'Deformed Status',
            'ncd_dm_history_type_id' => 'Ncd Dm History Type ID',
            'ncd_ht_history_type_id' => 'Ncd Ht History Type ID',
            'agriculture_member_type_id' => 'Agriculture Member Type ID',
            'senile' => 'Senile',
            'in_region' => 'In Region',
            'body_weight_kg' => 'Body Weight Kg',
            'height_cm' => 'Height Cm',
            'nutrition_level' => 'Nutrition Level',
            'height_nutrition_level' => 'Height Nutrition Level',
            'bw_ht_nutrition_level' => 'Bw Ht Nutrition Level',
            'hometel' => 'Hometel',
            'worktel' => 'Worktel',
            'register_conflict' => 'Register Conflict',
            'care_person_name' => 'Care Person Name',
            'work_addr' => 'Work Addr',
            'person_dm_screen_status_id' => 'Person Dm Screen Status ID',
            'person_ht_screen_status_id' => 'Person Ht Screen Status ID',
            'person_stroke_screen_status_id' => 'Person Stroke Screen Status ID',
            'person_obesity_screen_status_id' => 'Person Obesity Screen Status ID',
            'person_dmht_manage_type_id' => 'Person Dmht Manage Type ID',
            'last_screen_dmht_bdg_year' => 'Last Screen Dmht Bdg Year',
            'dw_chronic_register' => 'Dw Chronic Register',
            'mobile_phone' => 'Mobile Phone',
        ];
    }
}
