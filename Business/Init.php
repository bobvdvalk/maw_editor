<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 31-12-2015
 * Time: 01:57
 */

namespace Mawoo\Editor;

use Config;

class Init
{
    private $config;

    public function __construct() {
        // Get project settings
        require_once("../config.php");
        $this->config = new Config();
    }

    
}