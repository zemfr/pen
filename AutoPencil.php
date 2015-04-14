<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.04.15
 * Time: 21:52
 */

namespace Zemfr;


use Zemfr\Feathers\GraphiteFeather;
use Zemfr\Interfaces\FeatherInterface;

class AutoPencil extends Pen
{
    public function addFeather(FeatherInterface $feather)
    {
        //this type can be chack in params, but ide shows error
        if (!($feather instanceof GraphiteFeather)) {
            throw new \RuntimeException('Need graphite feather');
        }
        parent::addFeather($feather);
    }
} 