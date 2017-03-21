<?php
/**
 * Created by PhpStorm.
 * User: Aistis
 * Date: 2017-03-20
 * Time: 20:35
 */

namespace magicMethods;


class SetState
{
    public $var1;
    public $var2;

    public static function __set_state($an_array) // As of PHP 5.1.0
    {
        $obj = new SetState;
        $obj->var1 = $an_array['var1'];
        $obj->var2 = $an_array['var2'];
        return $obj;
    }
}