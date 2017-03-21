<?php

// Used for PHP_EOL usage.
header('Content-type: text/plain');

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5);
var_dump(is_callable($obj));