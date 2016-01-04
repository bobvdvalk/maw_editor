<div id="page-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h3><?php echo $file; ?></h3>
                <p><?php echo $writable; ?></p>
            </div>
            <pre id="editor"><?php echo $content; ?></pre>
        </div>
    </div>
</div>

<script type="text/javascript">
    <?php $this->load->helper('url'); ?>
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/<?php echo $extension; ?>");
    editor.setTheme("ace/theme/tomorrow");
</script>