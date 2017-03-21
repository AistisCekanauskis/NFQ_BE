<?php
/**
 * Created by PhpStorm.
 * User: Aistis
 * Date: 2017-03-20
 * Time: 20:35
 */

namespace magicMethods;


class Invoke
{
    public function __invoke()
    {
        echo 'LOL ';
    }
}