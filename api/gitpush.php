<?php 
// initial exec using backtick
//`git pull`;

// set new output using shell_exec

$output = shell_exec('git pull origin master');
echo "<pre>$output</pre>";

?>

