<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Models;

class Slider extends \Ilch\Model
{
    /**
     * The id of the entry.
     *
     * @var integer
     */
    protected $id;

    /**
     * The slider of the entry.
     *
     * @var string
     */
    protected $slider1;

    /**
     * The text of the entry.
     *
     * @var string
     */
    protected $slider2;

    /**
     * The text of the entry.
     *
     * @var string
     */
    protected $slider3;

    /**
     * The slider heading of the entry.
     *
     * @var string
     */
    protected $slider1heading;

    /**
     * The text heading of the entry.
     *
     * @var string
     */
    protected $slider2heading;

    /**
     * The text heading of the entry.
     *
     * @var string
     */
    protected $slider3heading;

    /**
     * The slider heading of the entry.
     *
     * @var string
     */
    protected $slider1headingcolor;

    /**
     * The text heading of the entry.
     *
     * @var string
     */
    protected $slider2headingcolor;

    /**
     * The text heading of the entry.
     *
     * @var string
     */
    protected $slider3headingcolor;

    /**
     * The slider of the entry.
     *
     * @var string
     */
    protected $slider1Text;

    /**
     * The text of the entry.
     *
     * @var string
     */
    protected $slider2Text;

    /**
     * The text of the entry.
     *
     * @var string
     */
    protected $slider3Text;

    /**
     * title button1
     *
     * @var string
     */
    protected $button1;

    /**
     * background button1
     *
     * @var string
     */
    protected $button1back;

    /**
     * hover button1
     *
     * @var string
     */
    protected $button1hover;

    /**
     * title button1Url
     *
     * @var string
     */
    protected $button1Url;

    /**
     * id button1Switch
     *
     * @var integer
     */
    protected $button1Switch;

    /**
     * title button2
     *
     * @var string
     */
    protected $button2;

    /**
     * background button2
     *
     * @var string
     */
    protected $button2back;

    /**
     * hover button2
     *
     * @var string
     */
    protected $button2hover;

    /**
     * title button2Url
     *
     * @var string
     */
    protected $button2Url;

    /**
     * id button2Switch
     *
     * @var integer
     */
    protected $button2Switch;

    /**
     * title button3
     *
     * @var string
     */
    protected $button3;

    /**
     * background button3
     *
     * @var string
     */
    protected $button3back;

    /**
     * hover button3
     *
     * @var string
     */
    protected $button3hover;

    /**
     * title button3Url
     *
     * @var string
     */
    protected $button3Url;

    /**
     * id button3Switch
     *
     * @var integer
     */
    protected $button3Switch;

    /**
     * Gets the id of the entry.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider1()
    {
        return $this->slider1;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider2()
    {
        return $this->slider2;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider3()
    {
        return $this->slider3;
    }

    /**
     * Gets the slider heading of the entry.
     *
     * @return string
     */
    public function getSlider1Heading()
    {
        return $this->slider1heading;
    }

    /**
     * Gets the slider Headingof the entry.
     *
     * @return string
     */
    public function getSlider2Heading()
    {
        return $this->slider2heading;
    }

    /**
     * Gets the slider heading of the entry.
     *
     * @return string
     */
    public function getSlider3Heading()
    {
        return $this->slider3heading;
    }

    /**
     * Gets the slider heading of the entry.
     *
     * @return string
     */
    public function getSlider1HeadingColor()
    {
        return $this->slider1headingcolor;
    }

    /**
     * Gets the slider Headingof the entry.
     *
     * @return string
     */
    public function getSlider2HeadingColor()
    {
        return $this->slider2headingcolor;
    }

