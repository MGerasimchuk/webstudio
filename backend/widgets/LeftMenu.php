<?php

namespace backend\widgets;

use yii\base\Widget;

/**
 * Class LeftMenu
 * ������������ ��� ��������� ����������� ���� ����������
 * @package app\widgets
 */
class LeftMenu extends Widget
{
    /**
     * �������� �� ������������ ������
     * @var bool
     */
    public $isGuest;

    /**
     * URL ����� �������������� ��� ���������� ����
     * @var string
     */
    public $baseUrl;

    public function init()
    {
        parent::init();
    }

    /**
     * ���������� ���� ��� ����������� � body
     * @return null|string
     */
    public function run()
    {
        if ($this->isGuest) {
            return null;
        } else {
            return $this->render('left-menu', ['baseUrl' => $this->baseUrl]);
        }
    }
}