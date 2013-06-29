<?php
include("conection.php");

$semester=$_REQUEST['semester'];

$query="select subid,subname from subject where courseid=$semester";
$result=mysql_query($query);

?>
<select name="select3">
<option>Select Subject</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value><?=$row['city']?></option>
<? } ?>
</select>
