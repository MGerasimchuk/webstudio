<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yiidreamteam\upload;
use yii\web\UploadedFile;

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
class Service extends Base
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
        return 'service';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 255],
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
        ];
    }
}
