<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Boxes;

use Modules\EsportLayout\Mappers\Logo as LogoMapper;

class Logo extends \Ilch\Box
{
    public function render()
    {
        $logoMapper = new LogoMapper();
        $this->getView()->set('logo', $logoMapper->getLogo());
    }
}