    /**
     * Gets the slider heading of the entry.
     *
     * @return string
     */
    public function getSlider3HeadingColor()
    {
        return $this->slider3headingcolor;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider1Text()
    {
        return $this->slider1Text;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider2Text()
    {
        return $this->slider2Text;
    }

    /**
     * Gets the slider of the entry.
     *
     * @return string
     */
    public function getSlider3Text()
    {
        return $this->slider3Text;
    }

    /**
     * Gets button1
     *
     * @return string
     */
    public function getButton1()
    {
        return $this->button1;
    }

    /**
     * Gets button1 background
     *
     * @return string
     */
    public function getButton1Back()
    {
        return $this->button1back;
    }

    /**
     * Gets button1 hover
     *
     * @return string
     */
    public function getButton1Hover()
    {
        return $this->button1hover;
    }

    /**
     * Gets button1url
     *
     * @return string
     */
    public function getButton1Url()
    {
        return $this->button1Url;
    }

    /**
     * Gets button1Switch
     *
     * @return integer
     */
    public function getButton1Switch()
    {
        return $this->button1Switch;
    }

    /**
     * Gets button2
     *
     * @return string
     */
    public function getButton2()
    {
        return $this->button2;
    }

    /**
     * Gets button2 background
     *
     * @return string
     */
    public function getButton2Back()
    {
        return $this->button2back;
    }

    /**
     * Gets button2 hover
     *
     * @return string
     */
    public function getButton2Hover()
    {
        return $this->button2hover;
    }

    /**
     * Gets button2url
     *
     * @return string
     */
    public function getButton2Url()
    {
        return $this->button2Url;
    }

    /**
     * Gets button2Switch
     *
     * @return integer
     */
    public function getButton2Switch()
    {
        return $this->button2Switch;
    }

    /**
     * Gets button3
     *
     * @return string
     */
    public function getButton3()
    {
        return $this->button3;
    }

    /**
     * Gets button3 background
     *
     * @return string
     */
    public function getButton3Back()
    {
        return $this->button3back;
    }

    /**
     * Gets button3 hover
     *
     * @return string
     */
    public function getButton3Hover()
    {
        return $this->button3hover;
    }

    /**
     * Gets button3url
     *
     * @return string
     */
    public function getButton3Url()
    {
        return $this->button3Url;
    }

    /**
     * Gets button3Switch
     *
     * @return integer
     */
    public function getButton3Switch()
    {
        return $this->button3Switch;
    }

    /**
     * Sets the id of the entry.
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider1($slider)
    {
        $this->slider1 = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider2($slider)
    {
        $this->slider2 = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider3($slider)
    {
        $this->slider3 = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider1Heading($slider)
    {
        $this->slider1heading = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider2Heading($slider)
    {
        $this->slider2heading = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider3Heading($slider)
    {
        $this->slider3heading = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider1HeadingColor($slider)
    {
        $this->slider1headingcolor = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider2HeadingColor($slider)
    {
        $this->slider2headingcolor = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider3HeadingColor($slider)
    {
        $this->slider3headingcolor = (string)$slider;
    }

     /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider1Text($slider)
    {
        $this->slider1Text = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider2Text($slider)
    {
        $this->slider2Text = (string)$slider;
    }

    /**
     * Sets the slider.
     *
     * @param string $slider
     */
    public function setSlider3Text($slider)
    {
        $this->slider3Text = (string)$slider;
    }

    /**
     * Sets the button1
     *
     * @param string $button1
     */
    public function setButton1($slider)
    {
        $this->button1 = (string)$slider;
    }

    /**
     * Sets the button1 background
     *
     * @param string $button1back
     */
    public function setButton1Back($slider)
    {
        $this->button1back = (string)$slider;
    }

    /**
     * Sets the button1 hover
     *
     * @param string $button1hover
     */
    public function setButton1Hover($slider)
    {
        $this->button1hover = (string)$slider;
    }

    /**
     * Sets the button1url
     *
     * @param string $button1url
     */
    public function setButton1Url($slider)
    {
        $this->button1Url = (string)$slider;
    }

    /**
     * Sets the button1Switch
     *
     * @param integer $button1Switch
     */
    public function setButton1Switch($slider)
    {
        $this->button1Switch = (int)$slider;
    }

    /**
     * Sets the button2
     *
     * @param string $button2
     */
    public function setButton2($slider)
    {
        $this->button2 = (string)$slider;
    }

    /**
     * Sets the button2 background
     *
     * @param string $button2back
     */
    public function setButton2Back($slider)
    {
        $this->button2back = (string)$slider;
    }

    /**
     * Sets the button2 hover
     *
     * @param string $button2hover
     */
    public function setButton2Hover($slider)
    {
        $this->button2hover = (string)$slider;
    }

    /**
     * Sets the button2url
     *
     * @param string $button2url
     */
    public function setButton2Url($slider)
    {
        $this->button2Url = (string)$slider;
    }

    /**
     * Sets the button2Switch
     *
     * @param integer $button2Switch
     */
    public function setButton2Switch($slider)
    {
        $this->button2Switch = (int)$slider;
    }

    /**
     * Sets the button3
     *
     * @param string $button3
     */
    public function setButton3($slider)
    {
        $this->button3 = (string)$slider;
    }

    /**
     * Sets the button3 background
     *
     * @param string $button3back
     */
    public function setButton3Back($slider)
    {
        $this->button3back = (string)$slider;
    }

    /**
     * Sets the button3 hover
     *
     * @param string $button3hover
     */
    public function setButton3Hover($slider)
    {
        $this->button3hover = (string)$slider;
    }

    /**
     * Sets the button3url
     *
     * @param string $button3url
     */
    public function setButton3Url($slider)
    {
        $this->button3Url = (string)$slider;
    }

    /**
     * Sets the button3Switch
     *
     * @param integer $button3Switch
     */
    public function setButton3Switch($slider)
    {
        $this->button3Switch = (int)$slider;
    }

}
