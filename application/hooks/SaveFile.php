<?php
/**
 * Created by PhpStorm.
 * User: Bob
 * Date: 5-1-2016
 * Time: 19:17
 */

$file = urldecode($_POST['location']);
$content = $_POST['content'];

if(file_put_contents($file, $content)) {
    echo "Last save: ". date("now");
} else {
    echo 'error';
}
