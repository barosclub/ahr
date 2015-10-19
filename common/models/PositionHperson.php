<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "position_hperson".
 *
 * @property integer $position_id
 * @property string $position_name
 */
class PositionHperson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position_hperson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_name'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position_id' => 'Position ID',
            'position_name' => 'Position Name',
        ];
    }
}
