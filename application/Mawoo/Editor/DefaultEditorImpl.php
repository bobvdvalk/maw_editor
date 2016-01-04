<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2-1-2016
 * Time: 17:12
 */

namespace Mawoo\Editor;

use Symfony\Component\Finder\Finder;

class DefaultEditorImpl extends AbstractEditor
{

    public function LoadFiles($location)
    {
        $finder = new Finder();
        $finder->files()->in($location);

        $file_array = array();

        foreach($finder as $file) {
            $file_array[] = $file->getRealPath();
        }

        return $file_array;
    }

    public function save($content, $location)
    {
        // TODO: Implement save() method.
    }
}