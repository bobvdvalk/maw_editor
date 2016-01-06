<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 5-1-2016
 * Time: 19:17
 */
include '../../vendor/autoload.php';

use Mawoo\Editor\DefaultEditorImpl;

if(isset($_POST)) {
    $location = urldecode($_POST['location']);
    $content = $_POST['content'];

    $file = new DefaultEditorImpl();

    if($file->SaveFile($content, $location)) {
        echo "Last update: " . date("F j, Y, g:i a");
    } else {
        echo "Something wen't wrong!";
    }
}
