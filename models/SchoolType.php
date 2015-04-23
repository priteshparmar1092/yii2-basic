<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "school_type".
 *
 * @property integer $school_type_id
 * @property string $school_type_name
 * @property string $date_created
 * @property string $date_modified
 *
 * @property School[] $schools
 */
class SchoolType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_type_name', 'date_created', 'date_modified'], 'required'],
            [['date_created', 'date_modified'], 'safe'],
            [['school_type_name'], 'string', 'max' => 50],
            [['school_type_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_type_id' => 'School Type ID',
            'school_type_name' => 'School Type Name',
            'date_created' => 'Date Created',
            'date_modified' => 'Date Modified',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchools()
    {
        return $this->hasMany(School::className(), ['school_type' => 'school_type_id']);
    }
}
