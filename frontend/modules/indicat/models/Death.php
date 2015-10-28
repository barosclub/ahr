<?php

namespace frontend\modules\indicat\models;

use Yii;

/**
 * This is the model class for table "death".
 *
 * @property integer $death_id
 * @property integer $age
 * @property string $sex
 * @property string $addre
 * @property string $death_out_place
 * @property string $send_by_id
 * @property string $cpr
 * @property string $ward
 * @property string $symptoms_refer
 * @property string $death_af48hr
 * @property string $case_refer
 */
class Death extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'death';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['death_id'], 'required'],
            [['death_id', 'age'], 'integer'],
            [['sex', 'death_out_place', 'cpr', 'death_af48hr'], 'string', 'max' => 1],
            [['addre', 'symptoms_refer', 'case_refer'], 'string', 'max' => 100],
            [['send_by_id'], 'string', 'max' => 2],
            [['ward'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'death_id' => 'Death ID',
            'age' => 'Age',
            'sex' => 'Sex',
            'addre' => 'Addre',
            'death_out_place' => 'Death Out Place',
            'send_by_id' => 'Send By ID',
            'cpr' => 'Cpr',
            'ward' => 'Ward',
            'symptoms_refer' => 'Symptoms Refer',
            'death_af48hr' => 'Death Af48hr',
            'case_refer' => 'Case Refer',
        ];
    }
   public function getUser(){
  return $this->hasOne(MUser::className(),['death_id'=>'death_id']);
}

public function getFullname(){
  return $this->title.$this->name.' '.$this->surname;
}

public function getUsername(){
  return $this->user->username;
}
}
