<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 21:20
 */

namespace Zemfr\Feathers;


use Zemfr\Interfaces\FeatherInterface;


/**
 * Class GraphiteFeather
 * @package Zemfr\Feathers
 */
class GraphiteFeather implements FeatherInterface
{
    /**
     * @param string $text
     * @return bool
     */
    public function write($text)
    {
        // TODO: Implement write() method.
    }

    /**
     * @return string
     */
    public function getTextColor()
    {
        return 'gray';
    }

    /**
     * @return boolean
     */
    public function isOver()
    {
        // TODO: Implement isOver() method.
    }


    /**
     * @return bool
     */
    public function canBeClear()
    {
        return true;
    }
}