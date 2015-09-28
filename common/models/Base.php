<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

class Base extends \yii\db\ActiveRecord
{
    /**
     * ����� ��� ��������������� ������������ ����/������� �����������/���������� �������
     * @return array
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }
}