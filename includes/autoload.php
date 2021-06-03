<?php

/**
 * @param $className
 * @return bool
 */
function autoloader($className) {
    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}

spl_autoload_register('autoloader');
