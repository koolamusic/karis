<?php 
// initial exec using backtick
//`git pull`;

// set new output using shell_exec

$output = shell_exec('git pull');
echo "<pre>$output</pre>";

?>

