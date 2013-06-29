<?php
include("conection.php");
$result = mysql_query("SELECT * FROM course");
$result1 = mysql_query("SELECT * FROM subject");
?>
<form name="form1" method="post" action="attendanceinsert.php">
  <p>
    <label for="course">Course</label>
    <label for="select"></label>

    <select name="course" >
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
    <label for="subject">Semester</label>
    <label for="select2"></label>

    <select name="semester">
      <option value="1">First Semester</option>
      <option value="2">Second Semester</option>
      <option value="3">Third Semester</option>
      <option value="4">Fourth Semester</option>
      <option value="5">Fifth Semester</option>
      <option value="6">Sixth Semester</option>
    </select>
  </p>
  <p>
    <label for="student">Subject</label>
    <label for="select3"></label>
    <select name="subject" id="select3">
    <?php
 while($row2 = mysql_fetch_array($result1))
  {
  echo "<option value='$row2[subid]'>$row2[subname]</option>";
  }
  ?>
    </select>
  </p>
  <p>
    <label for="totalclass">Total Classes</label>
    <input type="text" name="totalclass" id="totalclass">
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit">
    <input type="submit" name="button2" id="button2" value="Reset">
  </p>
</form>
