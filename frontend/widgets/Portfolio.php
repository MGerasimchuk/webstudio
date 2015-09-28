<?php
/**
 * @var $portfolio Project[]
 * @var $renderPortfolio mixed
 * @var $renderPortfolioModalFade mixed
 */

namespace frontend\widgets;

use common\models\Service;
use yii\base\Widget;
use common\models\Project;

/**
 * Class Portfolio
 * ������������ ��� ��������� ������� ������� ��������
 * @package app\widgets
 */
class Portfolio extends Widget
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
        $portfolio = Project::find()->limit(6)->orderBy('RAND()')->all();

        $renderPortfolio="";
        for($i=0; $i<count($portfolio); $i++)
            $renderPortfolio.=$this->render('portfolio-item', ['portfolioItem' => $portfolio[$i]]);

        $renderPortfolioModalFade="";
        for($i=0; $i<count($portfolio); $i++)
            $renderPortfolioModalFade.=$this->render('portfolio-modal-fade-item', ['portfolioItem' => $portfolio[$i]]);

        return $this->render('portfolio', [
            'renderPortfolio' => $renderPortfolio,
            'renderPortfolioModalFade' => $renderPortfolioModalFade,
        ]);
    }
}