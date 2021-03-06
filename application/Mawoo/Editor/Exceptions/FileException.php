<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 4-1-2016
 * Time: 19:34
 */

namespace Mawoo\Editor\Exceptions;

use Exception;

class FileException extends EditorExceptions
{
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

define("MAWOO_EDITOR_FILE_NOT_EXIST", MAWOO_EDITOR_ERROR + 1000);
define("MAWOO_EDITOR_FILE_CANT_OPEN", MAWOO_EDITOR_ERROR + 2000);
define("MAWOO_EDITOR_FILE_CANT_WRITE", MAWOO_EDITOR_ERROR + 3000);
define("MAWOO_EDITOR_FILE_CANT_DELETE", MAWOO_EDITOR_ERROR + 4000);
define("MAWOO_EDITOR_FILE_WRONG_EXT", MAWOO_EDITOR_ERROR + 5000);
define("MAWOO_EDITOR_FILE_NO_EXT", MAWOO_EDITOR_ERROR + 6000);
