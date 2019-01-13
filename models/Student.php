<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $st_id
 * @property string $Name
 * @property int $Age
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_id'], 'required'],
            [['st_id', 'Age'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['st_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'st_id' => 'St ID',
            'Name' => 'Name',
            'Age' => 'Age',
        ];
    }
}
