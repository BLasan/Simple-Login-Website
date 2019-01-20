

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Student management system</title>
</head>
<body background="lback.jpg">

<h1 style="text-align:center;color:blue;">Welcome to LMS</h1>
<br>
<img src="Ucsc.jpg" width="280" height="230"  alt="Logo of a UCSC" style="float:left" / >
<div class="topnav" id="myTopnav">
  <a href="../test.php" class="active">Home</a>
  <a href="../student.php">Student</a>
  <a href="../professor.php">Professors</a>

  <div class="dropdown">
 
    <button class="dropbtn">Registration </button>
	
    <div class="dropdown-content" style="margin-top:-45px;">

     <a href="../register.php">Student Registration</a>
      <a href="../staffReg.php">Staff Registration</a>
	  
    </div>
  </div> 
  
</div>
<br>
<form  style="margin-left:500px;" method="GET" action = "viewDetails.php" name="myform">
  <input type="text" placeholder="Enter category" name="category" style="width:400px;height:40px;text-align:left;font-size:20px;">
  <input type="text" placeholder="Search.." name="search" style="width:500px;height:40px;text-align:left;font-size:20px;">
  <button type="submit" style="height:40px;width:60px" onclick="submitForm()" >Button</i></button>
  
 
  
</form>
<?php

function submitForm(){
	document.forms["myForm"].submit(); //first submit
    document.forms["myForm"].reset(); //and then reset the form values
}

?>

<div class="row">
  <div class="column" style="width:33.33%">
    <h2>Vision</h2>
    <p>Be a Global Leader in Computing, Advancing the Frontiers of new knowledge through Learning and Research.</p>
  </div>
  
  <div class="column">
    <h2>Mission</h2>
    <p>To advance and enhance computing knowledge, fostering global strategic alliances, promoting cross disciplinary research, producing socially responsible professionals with entrepreneurial skills, leadership qualities and integrity contributing  to  position the country as a knowledge hub in the region.</p>
  </div>
</div> 
</body>
</html>