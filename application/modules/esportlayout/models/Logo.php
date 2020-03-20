<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Modules\EsportLayout\Models;

class Logo extends \Ilch\Model
{
    /**
     * id title
     *
     * @var integer
     */
    protected $id;

    /**
     * id logo
     *
     * @var string
     */
    protected $logoUrl;

    /**
     * Gets the id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the logo
     *
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * Sets the id
     *
     * @param integer $id
     */
    public function setId($logo)
    {
        $this->id = (int)$logo;
    }

    /**
     * Sets the logo
     *
     * @param string $id
     */
    public function setLogoUrl($logo)
    {
        $this->logoUrl = (string)$logo;
    }

}
