<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Set Cookie</title>
</head>

<body>
<?php
//menset nilai cookie
setcookie ('example','coba');

//mendapatkan nilai cookie
echo $_COOKIE('example');
?>
<p>
Tekan Refresh (f5);

</body>
</html>