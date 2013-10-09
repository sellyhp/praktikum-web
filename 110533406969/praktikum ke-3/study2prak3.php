<! DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org//1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Data Seleksi</title>
</head>

<body>
<form action="<?php $_SERVER ['PHP_SELF'];?>" method="post">
Nama Makanan
<input type="checkbox" name="makanan[]" value ="Soto" CHECKED/> Soto
<input type="checkbox" name="makanan[]" value ="Bakso"/> Bakso
<input type="checkbox" name="makanan[]" value ="Rawon"/> Rawon <br />

<input type="submit" value="ok" />
</form>

<?php
// Ekstrasi nilai
if(isset($_POST ['makanan']))  {
foreach ($_POST ['makanan'] as $key => $val){
echo $key . '-> ' .$val .'<br />';
}
}
?>
</body>
</html>