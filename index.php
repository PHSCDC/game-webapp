<!DOCTYPE html>
<html>
<head>
<title>Server Control Center</title>
<script src="jquery-1.12.1.min.js"></script>
</head>
<body>
<script>
  jQuery(function() {
   $.get("view_cmd.php?cmd=sudo%20service%20freeminer%20site_status", function(data) {
     $("#status").text(data);
  });
});
</script>
<h1>Freeminer Server Control Panel</h1>
<h2>Status</h2>
<p id="status"></p>
<h2>Control</h2>
<a href="run_cmd.php?cmd=sudo%20service%20freeminer%20start">Start</a>
<a href="run_cmd.php?cmd=sudo%20service%20freeminer%20stop">Stop</a>
</body>
</html>
