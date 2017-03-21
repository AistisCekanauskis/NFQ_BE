<?php
namespace magicMethods;

class SleepAndWakeUp
{
    public $resourceM, $arrayM;

    public function __construct()
    {
        $this->resourceM = fopen("demo.txt", "w");
        $this->arrayM = array(1, 2, 3, 4);
    }

    public function __sleep()
    {
        return array('arrayM');
    }

    public function __wakeup()
    {
        $this->resourceM = fopen("demo.txt", "w");
    }
}