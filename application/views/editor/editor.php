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
    ace.require("ace/ext/language_tools");
    var editor = ace.edit("editor");

    function SaveFile() {
        $.ajax({
            url: "<?php echo base_url(); ?>/application/hooks/SaveFile.php",
            data: 'location=<?php echo urlencode($file); ?>&content='+ editor.getValue(),
            type: "POST",
            success: function(data) {
                alert(data);
            },
            error: function(e) {
                console.log(e.message);
            }
        });
    }

    var SaveCommand = {
        name: "SaveFile",
        exec: SaveFile
    };

    editor.commands.addCommand(SaveCommand);

    editor.commands.bindKey("Ctrl-s", "SaveFile");
    editor.session.setMode("ace/mode/<?php echo $extension; ?>");
    editor.setTheme("ace/theme/tomorrow");


</script>