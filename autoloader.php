<?php

/**
 * @param string $className
 */
function __autoload($className) {
    $counter = count(get_included_files());
    include $className . ".php";
    if( $counter == get_included_files() ) {
        include $className . ".class.php";
    }
}
