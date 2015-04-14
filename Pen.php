<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 20:23
 */

namespace Zemfr;

use Zemfr\Exceptions\ColorNotFoundException;
use Zemfr\Exceptions\PenEnabledException;
use Zemfr\Interfaces\FeatherInterface;


/**
 * Class Pen
 * @package Zemfr
 */
class Pen extends PenAbstract
{

    /**
     * @var FeatherInterface[]
     */
    private $feather = [];

    /**
     * @var FeatherInterface
     */
    private $currentFeather;

    /**
     * @var
     */
    protected $enabled;

    /**
     * @param bool $enabled
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param string $text
     * @throws Exceptions\PenEnabledException
     */
    public function write($text)
    {
        if (!$this->getEnabled()) {
            throw new PenEnabledException();
        }
        parent::write($text);
    }

    /**
     * @param FeatherInterface $feather
     * @return mixed|void
     */
    public function addFeather(FeatherInterface $feather)
    {
        array_push($this->feather, $feather);
    }

    /**
     * @return array
     */
    public function getFeather()
    {
        return $this->currentFeather;
    }

    /**
     * @param string $color
     * @throws Exceptions\ColorNotFoundException
     */
    public function setColor($color)
    {
        foreach ($this->feather as $feather) {
            if ($color == $feather->getTextColor()) {
                $this->currentFeather = $feather;
                return;
            }
        }
        throw new ColorNotFoundException;
    }

}