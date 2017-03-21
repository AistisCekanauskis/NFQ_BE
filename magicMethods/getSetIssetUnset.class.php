<?php
/**
 * Created by PhpStorm.
 * User: Aistis
 * Date: 2017-03-20
 * Time: 19:28
 */

namespace magicMethods;


class GetSetIssetUnset
{
    private $data = array();

    public function __set($name, $value)
    {
        echo "Setting private [".$name."] to value : ".$value . PHP_EOL;
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "Getting set private value with key [$name] : ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    /**  As of PHP 5.1.0  */
    public function __isset($name)
    {
        echo "Checking if '$name' is set and returning boolean? RETURN = ";
        return isset($this->data[$name]);
    }

    /**  As of PHP 5.1.0  */
    public function __unset($name)
    {
        echo "Unsetting value [".$name."]" . PHP_EOL;
        unset($this->data[$name]);
    }
}