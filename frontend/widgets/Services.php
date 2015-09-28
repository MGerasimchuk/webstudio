<?php
/**
 * @var $services \common\models\Service[]
 */
namespace frontend\widgets;

use common\models\Service;
use yii\base\Widget;

/**
 * Class Services
 * ������������ ��� ��������� ������� ������� ��������
 * @package app\widgets
 */
class Services extends Widget
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
        $services = Service::find()->limit(3)->orderBy('RAND()')->all();
        if(count($services) == 3)
            return $this->render('services', ['services' => $services]);
    }
}