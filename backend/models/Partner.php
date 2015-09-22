<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partner".
 *
 * @property integer $id - �������������
 * @property string $name - ���
 * @property string $picture - ����
 * @property string $link - ������ �� ���� ��������
 * @property string $createdAt - ����/����� ��������
 * @property string $updatedAt - ���� ����� ���������
 */
class Partner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'picture', 'link'], 'string', 'max' => 255]
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
            'picture' => 'Picture',
            'link' => 'Link',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
