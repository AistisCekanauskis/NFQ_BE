<?php

namespace magicMethods;


class CallAndCallStatic
{
    protected function myProtected($value)
    {
        echo 'Accessed protected function by using magic method __callStatic and passed a variable :';
        var_dump($value);
    }

    public function __call($functionName, $valueToPass)
    {
        return call_user_func_array(
            array(get_called_class(), $functionName),
            $valueToPass
        );

    }

    protected static function myProtectedStatic($value)
    {
        echo 'Accessed static protected function by using magic method __callStatic and passed a variable :';
        var_dump($value);
    }

    public static function __callStatic($functionName, $valueToPass)
    {
        return call_user_func_array(
            array(get_called_class(), $functionName),
            $valueToPass
        );

    }
}