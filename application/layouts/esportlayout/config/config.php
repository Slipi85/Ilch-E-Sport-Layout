<?php

namespace Layouts\EsportLayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'E-Sport Layout',
        'version' => '1.0.12',
        'ilchCore' => '2.1.37',
        'author' => 'Slipi',
        'link' => 'https://www.ilch.de',
        'desc' => 'Das E-Sport Layout ist ein moderns Clan-Layout. Dem Slider können sie bis zu 3 Bilder hinzufügen. Wird nur 1 Image von 3 Image hinzugefügt, haben sie einen normalen Header. Auch der Inhalt der einzelnen Image kann geändert ändern, sowie Buttons (Farbe, Hover und link).',
        'layouts' => [
            'panel' => [
                ['module' => 'user', 'controller' => 'login'],
                ['module' => 'user', 'controller' => 'regist'],
            ]
        ],
        'settings' => [
            'logourl' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/esportlayout/images/logo1.png',
                'description' => '',
                ],
            'button1' => [
                'type' => 'text',
                'default' => 'ilch.de',
                'description' => '',
                ],
            'button1url' => [
                'type' => 'url',
                'default' => 'https://www.ilch.de/',
                'description' => '',
                ],
            'button1color' => [
                'type' => 'colorpicker',
                'default' => '#ff0000',
                'description' => '',
                ],
            'button1hover' => [
                'type' => 'colorpicker',
                'default' => '#141414',
                'description' => '',
                ],
            'button1switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'button2' => [
                'type' => 'text',
                'default' => 'google.de',
                'description' => '',
                ],
            'button2url' => [
                'type' => 'url',
                'default' => 'https://www.google.de/',
                'description' => '',
                ],
            'button2color' => [
                'type' => 'colorpicker',
                'default' => '#ff0000',
                'description' => '',
                ],
            'button2hover' => [
                'type' => 'colorpicker',
                'default' => '#141414',
                'description' => '',
                ],
            'button2switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'button3' => [
                'type' => 'text',
                'default' => 'github ilch2 wiki',
                'description' => '',
                ],
            'button3url' => [
                'type' => 'url',
                'default' => 'https://github.com/IlchCMS/Ilch-2.0/wiki',
                'description' => '',
                ],
            'button3color' => [
                'type' => 'colorpicker',
                'default' => '#ff0000',
                'description' => '',
                ],
            'button3hover' => [
                'type' => 'colorpicker',
                'default' => '#141414',
                'description' => '',
                ],
            'button3switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'slider1' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/esportlayout/images/banner/pic1.jpg',
                'description' => 'descSlider',
                ],
            'slider1heading' => [
                'type' => 'text',
                'default' => 'Ilch E-Sport Layout',
                'description' => '',
                ],
            'slider1text' => [
                'type' => 'text',
                'default' => 'Danke das sie sich für das Ilch E-Sport Layout entschieden haben.',
                'description' => 'descSliderText',
                ],
            'slider2' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/esportlayout/images/banner/pic2.jpg',
                'description' => 'descSlider',
                ],
            'slider2heading' => [
                'type' => 'text',
                'default' => 'Ilch E-Sport Layout',
                'description' => '',
                ],
            'slider2text' => [
                'type' => 'text',
                'default' => 'Im Admincenter kann der Slider sowie das Logo nach ihren wünschen geändert werden',
                'description' => 'descSliderText',
                ],
            'slider3' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/esportlayout/images/banner/pic3.jpg',
                'description' => 'descSlider',
                ],
            'slider3heading' => [
                'type' => 'text',
                'default' => 'Ilch E-Sport Layout',
                'description' => '',
                ],
            'slider3text' => [
                'type' => 'text',
                'default' => 'Sollte es Probleme geben, besuchen sie uns im Forum, und ihnen wird geholfen.',
                'description' => 'descSliderText',
                ],
            'linkColor' => [
                'type' => 'colorpicker',
                'default' => '#ffffff',
                'description' => 'linkColorDescp',
              ],
            'linkHover' => [
                'type' => 'colorpicker',
                'default' => '#666666',
                'description' => 'linkHoverDescp',
              ],
        ],
    ];

    public function getUpdate($installedVersion)
    {

    }
}
