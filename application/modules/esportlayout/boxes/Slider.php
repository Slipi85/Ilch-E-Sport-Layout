<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Boxes;

use Modules\EsportLayout\Mappers\Slider as SliderMapper;

class Slider extends \Ilch\Box
{
    public function render()
    {
        $sliderMapper = new SliderMapper();
        $this->getView()->set('slider', $sliderMapper->getSlider());
    }
}
