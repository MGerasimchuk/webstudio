<?php

namespace app\widgets;

use yii\base\Widget;

/**
 * Class Header
 * ������������ ��� ��������� ����� ��������
 * @package app\widgets
 */
class Header extends Widget
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
            return $this->render('header-guest', ['baseUrl' => $this->baseUrl]);
        } else {
            return $this->render('header', ['baseUrl' => $this->baseUrl]);
        }
    }
}