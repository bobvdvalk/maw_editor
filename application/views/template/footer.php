<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ace/ace.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script type="text/javascript">
    <?php $this->load->helper('url'); ?>
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/php");
    editor.setTheme("ace/theme/tomorrow");
</script>
</body>
</html>
