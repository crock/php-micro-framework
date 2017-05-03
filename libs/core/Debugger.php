<?php
namespace MF\core;

class Debugger {
    public function __construct() {
        echo "Debugger class initialized";
    }

    public function admin_error($error = "Unknown error") {
        if (DEBUG) {
            echo $error;
        }
        return false;
    }
}