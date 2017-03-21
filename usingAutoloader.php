<?php
/**
 * Created by PhpStorm.
 * User: IF130050
 * Date: 2017-03-21
 * Time: 10:55
 */

require_once 'autoloader.php';

echo '<h1>AUTOLOADING</h1>';

$A = new \A\A();
$B = new \A\B\B();
$C = new \A\C\C();
$D = new \A\B\D\D();
$E = new \A\C\E\E();

var_dump(get_included_files());