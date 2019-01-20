<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Sign in</title>
</head>
<body>
<form action="signin.php" method="GET" name="myform">
  <div class="container">
    <h1>Sign in with Email</h1>
    <br>
    <hr>
	<label for="name" style="color:blue"><b>Email</b></label>
    <input style="margin-left:101" type="text" placeholder="Enter email.." name="email"  required >
	<br>
	<label for="course" style="color:blue"><b>Password</b></label>
    <input style="margin-left:76" type="password" placeholder="Enter password.." name="password" required >
	<br>
    <hr>
    <button onclick="submitForm()"  type="submit"  name="sign">Sign in</button>
  </div>
  </form>
 <br> <br> 
 <form method="GET" action = "register.php" name="myForm">
<button onclick="submitForm()" style="width:60px;height:35px">Back</button>
  <?php
  
  if(isset($_REQUEST['sign'])){
	  $email=$_GET['email'];
	  $password=$_GET['password'];
	  $mysqli = new mysqli("localhost", "root", "my_password", "management");
  
        if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
          }
	  $sql="select email,password from emailPassword where email='$email' and password='$password'";
	  $result = $mysqli->query($sql);
	  if($result->num_rows>0){
		  $row = $result->fetch_assoc();;
		  if($email==$row['email']&&$password==$row['password'])
			  echo "Success";
		  
		  else
			  echo "Password and Email not matching";
		    
	  }
	  
	  else
		  echo "Password and Email not matching";
	  
	  $mysqli->close();
	    
  }
  
  function submitForm(){
	
	  
	document.forms["myform"].submit(); //first submit
    document.forms["myform"].reset(); //and then reset the form values 
}
  
  ?>
  </body>
  </html>