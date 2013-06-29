<?php
include("header.php");
include("conection.php");

$result = mysql_query("SELECT * FROM attendance");
?>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
Attendance Details.  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>Attendance  Details</h2>
  </header>
  <section class="entry">
<table width="729" border="1">
  <tr>
    <td width="73">Sl.No</td>
    <td width="89">Student ID</td>
    <td width="136">Student Name</td>
    <td width="77">Subject</td>
    <td width="96">Total Classes</td>
    <td width="127">Attended Classes</td>
    <td width="85">Percentage</td>
       <td width="106"><strong>Action</strong></td>
  </tr>
   <?php
	  $i =1;
  while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>&nbsp;"  . $i . "</td>";
  echo "<td>&nbsp;" . $row['studid'] . "</td>";
    	  echo "<td>&nbsp;" . $row['courseid'] . "</td>";
	   echo "<td>&nbsp;" . $row['subtype'] . "</td>";
	   echo "<td>&nbsp;" . $row['totalclasses'] . "</td>";
	     echo "<td>&nbsp;" . $row['attendedclasses'] . "</td>";  
		 echo "<td>&nbsp;" . $row['percentage'] . "</td>";
	   	   echo "<td>&nbsp; <img src='images/view.png' width='32' height='32' /><img src='images/edit.png' width='32' height='32' /><img src='images/delete.png' width='32' height='32' /> . </td>";
  echo "</tr>&nbsp;";
  $i++;
  }
  
?>
 <tr>
    <td><img src="images/previous.png" alt="" width="32" height="32" /></td>
    <td><a href="courseinsert.php"><img src="images/add.png" alt="" width="32" height="32" /></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><img src="images/next.png" alt="" width="32" height="32" /></td>
    
  </tr>
  </table>
  </section>
</article>


</section>


<?php 
include("adminmenu.php");
include("footer.php"); ?>