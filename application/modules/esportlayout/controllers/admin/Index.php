<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Controllers\Admin;

use Modules\EsportLayout\Mappers\Logo as LogoMapper;
use Modules\EsportLayout\Mappers\Slider as SliderMapper;

class Index extends \Ilch\Controller\Admin
{
    public function init()
    {
        $items = [
            [
                'name' => 'settingsOverview',
                'active' => false,
                'icon' => 'fa fa-palette',
                'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'index']),
            ],
            [
                'name' => 'settingsLogo',
                'active' => false,
                'icon' => 'fa fa-eye',
                'url' => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'logo'])
            ],
            [
                'name' => 'settingsSlider',
                'active' => false,
                'icon' => 'fa fa-images',
                'url'  => $this->getLayout()->getUrl(['controller' => 'index', 'action' => 'slider'])
            ],
        ];

        if ($this->getRequest()->getActionName() == 'logo') {
            $items[1]['active'] = true;
        }  else if ($this->getRequest()->getActionName() == 'slider') {
            $items[2]['active'] = true;
        } else {
            $items[0]['active'] = true;
        }

        $this->getLayout()->addMenu
        (
            'E-Sport-Layout',
            $items
        );
    }

    public function indexAction()
    {
        $this->getLayout()->getAdminHmenu()
            ->add($this->getTranslator()->trans('EsportLayout'), ['action' => 'index']);
    }

    public function logoAction()
    {
        $logoMapper = new LogoMapper();
        if ($this->getRequest()->getPost('save')) {
            $model = new \Modules\EsportLayout\Models\Logo();
            $model->setLogoUrl($this->getRequest()->getPost('logoUrl'));
            $logoMapper->save($model);
            $this->addMessage('saveSuccess');
            $this->redirect(array('action' => 'logo'));
        }
        $this->getView()->set('logo', $logoMapper->getLogo());
    }

    public function sliderAction()
    {
        $sliderMapper = new SliderMapper();
        if ($this->getRequest()->isPost('save')) {
            $model = new \Modules\EsportLayout\Models\Slider();
            if ($this->getRequest()->getParam('id')) {
                $model->setId($this->getRequest()->getParam('id'));
            }
            $slider1 = trim($this->getRequest()->getPost('slider1'));
            $slider2 = trim($this->getRequest()->getPost('slider2'));
            $slider3 = trim($this->getRequest()->getPost('slider3'));
            $slider1text = trim($this->getRequest()->getPost('slider1text'));
            $slider2text = trim($this->getRequest()->getPost('slider2text'));
            $slider3text = trim($this->getRequest()->getPost('slider3text'));
            $model->setSlider1($slider1);
            $model->setSlider2($slider2);
            $model->setSlider3($slider3);
            $model->setSlider1Heading($this->getRequest()->getPost('slider1heading'));
            $model->setSlider2Heading($this->getRequest()->getPost('slider2heading'));
            $model->setSlider3Heading($this->getRequest()->getPost('slider3heading'));
            $model->setSlider1HeadingColor($this->getRequest()->getPost('slider1headingcolor'));
            $model->setSlider2HeadingColor($this->getRequest()->getPost('slider2headingcolor'));
            $model->setSlider3HeadingColor($this->getRequest()->getPost('slider3headingcolor'));
            $model->setSlider1Text($slider1text);
            $model->setSlider2Text($slider2text);
            $model->setSlider3Text($slider3text);
            $model->setButton1($this->getRequest()->getPost('button1'));
            $model->setButton1Back($this->getRequest()->getPost('button1back'));
            $model->setButton1Hover($this->getRequest()->getPost('button1hover'));
            $model->setButton1Url($this->getRequest()->getPost('button1Url'));
            $model->setButton1Switch($this->getRequest()->getPost('button1Switch'));
            $model->setButton2($this->getRequest()->getPost('button2'));
            $model->setButton2Back($this->getRequest()->getPost('button2back'));
            $model->setButton2Hover($this->getRequest()->getPost('button2hover'));
            $model->setButton2Url($this->getRequest()->getPost('button2Url'));
            $model->setButton2Switch($this->getRequest()->getPost('button2Switch'));
            $model->setButton3($this->getRequest()->getPost('button3'));
            $model->setButton3Back($this->getRequest()->getPost('button3back'));
            $model->setButton3Hover($this->getRequest()->getPost('button3hover'));
            $model->setButton3Url($this->getRequest()->getPost('button3Url'));
            $model->setButton3Switch($this->getRequest()->getPost('button3Switch'));
            $sliderMapper->save($model);
            $this->addMessage('saveSuccess');
            $this->redirect(array('action' => 'slider'));
        }
        $this->getView()->set('slider', $sliderMapper->getSlider());
    }
}
