<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 2-1-2016
 * Time: 17:12
 */

namespace Mawoo\Editor;

use Mawoo\Editor\Exceptions\FileException;
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

    public function LoadFile($location)
    {
        try {
                return htmlspecialchars(file_get_contents($location));
        } catch(\Exception $e) {
            throw new FileException("Can't open file. ". $e, MAWOO_EDITOR_FILE_CANT_OPEN);
        }
    }

    const TXT = "txt";
    const JS = "javascript";
    const PHP = "php";
    const JSON = "json";
    const HTML = "html";
    const CSS = "css";

    public function CheckFileExtension($location)
    {
        $explode = explode(".", $location);

        switch(end($explode)) {
            case "txt":
                return self::TXT;
            case "js":
                return self::JS;
            case "php":
                return self::PHP;
            case "json":
                return self::JSON;
            case "html":
                return self::HTML;
            case "css":
                return self::CSS;
            default:
                return false;
        }
    }
}