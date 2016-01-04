<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 4-1-2016
 * Time: 19:27
 */

namespace Mawoo\Editor\Exceptions;

use Exception;

abstract class EditorExceptions extends Exception
{
    public function __construct($message, $code = 0, Exception $previous)
    {
        parent::__construct($message, $code, $previous);
    }
}

define("MAWOO_EDITOR_ERROR", 10000);