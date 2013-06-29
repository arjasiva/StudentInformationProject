<?php
include("conection.php");
$sql="INSERT INTO course (courseid, coursename, comment, coursekey)
VALUES
('$_POST[courseid]','$_POST[coursename]','$_POST[comment]','$_POST[coursekey]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

$result = mysql_query("SELECT * FROM course");
?> 
<form name="form1" method="post" action="">
  <p>
    <label for="textfield">Course ID</label>
    <input type="text" name="courseid" id="textfield">
  </p>
  <p>
    <label for="textfield2">Course Name</label>
    <input type="text" name="coursename" id="textfield2">
  </p>
  <p>
    <label for="textarea">Comment</label>
    <textarea name="comment" id="textarea" cols="45" rows="5"></textarea>
  </p>
  <p>
    <label for="coursekey">Course Key</label>
    <input type="text" name="coursekey" id="coursekey">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">
  </p>
</form>
<table width="298" border="1">
  <tr>
    <th width="81" scope="col">Course ID</th>
    <th width="103" scope="col">Course Name</th>
    <th width="92" scope="col">Course Key</th>
  </tr>
  <?php
  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>&nbsp;" . $row['courseid'] . "</td>";
  echo "<td>&nbsp;" . $row['coursename'] . "</td>";
   echo "<td>&nbsp;" . $row['coursekey'] . "</td>";
  echo "</tr>&nbsp;";
  }
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

</table>
<p>&nbsp;</p>
