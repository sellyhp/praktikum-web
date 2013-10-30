<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Wellcome</title>
</head>

<body>
<?php
session_start();
session_destroy();
header ('location:index.php');
?>
</body>
</html>