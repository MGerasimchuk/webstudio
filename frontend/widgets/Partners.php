<?php
/**
 * @var $partners \common\models\Partner[]
 */

namespace frontend\widgets;

use common\models\Partner;
use yii\base\Widget;

/**
 * Class Team
 * ������������ ��� ��������� ������� ������� ��������
 * @package app\widgets
 */
class Partners extends Widget
{
    public function init()
    {
        parent::init();
    }

    /**
     * ���������� ������� ��� ����������� � body
     * @return null|string
     */
    public function run()
    {
        $partners = Partner::find()->limit(4)->orderBy('RAND()')->all();
        if(count($partners) == 4)
            return $this->render('partners', ['partners' => $partners]);
    }
}