<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>proses login</title>
</head>

<body>
<?php
session_start();
//koneksi ke database
$host="localhost";
$user="root";
$pass="";
$db="bebas";

$konek=mysql_connect($host,$user,$pass) or die(mysql_error);
if ($konek){
   mysql_select_db($db);
}else{
   echo "Database tidak tersambung";
}

//ambil data dari form
$username=$_POST['username'];
$password=$_POST['password'];
if(!empty($username && $password)){
$query=mysql_query("SELECT * FROM user WHERE username=$username AND password=$password");
$data=mysql_fetch_array($query);
$jumlah=mysql_num_rows($query);
if ($jumlah>0){
      $_SESSION['username'] = $data['username'];
      header ('location:index.php');
   }else{
      echo "Username dan Password tidak Valid";
   }
}else{
echo "Username dan Password tidak boleh kosong";
}
?>
</body>
</html>