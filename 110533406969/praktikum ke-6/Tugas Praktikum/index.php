<?php session_start();
//memeriksan login atau tidak
if(!isset($_SESSION['login_user'])){
	header('Location:login.php?pagename='.basename($_SERVER['PHP_SELF'], ".php"));
}
?>
<html>
<head><title>Autentikasi Menggunakan Session - Index page</title></head>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
    		<td>
            	<div style="float:left;"><a href="login.php?ch=logout">Logout</a></div>&nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        <tr>
			<td>
				<h1>Halloo! You made it to log in!</h1>
			</td>
		</tr>
		
</table>
</head>
</html>