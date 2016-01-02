<?php

/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 31-12-2015
 * Time: 15:25
 */
class ComposerLoader
{
    public function __construct() {
        require_once('./vendor/autoload.php');
    }
}