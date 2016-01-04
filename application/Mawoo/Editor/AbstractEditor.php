<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2-1-2016
 * Time: 16:49
 */

namespace Mawoo\Editor;

use ErrorException;
use Mawoo\Editor\Exceptions\FileException;

abstract class AbstractEditor implements Editor
{
    /**
     * Get all files from top folder.
     * Using the symfony library
     * return array
     * @param $location
     * @return array
     * @throws ErrorException
     */
    public function GetFiles($location)
    {
        try {
            return $this->LoadFiles($location);
        } catch(ErrorException $e) {
            throw new ErrorException("Can load files ". $e);
        }
    }

    /**
     * Open a file with the location
     * @param string $location
     * @return object
     * @throws FileException
     */
    public function OpenFile($location)
    {
        if($this->CheckFileExtension($location) != false) {
            $file = $this->LoadFile($location);

            return $file;
        } else {
            throw new FileException("Can't open file! Wrong extension", MAWOO_EDITOR_FILE_WRONG_EXT);
        }
    }

    /**
     * Save a edited file
     * @param string $content
     * @param string $location
     * @return bool
     * @throws ErrorException
     */
    public function SaveFile($content, $location)
    {
        // TODO: Implement SaveFile() method.
        if($this->save($content, $location)) {
            return true;
        } else {
            throw new ErrorException("Can\'t save the file!");
        }
    }

    public abstract function LoadFiles($location);

    public abstract function LoadFile($location);

    public abstract function save($content, $location);

    public abstract function CheckFileExtension($location);
}