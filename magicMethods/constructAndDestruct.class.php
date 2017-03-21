<?php

namespace magicMethods;


class ConstructAndDestruct
{
    private $value;

    /**
     * constructAndDestruct constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        print '__construct. Executed immediately after new object creation. Also assigned $value = '
          . $this->value . PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getValue() {
        return $this->value;
    }

    public function __destruct() {
        print '__destruction. Executes after object is destroyed. '
           .'Example : save $value '.$this->value.' to Database before finishing work with object.' . PHP_EOL;
        self::saveValue($this->value);
    }

    /**
     * @param $value
     */
    private function saveValue($value) {
        // Code for saving $value to Database
    }
}