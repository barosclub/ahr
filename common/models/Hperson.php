<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hperson".
 *
 * @property integer $user_id
 * @property string $pname
 * @property string $fname
 * @property string $lname
 * @property string $photo
 * @property string $position_id
 * @property string $sex
 * @property string $cid
 * @property string $birth_date
 * @property string $department_id
 * @property string $address
 */
class Hperson extends \yii\db\ActiveRecord
{
    public $person_img;
        
        
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hperson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pname', 'fname', 'lname', 'position_id', 'sex', 'cid', 'birth_date', 'department_id'], 'required'],
            [['birth_date'], 'safe'],
            [['pname', 'position_id', 'department_id'], 'string', 'max' => 2],
            [['fname', 'lname', 'photo', 'address'], 'string', 'max' => 100],
            [['sex'], 'string', 'max' => 1],
            [['tel'],'string','max'=>10],
            [['cid'], 'string', 'max' => 13],
         [['person_img'],'file','skipOnEmpty'=>true,'on'=>'update','extensions'=>'jpg,png,gif']
        ];
    }
 
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'pname' => 'คำนำหน้า',
            'fname' => 'ชื่อ',
            'lname' => 'นามสกุล',
            'photo' => 'Photo',
            'position_id' => 'ตำแหน่ง',
            'sex' => 'เพศ',
            'tel'=>'เบอร์โทรศัพท์',
            'cid' => 'หมายเลขบัตรประชาชน',
            'birth_date' => 'วัน/เดือน/ปี เกิด',
            'department_id' => 'ฝ่าย/งาน',
            'address' => 'ที่อยู่',
            'person_img'=>'รูปภาพ',
        ];
    }
}
