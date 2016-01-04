<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Explorer</h1>
            </div>
            <?php
            foreach($file_array as $file) {
                echo '<a href="'. base_url(). 'editor/edit/?url='. $file .'">';
                echo $file ."</a><br />";
            }
            ?>
        </div>
    </div>
</div>

