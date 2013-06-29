<?php
include("conection.php");

  //$listvals=$_POST['mylist'];
  // $n=count($listvals);
  $stuid=$_POST['stuid'];
    $attclass =$_POST['attclass'];
	$percent =$_POST['percentage'];
	$comment =$_POST['comment'];
//echo  $_POST["totstdnt"];
  for($i=0;$i<$_POST["totstdnt"];$i++)
  {
     //echo "Item".$stuid[$i]."<br>\n";
	 $sql="INSERT INTO attendance (studid,subid,totalclasses,attendedclasses,percentage,comment)
VALUES
('$stuid[$i]','$_POST[subid]','$_POST[totclass]','$attclass[$i]','$percent[$i]','$comment[$i]')";

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
  
    $restotst = mysql_query("SELECT * FROM studentdetails 
 where courseid='$_POST[course]' AND semester ='$_POST[semester]'");
$tstudent = mysql_num_rows($restotst);

  $restotstrec = mysql_query("SELECT * FROM studentdetails 
 where courseid='$_POST[course]' AND semester ='$_POST[semester]'");

?>
<table width="1000" border="1">
  <tr>
    <td>Course : <?php echo $coursename; ?></td>
    <td>Total Classes: <?php echo $_POST["totalclass"]; ?></td>
  </tr>
  <tr>
    <td>Semester: <?php echo $_POST["semester"]; ?>'th Semester</td>
    <td>Total Students : <?php echo $tstudent; ?> </td>
  </tr>
  <tr>
    <td>Subject: <?php echo $subname; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="1000" border="1">
<form id="form1" name="form1" method="post" action="">
  <tr align="center">
    <td width="159"><strong>Roll no</strong></td>
    <td width="262"><strong>Name</strong></td>
    <td width="144"><strong>Classes attended</strong></td>
    <td width="129"><strong>Percentage</strong></td>
    <td width="272"><strong>Comment</strong></td>
  </tr>
  
  	<input name="subid" type="hidden" size="10" value="<?php echo $_POST[subject]; ?>"/>
    	<input name="totclass" type="hidden" size="10" value="<?php echo $_POST[totalclass]; ?>"/>
  
        <input name="totstdnt" type="hidden" size="10" value="<?php echo $tstudent; ?>"/>
 <?php
 
 while($rowa = mysql_fetch_array($restotstrec))
  {
  ?>
  <input name="stuid[]" type="hidden" size="10" value="<?php echo $rowa[studid]; ?>"/>
  <tr align="center">
    <td height="39" align="left">&nbsp;<?php echo $rowa[studid]; ?></td>
    <td align="left">&nbsp;
		<?php echo $rowa[studfname]. " ". $rowa[studlname] ; ?></td>
    <td>
      <label for="textfield"></label>
      <input name="attclass[]" type="text" id="textfield" size="10" />
</td>
    <td>
      <label for="textfield2"></label>
      <input name="percentage[]" type="text" id="textfield2" size="10" />
</td>
    <td>
      <label for="textarea"></label>
      <textarea name="comment[]" id="textarea" cols="40" rows="1"></textarea>
</td>
  </tr>
  <?php
  }
  ?>
      
      <tr align="right">
    <td height="39" colspan="5"><input type="submit" name="button2" id="button2" value="Insert Records" />      
      <input type="submit" name="reset" id="reset" value="Reset" /></td>
    </tr>
  </form>
</table>
<p>&nbsp;</p>