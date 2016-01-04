<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2-1-2016
 * Time: 16:45
 */

namespace Mawoo\Editor;


interface Editor
{
    /**
     * Get all files from top folder.
     * Using the symfony library
     * @param string $location
     * @return array
     */
    public function GetFiles($location);

    /**
     * Open a file with the location
     * @param string $location
     * @return object
     */
    public function OpenFile($location);

    /**
     * Save a edited file
     * @param string $location
     * @param string $content
     * @return bool
     */
    public function SaveFile($content, $location);
}