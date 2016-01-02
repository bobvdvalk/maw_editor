<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2-1-2016
 * Time: 16:49
 */

namespace Mawoo\Editor;

use ErrorException;

abstract class AbstractEditor implements Editor
{
    /**
     * Get all files from top folder.
     * Using the symfony library
     * return array
     */
    public function GetFiles()
    {
        try {
            return $this->LoadFiles();
        } catch(ErrorException $e) {
            throw new ErrorException("Can load files ". $e);
        }
    }

    /**
     * Open a file with the location
     * @param string $location
     * @return object
     */
    public function OpenFile($location)
    {
        // TODO: Implement OpenFile() method.
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

    public abstract function LoadFiles();

    public abstract function save($content, $location);
}