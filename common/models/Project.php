<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "project".
 *
 * @property integer $id - �������������
 * @property string $name - ������������
 * @property string $description - �������� ��������
 * @property string $note - ������ ��������
 * @property string $picture - ����
 * @property string $createdAt - ����/����� ��������
 * @property string $updatedAt - ���� ����� ���������
 * @property integer $categoryId - ������������� ���������
 *
 * @property ProjectCategory $category - ��������� �������
 */
class Project extends Base
{
    /**
     * @var UploadedFile file attribute
     */
    public $file;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoryId'], 'integer'],
            [['name', 'description', 'note', 'picture'], 'string', 'max' => 255],
            [['file'], 'image'],
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
            'description' => 'Description',
            'note' => 'Note',
            //'picture' => 'Picture',
            //'createdAt' => 'Created At',
            //'updatedAt' => 'Updated At',
            'categoryId' => 'Category ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ProjectCategory::className(), ['id' => 'categoryId']);
    }
}
