<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hospital_department".
 *
 * @property integer $id
 * @property string $name
 * @property string $hos_guid
 */
class HospitalDepartment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hospital_department';
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
            [['id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['hos_guid'], 'string', 'max' => 38]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hos_guid' => 'Hos Guid',
        ];
    }
}
