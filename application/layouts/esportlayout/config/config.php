<?php

namespace Layouts\EsportLayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'E-Sport Layout',
        'version' => '1.0.1',
        'ilchCore' => '2.1.32',
        'author' => 'Slipi',
        'link' => 'https://www.ilch.de',
        'desc' => 'Das E-Sport Layout ist ein moderns Clan-Layout mit dazugehörigen Modul "E-Sport-Layout". MIT diesem Modul haben sie die Möglichkeit denn Slider sowie Logo zu ändern. Dem Slider können sie bis zu 3 Bilder hinzufügen, bei einem Bild wird der Slider deaktiviert und haben damit einen Header, auch der Inhalt der einzelnen Bilder können sie ändern, sowie Buttons (Farbe, Hover und link).',
        'layouts' => [
            'panel' => [
                ['module' => 'user', 'controller' => 'login'],
                ['module' => 'user', 'controller' => 'regist'],
            ]//only for example
        ],
        'settings' => [
            'logourl' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/privatlayout/images/logo.png',
                'description' => '',
                ],
            'title' => [
                'type' => 'text',
                'default' => 'Free Private Layout',
                'description' => '',
                ],
            'titletext' => [
                'type' => 'ckeditorbbcode',
                'default' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
                'description' => '',
                ],
            'button1' => [
                'type' => 'text',
                'default' => 'ilch.de',
                'description' => '',
                ],
            'button1url' => [
                'type' => 'text',
                'default' => 'https://www.ilch.de/',
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
                'type' => 'text',
                'default' => 'https://www.google.de/',
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
                'type' => 'text',
                'default' => 'https://github.com/IlchCMS/Ilch-2.0/wiki',
                'description' => '',
                ],
            'button3switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'slider1' => [
                'type' => 'text',
                'default' => 'application/layouts/privatlayout/images/banner/pic1.jpg',
                'description' => 'Empfehlung: 680px × 280px',
                ],
            'slider1text' => [
                'type' => 'text',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elitr',
                'description' => '',
                ],
            'slider2' => [
                'type' => 'text',
                'default' => 'application/layouts/privatlayout/images/banner/pic2.jpg',
                'description' => 'Empfehlung: 680px × 280px',
                ],
            'slider2text' => [
                'type' => 'text',
                'default' => 'At vero eos et accusam et justo duo dolores et ea rebum',
                'description' => '',
                ],
            'slider3' => [
                'type' => 'text',
                'default' => 'application/layouts/privatlayout/images/banner/pic3.jpg',
                'description' => 'Empfehlung: 680px × 280px',
                ],
            'slider3text' => [
                'type' => 'text',
                'default' => 'Stet clita kasd gubergren',
                'description' => '',
                ],
        ],
        'modulekey' => 'esportlayout'
    ];

    public function getUpdate($installedVersion)
    {

    }
}
