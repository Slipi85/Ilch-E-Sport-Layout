<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Controllers;

use Modules\EsportLayout\Mappers\Logo as LogoMapper;
use Modules\EsportLayout\Mappers\Slider as SliderMapper;

class Index extends \Ilch\Controller\Frontend
{
    public function indexAction()
    {
        $sliderMapper = new SliderMapper();
        $this->getView()->set('logo', $logoMapper->getLogo())
                        ->set('slider', $sliderMapper->getSlider());
    }
}
