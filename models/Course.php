<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $cr_id
 * @property int $Grade
 * @property string $name1
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cr_id'], 'required'],
            [['cr_id', 'Grade'], 'integer'],
            [['name1'], 'string', 'max' => 50],
            [['cr_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cr_id' => 'Cr ID',
            'Grade' => 'Grade',
            'name1' => 'Name1',
        ];
    }
}
