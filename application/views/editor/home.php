<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->helper('url');

?>
<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Exporer - <?php echo project_location(); ?></h1>
            </div>
            <?php
            foreach($file_array as $file) {
                echo $file ."<br />";
            }

            ?>
        </div>
    </div>
</div>

