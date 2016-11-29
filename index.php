<?php
// Start the session
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Snake Make | Start</title>
  <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>
</head>
<body>
<script>
alertify.prompt( 'Just One Step Away', 'Enter your Name:', ''
               , function(evt, value) { window.open('snake.php',"_self");}
               , function() { alertify.error("You can't play the game without entering your name"); location.reload();});
</script>



</body>
</html>  
