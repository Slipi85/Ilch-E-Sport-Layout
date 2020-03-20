<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Mappers;

use Modules\EsportLayout\Models\Slider as SliderModel;

class Slider extends \Ilch\Mapper
{
    public function getSlider()
    {
        $row = $this->db()->select('*')
            ->from('layout_esportlayout')
            ->execute()
            ->fetchAssoc();

        if (empty($row)) {
            $model = new SliderModel();
            $model->setId('');
            $model->setSlider1('');
            $model->setSlider2('');
            $model->setSlider3('');
            $model->setSlider1Heading('');
            $model->setSlider2Heading('');
            $model->setSlider3Heading('');
            $model->setSlider1HeadingColor('');
            $model->setSlider2HeadingColor('');
            $model->setSlider3HeadingColor('');
            $model->setSlider1Text('');
            $model->setSlider2Text('');
            $model->setSlider3Text('');
            $model->setButton1('');
            $model->setButton1Back('');
            $model->setButton1Hover('');
            $model->setButton1Url('');
            $model->setButton1Switch('');
            $model->setButton2('');
            $model->setButton2Back('');
            $model->setButton2Hover('');
            $model->setButton2Url('');
            $model->setButton2Switch('');
            $model->setButton3('');
            $model->setButton3Back('');
            $model->setButton3Hover('');
            $model->setButton3Url('');
            $model->setButton3Switch('');
            return $model;
        }

        $model = new SliderModel();
        $model->setId($row['id']);
        $model->setSlider1($row['slider1']);
        $model->setSlider2($row['slider2']);
        $model->setSlider3($row['slider3']);
        $model->setSlider1Heading($row['slider1heading']);
        $model->setSlider2Heading($row['slider2heading']);
        $model->setSlider3Heading($row['slider3heading']);
        $model->setSlider1HeadingColor($row['slider1headingcolor']);
        $model->setSlider2HeadingColor($row['slider2headingcolor']);
        $model->setSlider3HeadingColor($row['slider3headingcolor']);
        $model->setSlider1Text($row['slider1text']);
        $model->setSlider2Text($row['slider2text']);
        $model->setSlider3Text($row['slider3text']);
        $model->setButton1($row['button1']);
        $model->setButton1Back($row['button1back']);
        $model->setButton1Hover($row['button1hover']);
        $model->setButton1Url($row['button1url']);
        $model->setButton1Switch($row['button1switch']);
        $model->setButton2($row['button2']);
        $model->setButton2Back($row['button2back']);
        $model->setButton2Hover($row['button2hover']);
        $model->setButton2Url($row['button2url']);
        $model->setButton2Switch($row['button2switch']);
        $model->setButton3($row['button3']);
        $model->setButton3Back($row['button3back']);
        $model->setButton3Hover($row['button3hover']);
        $model->setButton3Url($row['button3url']);
        $model->setButton3Switch($row['button3switch']);
        return $model;
    }

    public function save(SliderModel $entry)
    {
        $fields = array
        (
            'slider1' => $entry->getSlider1(),
            'slider2' => $entry->getSlider2(),
            'slider3' => $entry->getSlider3(),
            'slider1heading' => $entry->getSlider1Heading(),
            'slider2heading' => $entry->getSlider2Heading(),
            'slider3heading' => $entry->getSlider3Heading(),
            'slider1headingcolor' => $entry->getSlider1HeadingColor(),
            'slider2headingcolor' => $entry->getSlider2HeadingColor(),
            'slider3headingcolor' => $entry->getSlider2HeadingColor(),
            'slider1text' => $entry->getSlider1Text(),
            'slider2text' => $entry->getSlider2Text(),
            'slider3text' => $entry->getSlider3Text(),
            'button1' => $entry->getButton1(),
            'button1back' => $entry->getButton1Back(),
            'button1hover' => $entry->getButton1Hover(),
            'button1url' => $entry->getButton1Url(),
            'button1switch' => $entry->getButton1Switch(),
            'button2' => $entry->getButton2(),
            'button2back' => $entry->getButton2Back(),
            'button2hover' => $entry->getButton2Hover(),
            'button2url' => $entry->getButton2Url(),
            'button2switch' => $entry->getButton2Switch(),
            'button3' => $entry->getButton3(),
            'button3back' => $entry->getButton3Back(),
            'button3hover' => $entry->getButton3Hover(),
            'button3url' => $entry->getButton3Url(),
            'button3switch' => $entry->getButton3Switch(),
        );

        $this->db()->update('layout_esportlayout')
            ->values($fields)
            ->execute();
    }
}
