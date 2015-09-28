<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "team_member".
 *
 * @property integer $id - �������������
 * @property string $firstName - ���
 * @property string $lastName - �������
 * @property string $position - ���������
 * @property string $picture - ������
 * @property string $socialTwitter - ������ �� twitter
 * @property string $socialFacebook - ������ �� facebook
 * @property string $socialLinkedIn - ������ LinkedIn
 * @property string $createdAt - ����/����� ��������
 * @property string $updatedAt - ����/����� ���������
 */
class TeamMember extends Base
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
        return 'team_member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'position', 'picture', 'socialTwitter', 'socialFacebook', 'socialLinkedIn'], 'string', 'max' => 255],
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
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'position' => 'Position',
            'picture' => 'Picture',
            'socialTwitter' => 'Social Twitter',
            'socialFacebook' => 'Social Facebook',
            'socialLinkedIn' => 'Social Linked In',
            //'createdAt' => 'Created At',
            //'updatedAt' => 'Updated At',
        ];
    }
}
