<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_category".
 *
 * @property integer $id - �������������
 * @property string $name - ������������ ���������
 * @property string $createdAt - ����/����� ��������
 * @property string $updatedAt - ����/����� ���������
 *
 * @property Project[] $projects - TODO CREATE COMMENT
 */
class ProjectCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt'], 'safe'],
            [['name'], 'string', 'max' => 255]
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
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['categoryId' => 'id']);
    }
}
