<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>autentifikasi</title>
</head>

<body>
<?php
defined('_VALID') or die ('not alllowed');

function init_login() {
//simulasi data account nama dan password
$nama = 'admin';
$pass = 'admin';

if (isset($_POST['nama']) && isset($_POST['pass'])){
$n = trim($_POST ['nama']);
$p = trim($_POST ['pass']);

if (($n === $nama) && ($p===$pass) ) {
// jika sama, set coookie
setcookie ('nlogin', $n);
setcookie ('time', time());

//redireksi 
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
}else {
echo 'Nama/Password Tidak Sesuai';
return false;
}
}
}

function validate(){
if (!isset($_COOKIE['nlogin']) || !isset($_COOOKIE['time'])) {?>
<div class="inner">
<form action="" method="post">
<table border=0 cellpadding=5>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="LOGIN" /></td>
</tr>
<tr>
<table>
<form>
</div>
<?php
exit;
}
if (isset($_GET['m']) && $_GET['m'] ==='logout'){
// hapus cookie
if (isset($_COOKIE ['nlogin'])){
setcookie ('nlogin','',time() - 3*3600);
}
if (isset($_COOKIE['time'])) {
setcookie('time','',time()-3*3600);
}
//redireksi halaman
?>
<script type="text/javascript">
document.location.href="./";
</script>
<?php
}
}
?>
