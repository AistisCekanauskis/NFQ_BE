<?php
/**
 * Created by PhpStorm.
 * User: Aistis
 * Date: 2017-03-20
 * Time: 20:35
 */

namespace magicMethods;


class ToString
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}