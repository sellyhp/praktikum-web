<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Set Session</title>
</head>

<body>
<?php
///inisialisasi data session
session_strat();

//set session jika belum ada
if (!isset ($_SESSION['test'])) {

//hapus session test
unset ($_SESSION['test']);

echo 'session di hapus';
} else {
echo 'unset';
// Mencetak semua elemen session
print_r($_SESSION);
}
?>
<p>
Tekan Refresh (F5);
</body>
</html>