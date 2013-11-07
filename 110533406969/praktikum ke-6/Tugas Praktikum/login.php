<?php
session_start();

//melakukan login
if(isset($_REQUEST['ch']) && $_REQUEST['ch'] == 'login'){

	//pemberian notifikasi username dan password
	if($_REQUEST['uname'] == 'adminselly' && $_REQUEST['pass'] == 'adminselly123')
		$_SESSION['login_user'] = 1;
	else
		$_SESSION['login_msg'] = 1;
}

//redirect halaman nama (page name)
if(isset($_REQUEST['pagename']))
$pagename = $_REQUEST['pagename'];

//melakukan logout
if(isset($_REQUEST['ch']) && $_REQUEST['ch'] == 'logout'){
	unset($_SESSION['login_user']);
	header('Location:login.php');
}
if(isset($_SESSION['login_user'])){
	if(isset($_REQUEST['pagename']))
	header('Location:'.$pagename.'.php');
	else
	header('Location:index.php');
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Autentikasi Menggunakan Session</title>
</head>
<body>
	Username: adminsellly<br />
	Password: adminselly123
	<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr><td>&nbsp;</td></tr>
		<tr><td>
            <form name="login_form" method="post" action="">
                <table align="center" style="background-color:#fff;">
                    <tr><td colspan="2" align="center"><strong>Login Details</strong></td></tr>
                    <tr><td>Username</td><td><input type="text" name="uname" id="uname"></td></tr>
                    <tr><td>Password</td><td><input type="password" name="pass" id="pass"></td></tr>
					<tr>
					<td colspan="2" align="center">
					<p style="color:red;">
					<?php	
					//display the error msg if the login credentials are wrong!
						if(isset($_SESSION['login_msg'])){
							echo 'Wrong username and password !';
							unset($_SESSION['login_msg']);
						}
					?>
					</p>
					</td></tr>
                    <tr><td align="center" colspan="2"><input type="submit" value="Login"></td></tr>
                </table>
                <input type="hidden" name="ch" value="login">
            </form>
    	</td></tr>
    </table>
<?php } ?>
</body>
</html>
