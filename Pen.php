<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 20:23
 */

namespace Zemfr;

use Zemfr\Exceptions\PenEnabledException;


/**
 * Class Pen
 * @package Zemfr
 */
class Pen extends PenAbstract
{
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

}