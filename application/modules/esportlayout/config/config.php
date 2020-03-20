<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'key' => 'esportlayout',
        'version' => '1.0',
        'icon_small' => 'fa-palette',
        'author' => 'Slipi',
        'link' => 'https://www.ilch.de',
        'languages' => [
            'de_DE' => [
                'name' => 'E-Sport Layout',
                'description' => 'Hier kann das Layout Privat-Layout verwaltet werden.',
            ],
            'en_EN' => [
                'name' => 'E-Sport Layout',
                'description' => 'Here you can manage the layout Privat-Layout.',
            ],
        ],
        'ilchCore' => '2.0.0',
        'phpVersion' => '5.6'
    ];

    public function install()
    {
        $this->db()->queryMulti($this->getInstallSql());
    }

    public function uninstall()
    {
        $this->db()->queryMulti('DROP TABLE `[prefix]_layout_esportlayout`');
        $this->db()->queryMulti("DELETE FROM `[prefix]_modules` WHERE `key` = 'esportlayout'");
        $this->db()->queryMulti("DELETE FROM `[prefix]_modules_content` WHERE `key` = 'esportlayout'");
    }

    public function getInstallSql()
    {
        return "CREATE TABLE IF NOT EXISTS `[prefix]_layout_esportlayout` (
                  `id` int(1) NOT NULL,
                  `logourl` text COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button1back` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button1hover` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button1url` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button1switch` int(1) NOT NULL,
                  `button2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button2back` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button2hover` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button2url` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button2switch` int(1) NOT NULL,
                  `button3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button3back` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button3hover` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button3url` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `button3switch` int(1) NOT NULL,
                  `slider1` text COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider1heading` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider1headingcolor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider1text` varchar(270) COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider2` text COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider2text` varchar(270) COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider2heading` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider2headingcolor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider3` text COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider3text` varchar(270) COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider3headingcolor` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  `slider3heading` MEDIUMTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

                INSERT INTO `[prefix]_layout_esportlayout`
                  (
                  `id`,
                  `logourl`,
                  `button1`,
                  `button1back`,
                  `button1hover`,
                  `button1url`,
                  `button1switch`,
                  `button2`,
                  `button2back`,
                  `button2hover`,
                  `button2url`,
                  `button2switch`,
                  `button3`,
                  `button3back`,
                  `button3hover`,
                  `button3url`,
                  `button3switch`,
                  `slider1`,
                  `slider1heading`,
                  `slider1headingcolor`,
                  `slider1text`,
                  `slider2`,
                  `slider2heading`,
                  `slider2headingcolor`,
                  `slider2text`,
                  `slider3`,
                  `slider3heading`,
                  `slider3headingcolor`,
                  `slider3text`
                  )
                VALUES
                  (
                  '1',
                  'application/layouts/esportlayout/images/logo1.png',
                  'ilch.de',
                  'red',
                  'black',
                  'https://www.ilch.de/',
                  '1',
                  'Github ilch2 wiki',
                  'red',
                  'black',
                  'https://github.com/IlchCMS/Ilch-2.0/wiki',
                  '1',
                  'Ilch.de',
                  'red',
                  'black',
                  'https://ilch.de',
                  '1',
                  'application/layouts/esportlayout/images/banner/pic1.jpg',
                  'Ilch E-Sport Layout',
                  'red',
                  'Danke das sie sich für unser Ilch Esport-Layout endschieden haben. Im Admincenter können sie den Slider sowie auch das Logo ändern',
                  'application/layouts/esportlayout/images/banner/pic2.jpg',
                  'Ilch E-Sport Layout',
                  'red',
                  'Das Layout ist ein reines CLan Layout, kann jedoch auch als Blog verwendet werden.',
                  'application/layouts/esportlayout/images/banner/pic1.jpg',
                  'Ilch E-Sport Layout',
                  'red',
                  'Bei Probleme wenden sie sich bei uns im Forum auf ilch.de'
                  );";
    }

    public function update()
    {

    }
}
