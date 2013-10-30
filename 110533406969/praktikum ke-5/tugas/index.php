<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Wellcome</title>
</head>

<body>
<?php session_start(); ?>
<html>
<head>
   <title>Wellcome</title>
</head>
<body>
<p>Selamat datang <?php
if (!empty($_SESSION)){
echo $_SESSION['username'];
}else{
header ('location:login.php');
}
?> <a href="logout.php">Logout</a></p>
</body>
</html>