<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 20:25
 */

namespace Zemfr\Interfaces;


/**
 * Interface PenInterface
 * @package Zemfr\Interfaces
 */
interface PenInterface
{
    /**
     * @param string $text
     */
    public function write($text);

    /**
     * @param FeatherInterface $feather
     * @return mixed
     */
    public function addFeather(FeatherInterface $feather);


    /**
     * @return FeatherInterface
     */
    public function getFeather();

} 