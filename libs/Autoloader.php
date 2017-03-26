<?php

class Autoloader {

    public function __construct() {
        set_include_path("core/");
        spl_autoload_extensions('.php');
        spl_autoload_register(array($this, 'loader'));
    }

    private function loader($className) {
        echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
        include $className . '.php';
    }
}