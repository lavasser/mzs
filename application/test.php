<?php

/**
 * Created by PhpStorm.
 * User: kopyev
 * Date: 09.02.2018
 * Time: 17:08
 */
class Test
{
    public static $color = 'red';
    public $weight = '100 Kg';

    public static function getColor()
    {
        echo self::$color.', ';
    }

    public function setColor()
    {
        echo $this->weight;
    }
}

Test::getColor();
$obj = new Test;
$obj->setColor();