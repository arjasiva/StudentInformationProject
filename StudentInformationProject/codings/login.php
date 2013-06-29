<?php
include("conection.php");
if(isset($_POST["button"]))
{
$result = mysql_query("SELECT * FROM administrator
WHERE adminid='$_POST[uid]' and password='$_POST[pwd]'");
if(mysql_num_rows($result)==0)
{
$log =  "Login failed";
}
else
{
	header("Location: dashboard.php");
}
}
?>



<table width="1000" border="1">

<form name="form2" method="post" action="">

  <tr align="center">
    <td height="26" colspan="2">Login Page<br />
<b><font color="#FF0000"><?php echo $log; ?></font></b>
    </td>
  </tr>
  <tr>
    <td>User ID</td>
    <td><input name="uid" type="text" /></td>
  </tr>
  <tr>
    <td><label for="textfield">Password</label></td>
    <td><input type="password" name="pwd" id="textfield" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Login" /></td>
  </tr>
</form>
</table>
