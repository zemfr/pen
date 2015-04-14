<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 20:32
 */

namespace Zemfr;


use Zemfr\Exceptions\FeatherIsOverException;
use Zemfr\Exceptions\FeatherNotFoundException;
use Zemfr\Interfaces\FeatherInterface;
use Zemfr\Interfaces\PenInterface;

/**
 * Class PenAbstract
 * @package Zemfr
 */
abstract class PenAbstract implements PenInterface
{

    /**
     * @var FeatherInterface
     */
    private $feather;

    /**
     * @param FeatherInterface $feather
     * @return mixed
     */
    public function addFeather(FeatherInterface $feather)
    {
        $this->feather = $feather;
    }

    /**
     * @return FeatherInterface
     */
    public function getFeather()
    {
        return $this->feather;
    }

    /**
     * @param string $text
     * @throws Exceptions\FeatherIsOverException
     * @throws Exceptions\FeatherNotFoundException
     */
    public function write($text)
    {
        if (!$this->feather) {
            throw new FeatherNotFoundException();
        }
        if ($this->feather->isOver()) {
            throw new FeatherIsOverException();
        }
        $this->feather->write($text);
    }


} 