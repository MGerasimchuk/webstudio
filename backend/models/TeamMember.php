<?php

namespace app\models;

use Yii;

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
class TeamMember extends \yii\db\ActiveRecord
{
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
            [['createdAt', 'updatedAt'], 'safe'],
            [['firstName', 'lastName', 'position', 'picture', 'socialTwitter', 'socialFacebook', 'socialLinkedIn'], 'string', 'max' => 255]
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
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
