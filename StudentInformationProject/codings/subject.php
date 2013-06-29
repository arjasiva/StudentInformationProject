<?php
include("conection.php");
$sql="INSERT INTO subject (subid, subname, comment, courseid,subtype, semester)
VALUES
('$_POST[subid]','$_POST[subname]','$_POST[comment]','$_POST[course]','$_POST[subtype]','$_POST[semester]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
echo "1 record added";

$result = mysql_query("SELECT * FROM subject");
$result1 = mysql_query("SELECT * FROM course");
$reslec = mysql_query("SELECT * FROM lectures");
?> 
<form name="form1" method="post" action="">
  <p>
    <label for="textfield">Subject ID</label>
    <input type="text" name="subid" id="textfield">
  </p>
  <p>
    <label for="textfield2">Sub Name</label>
    <input type="text" name="subname" id="textfield2">
  </p>
  <p>
    <label for="textarea">Comment</label>
    <textarea name="comment" id="textarea" cols="45" rows="5"></textarea>
  </p>
 <p>
    <label for="textfield7">Course </label>
    <select name="course" id="select2">
     <option value="">Course Details</option>
     <?php
 while($row1 = mysql_fetch_array($result1))
  {
  echo "<option value='$row1[courseid]'>$row1[coursename]</option>";
  }
  ?>
    </select>
  </p>
  <p>
    <label for="select">Subject Type</label>
    <select name="subtype" id="select">
      <option value="Language">Language</option>
      <option value="Theory">Theory</option>
      <option value="Lab">Lab</option>
    </select>
  </p>
  <p>
    <label for="select2">Semester</label>
    <select name="semester" id="semester">
      <option value="1">First Semester</option>
      <option value="2">Second Semester</option>
      <option value="3">Third Semester</option>
      <option value="4">Fourth Semester</option>
      <option value="5">Fifth Semester</option>
      <option value="6">Sixth Semester</option>
    </select>
  </p>
  <p>Lecture 
    <select name="semester2" id="semester2">
      <?php
 while($row1 = mysql_fetch_array($reslec))
  {
  echo "<option value='$row1[lecid]'>$row1[lecname]</option>";
  }
  ?>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">
  </p>
</form>

<p>&nbsp;</p>
<table width="474" border="1">
  <tr>
    <td width="44">ID</td>
    <td width="92">Sub Name</td>
    <td width="78">Course</td>
    <td width="84">Sub Type</td>
    <td width="77">Semester</td>
    
  </tr>
    <?php
  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>&nbsp;" . $row['subid'] . "</td>";
  echo "<td>&nbsp;" . $row['subname'] . "</td>";
    	  echo "<td>&nbsp;" . $row['courseid'] . "</td>";
	   echo "<td>&nbsp;" . $row['subtype'] . "</td>";
	   echo "<td>&nbsp;" . $row['semester'] . "</td>";
  echo "</tr>&nbsp;";
  }
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  
  </tr>
</table>
<p>&nbsp;</p>
