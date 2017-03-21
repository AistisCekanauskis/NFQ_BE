<?php

namespace magicMethods;

class SubObject
{
    static $instances = 0;
    public $instance;

    public function __construct() {
        $this->instance = ++self::$instances;
    }

    public function __clone() {
        $this->instance = ++self::$instances;
    }
}

class MyCloneable
{
    public $obj1;
    public $obj2;

    function __clone()
    {
        // Force a copy of this->object, otherwise
        // it will point to same object.
        $this->obj1 = clone $this->obj1;
    }
}

?>
