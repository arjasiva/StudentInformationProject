<?php
include("conection.php");

  //$listvals=$_POST['mylist'];
  // $n=count($listvals);
  $subid=$_POST['subid'];
    $subname =$_POST['subname'];
	$comment =$_POST['comment'];
//echo  $_POST["totstdnt"];
  for($i=0;$i<$_POST["totsubject"];$i++)
  {
     //echo "Item".$stuid[$i]."<br>\n";
	 $sql="INSERT INTO subject (subid, subname, subtype, comment)
VALUES
('$subid[$i]', '$_POST[subname]', '$_POST[subtype]', '$comment[$i]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo "Record inserted Successfully...";
  }
echo "1 record added";
	 
   }

$rescourse = mysql_query("SELECT * FROM course where courseid='$_POST[course]'");
while($row1 = mysql_fetch_array($rescourse))
  {
	$courseid =   $row1["courseid"];
	$coursename =   $row1["coursename"];
  }
  $resclass = mysql_query("SELECT * FROM subject where subid='$_POST[subject]'");
while($row2 = mysql_fetch_array($resclass))
  {
	$subid =   $row2["subid"];
	$subname =   $row2["subname"];
  }
  
    $restotsub = mysql_query("SELECT * FROM subject 
 where courseid='$_POST[course]' AND semester ='$_POST[semester]'");
$tsubject = mysql_num_rows($restotsub);
?>
<table width="690" border="1">
  <tr>
    <td width="329">Course: <?php echo $coursename; ?></td>
    <td width="345">Subject Type: <?php echo $_POST["subtype"]; ?></td>
  </tr>
  <tr>
    <td>Semester: <?php echo $_POST["semester"]; ?></td>
    <td>Total Subjects: <?php echo $tsubject; ?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="690" border="1">
<form id="form1" name="form1" method="post" action="">
  <tr align="center">
    <td width="222"><strong>SubjectID</strong></td>
    <td width="210"><strong>Subject name</strong></td>
    <td width="236"><strong>Comment</strong></td>
  </tr>
  <input name="subtype" type="hidden" size="10" value="<?php echo $_POST[subtype]; ?>"/>
 
  <?php
 while($rowa = mysql_fetch_array($restotstrec))
  {
  ?>
  <input name="subid[]" type="hidden" size="10" value="<?php echo $rowa[subid]; ?>"/>
  <tr>
    <td><div align="center"></div></td>
    <td><label for="textfield2"></label>
      <div align="center">
        <input type="text" name="textfield2" id="textfield2">
      </div></td>
    <td><label for="textfield"></label>
      <div align="center">
        <label for="textarea"></label>
        <textarea name="textarea" id="textarea" cols="45" rows="1"></textarea>
      </div></td>
  </tr>
  <?php
  }
  ?>
      
  <tr>
    <td colspan="3"><div align="right">
        <input type="submit" name="Submit" id="Submit" value="Insert records"> 
        <input type="submit" name="button2" id="button2" value="Reset">
      
    </div></td>
  </tr>
  </form>
</table>
<p>&nbsp;</p>
