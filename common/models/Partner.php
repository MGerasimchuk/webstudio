<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

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
class Partner extends Base
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
        return 'partner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'picture', 'link'], 'string', 'max' => 255],
            ['picture', 'file', 'extensions' => 'jpeg, gif, png'],
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
            'picture' => 'Picture',
            'link' => 'Link',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * ����������� ���� ��������/��������� ��������
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            [
            'class' => '\yiidreamteam\upload\ImageUploadBehavior',
            'attribute' => 'picture',
            'thumbs' => [
                'thumb' => ['width' => 400, 'height' => 300],
            ],
                'filePath' => '@webroot/' . $this->picture,
                'fileUrl' => '/images/' . $this->picture,
                'thumbPath' => '@webroot/' . $this->picture,
                'thumbUrl' => '/' . $this->picture,
            ],
            /*'filePath' => '@webroot/images/123.jpg',
            'fileUrl' => '/images/123.jpg',
            'thumbPath' => '@webroot/images/thumb_123.jpg',
            'thumbUrl' => '/images/thumb_123.jpg',
             ],*/
        ];
    }

}
