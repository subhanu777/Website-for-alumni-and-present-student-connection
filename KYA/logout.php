<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body bgcolor="#cccccc">
<?php
session_start();
session_destroy();
header("Location:index.php"); 
?>
</body>
</html>