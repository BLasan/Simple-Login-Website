<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Staff Registration</title>
</head>
<body>
<form action="staffReg.php" method="GET" id="myForm">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

	<label for="name" style="color:blue"><b>Name</b></label>
    <input style="margin-left:101" type="text" placeholder="Enter name.." name="name"  required >
	<br>
	<label for="course" style="color:blue"><b>ID</b></label>
    <input style="margin-left:123" type="text" placeholder="Enter id" name="id" required >
	<br>
    <label for="email" style="color:blue"><b>Email</b></label>
    <input style="margin-left:100" type="text" placeholder="Enter Email" name="email" required >
	<br>
    <label for="email" style="color:blue"><b>Employment</b></label>
    <input style="margin-left:53" type="text" placeholder="Enter employment" name="employment" required >
    <br>
    <label for="psw" style="color:blue"><b>Password</b></label>
    <input style="margin-left:75 " type="password" placeholder="Enter Password" name="psw"  id="psw1" required>
    <br>
    <label for="psw-repeat" style="color:blue"><b>Repeat Password</b></label>
    <input style="margin-left:23" type="password" placeholder="Repeat Password" name="psw-repeat" id="psw2" required>
	<br>
	<label for="contact" style="color:blue" id="con_text"><b>Contact</b></label>
    <input style="margin-left:87" type="text" placeholder="Contact..." name="contact" id="contacts"  required>
	<br>
	<label for="contact" style="color:blue" id="con_text"><b>Address</b></label>
    <input style="margin-left:85" type="text" placeholder="Address..." name="address" id="address"  required>
	<br>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button onclick="submitForm()"  type="submit" class="registerbtn" name="submit">Register</button>
  </div>

  
  <div class="container signin">
    <p>Already have an account? <a href="../signin.php">Sign in</a>.</p>
  </div>
</form>
<br>
<form method="GET" action = "LoginWeb.php" name="myform">
<button  style="width:60px;height:35px">Back</button>
</form>

 <?php
 
  if(isset($_REQUEST['submit']))
    {
		$email=$_GET['email'];
		$name=$_GET['name'];
		$id=$_GET['id'];
		$contact=$_GET['contact'];
		$password=$_GET['psw'];
		$repeat=$_GET['psw-repeat'];
		$address=$_GET['address'];
		$employment=$_GET['employment'];
   
		if($password==$repeat&&strlen($contact)==10){
		$mysqli = new mysqli("localhost", "root", "my_password", "management");
  
        if ($mysqli->connect_error) {
          die("Connection failed: " . $mysqli->connect_error);
          }
        $sql="insert into staff(staff_id,staff_name,staff_emp,staff_contact,staff_address) values($id,'$name','$employment',$contact,'$address')";
        $sql1="insert into emailPassword(email,password) values('$email','$password')";
		$result1=$mysqli->query($sql1);
        $result = $mysqli->query($sql);
		if($result==TRUE&&$result1==TRUE)
			echo "Successfully Added";
		
		$mysqli->close();
		}
		
		else
		{
	        if($password!=$repeat){
			echo "Password does not match";
			
			}
		
		    else if(strlen($contact))
				echo "Enter a valid contact";
			
		}

	}
	 
?>
<script>
function myFunction() {
  document.getElementById("myForm").submit();
  document.getElementById("myForm").reset();
}
</script>
</body>
</html>