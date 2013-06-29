
<?php
/*
include("conection.php");
if(isset($_POST[button]))
{
	$pwde = md5($_POST[password]);
$sql="INSERT INTO lectures (lecid, password, lecname, address ,contactno)
VALUES
('$_POST[lecid]','$pwde','$_POST[lecname]','$_POST[address]','$_POST[contactno]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
}

$result = mysql_query("SELECT * FROM lectures");
*/
?> 
<form name="form1" method="post" action="">
  <p>
    <label for="lecid">Lecture ID&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="lecid" id="lecid">
  </p>
  <p>
  <label for="lecname">Lecture Name</label>
    <input type="text" name="lecname" id="lecname">
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
  </p>
  <p>
    <label for="textfield4">Confirm Password</label>
    <input type="password" name="textfield4" id="textfield4">
  </p>
  <p>
    <label for="address">Address</label>
    <textarea name="address" id="address" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="contactno">Contact No</label>
    <input type="text" name="contactno" id="contactno">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit"> 
    <input type="submit" name="button2" id="button2" value="Reset">
  </p>
  <p>&nbsp;</p>
</form>
