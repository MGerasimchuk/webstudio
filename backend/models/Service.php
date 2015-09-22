<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service".
 *
 * @property integer $id - ������������
 * @property string $name - ������������
 * @property string $description - ��������
 * @property string $picture - ����
 * @property string $createdAt - ����/����� ��������
 * @property string $updatedAt - ����/����� ���������
 */
class Service extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'description', 'picture'], 'string', 'max' => 255]
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
            'picture' => 'Picture',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
