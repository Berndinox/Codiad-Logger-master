<?php

    /*
    *  Copyright (c) Codiad & Kent Safranski (codiad.com), distributed
    *  as-is and without warranty under the MIT License. See 
    *  [root]/license.txt for more. This information must remain intact.
    */


    require_once('../../common.php');
    
    //////////////////////////////////////////////////////////////////
    // Verify Session or Key
    //////////////////////////////////////////////////////////////////
    
    checkSession();
    
?>
<style>#logger { border: 1px solid #2b2b2b; }</style>
<iframe id="logger" width="100%" height="500" src="<?php echo str_replace(BASE_PATH."/","",str_replace("dialog.php", "", $_SERVER['SCRIPT_FILENAME'])); ?>logger/index.php"></iframe>
<button onclick="codiad.modal.unload(); return false;">Close Logger</button>
<script>
    $(function(){ 
        var wheight = $(window).outerHeight() * 0.8;
        $('#logger').css('height',wheight+'px');
    });
</script>
