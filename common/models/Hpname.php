<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hpname".
 *
 * @property integer $id
 * @property string $hpname
 */
class Hpname extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hpname';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hpname'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hpname' => 'Hpname',
        ];
    }
}
