<?php
include("conection.php");
$result = mysql_query("SELECT * FROM course");
$result1 = mysql_query("SELECT * FROM studentdetails where semester='$_POST[cmbsemester]' AND courseid='$_POST[cmbcourse]' ");

echo "<table border='1'>
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Fathers Name</th>
<th>Gender</th>
<th>Contact no</th>
<th>Date of birth</th>
</tr>";

while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['studid'] . "</td>";
  echo "<td>" . $row['studfname']. " ". $row['studlname']  . "</td>";
  echo "<td>" . $row['fathername'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['contactno'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "</tr>";
  }

?>

<form name="form1" method="post" action="">
  <p>
    <label for="cmbsemester">Semester</label>
    <select name="cmbsemester" id="cmbsemester">
    <option value="1">First Semester</option>
      <option value="2">Second Semester</option>
      <option value="3">Third Semester</option>
      <option value="4">Fourth Semester</option>
      <option value="5">Fifth Semester</option>
      <option value="6">Sixth Semester</option>
    </select>
  </p>
  <p>
    <label for="cmbcourse">Course</label>
    <select name="cmbcourse" id="cmbcourse">
    <option value="">Course Details</option>
      <?php
 while($row1 = mysql_fetch_array($result))
  {
  echo "<option value='$row1[courseid]'>$row1[coursename]</option>";
  }
  ?>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
  </p>
</form>
<p>&nbsp;</p>
