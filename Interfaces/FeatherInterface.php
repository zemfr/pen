<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 20:51
 */

namespace Zemfr\Interfaces;


/**
 * Interface Feather
 * @package Zemfr\Interfaces
 */
interface FeatherInterface
{

    /**
     * @param string $text
     * @return bool
     */
    public function write($text);

    /**
     * @return string
     */
    public function getTextColor();

    /**
     * @return boolean
     */
    public function isOver();

    /**
     * @return boolean
     */
    public function canBeClear();
}