<?php
session_start(); 
include("header.php"); 
include("conection.php");

//echo "lec name".$_SESSION["lecname"];
?>
<section id="page">
<header id="pageheader" class="normalheader">
<h2 class="sitedescription">
  </h2>
</header>

<section id="contents">

<article class="post">
  <header class="postheader">
  <h2>Lectures Menu</h2>
  </header>
  <section class="entry">
  <form action="" method="post" class="form">
   <p class="textfield"><a href="course.php">Course</a></p><hr />
   <p class="textfield"><a href="subject.php">Subject</a></p><hr />
  <p class="textfield"><a href="student.php">Student </a></p><hr />
   <p class="textfield"><a href="attendanceview.php">Attendance</a></p><hr />
   <p class="textfield"><a href="examview.php">Examination</a></p><hr />
   <div class="clear"></div>
</form>
  </section>
</article>

<article class="post">
  <header class="postheader"></header>
  <section class="entry">
    <div class="clear"></div>
</section>
</article>



</section>


<?php 
include("lecturemenu.php");
include("footer.php"); ?>