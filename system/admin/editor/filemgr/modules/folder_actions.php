<?php

require_once("../../../../../config.php");
require_once("../config.php");

$dirSplit = explode("/",$_GET['file']);

?>
<div>
<a onclick="openDialog('modules/add_folder.php?path=<?php echo(str_replace(" ", "%20", $_GET['file'])); ?>',300);" class="action_icon" id="folder_add"><?php lang('Add'); ?></a>
<?php if($_SESSION['admin_type']==0){ ?>
<a onclick="openDialog('modules/rename.php?type=folder&path=<?php echo(str_replace(" ", "%20", $_GET['file'])); ?>',300);" class="action_icon" id="folder_rename"><?php lang('Rename'); ?></a>
<a onclick="openDialog('modules/delete.php?type=folder&path=<?php echo(str_replace(" ", "%20", $_GET['file'])); ?>',300);" class="action_icon" id="folder_delete"><?php lang('Delete'); ?></a>
<?php } ?>
</div>