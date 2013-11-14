<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
        <title>LOG-IN</title>
        <style type = "text/css">
        <!--
        body{
        background-color : #CC3300;
        } 
        .login{
        margin : 180px 500px 180px 500px;
        background-color : #99FF00;
        width : 300px;
        height : 300px;
        padding : 10px 10px 10px 10px;
        border : 3px dotted #A52A2A;
        }
        -->
        </style>
</head>

<body>
<div class = "login">
<h1 align = 'center'>LOGIN</h1>
<hr/ color = '#FF100%0'>
<form name = "login" action = "auth.php" method = "post">
<table>
<tr>
        <td>Username : </td>
</tr>
<tr>
        <td width = "100px"><input type = "text" name = "user"></td>
</tr>
<tr>
        <td>Password : </td>
</tr>
<tr>
        <td width = "100px"><input type = "password" name = "pass"></td>
</tr>
<tr>
        <td><input type = "submit" name = 'login' value = 'LOGIN' ></td>
</tr>
</table>
</form>
</div>
</body>
</html>