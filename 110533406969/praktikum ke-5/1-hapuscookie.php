<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Hapus Cookie</title>
</head>

<body>
<?php
setcookie ('example', 'coba');

if (isset($_COOKIE['example'])) {
echo 'cookie di-set <br />';

// Menghapus cookie dengan masa berlaku 3 jam yang lalu tcookie ('nama_cookie', '',time() - 3 * 3600);
echo 'cookie dihapus';
}else {
echo 'unset';
}

?>
<p>
Tekan Refresh (F5);
</body>
</html>