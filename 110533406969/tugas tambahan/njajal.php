<head>
<title> Selly Aritmetika </title>
</head>
<form action="" method="get" name="hasil">
<input type="number" size="5" name="a"/>
<select name="aksi"><option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali" selected>x</option>
<option value="bagi">:</option></option>
</select>
<input type="number" size="5" name="b"/>
<input type="submit" value="hasil"/></form>

<p><textarea><?php 
$a=$_GET['a'];
$b=$_GET['b'];
$aksi=$_GET['aksi'];

if (isset($aksi)) {
$tambah=$a+$b;
$kurang=$a-$b;
$kali=$a*$b;
$bagi=$a/$b; }
if ($aksi==tambah) echo "hasil $a + $b = $tambah";
if ($aksi==kurang) echo "hasil $a - $b = $kurang";
if ($aksi==kali) echo "hasil $a x $b = $kali";
if ($aksi==bagi) echo "hasil $a : $b = $bagi"; ?></textarea></p>