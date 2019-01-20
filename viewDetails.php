<html>
<head>
<title>Details</title>
</head>
<body>

<?php 
$det=$_GET['search'];
$cat=$_GET['category'];
if($cat=="professor"){
echo "<table border='1' >
<tr>

    <th>Name</th>
    <th>ID</th> 
    <th>Course</th>
	<th>Contact</th>
</tr>";
}

else{
	echo "<table border='1' >
<tr>
    <th>Name</th>
    <th>ID</th> 
    <th>Course</th>
	<th>Contact</th>
</tr>";
	
}
 $mysqli = new mysqli("localhost", "root", "my_password", "management");
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

echo "<h1>Details of the person </h1><br> <br>";
if($cat=="professor")
$sql="select prof_name,prof_id,prof_course,prof_contact from $cat where prof_name='$det'";

else
	$sql="select stu_name,stu_id,stu_course,stu_contact from $cat where stu_name='$det'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		if($cat=="professor"){
		echo "<tr>";
        echo "<td>" . $row['prof_name'] . "</td>";
        echo "<td>" . $row['prof_id'] . "</td>";
		echo "<td>" . $row['prof_course'] . "</td>";
		echo "<td>" . $row['prof_contact'] . "</td>";
        echo "</tr>";  
		}
		
		else{
			
		echo "<tr>";
        echo "<td>" . $row['stu_name'] . "</td>";
        echo "<td>" . $row['stu_id'] . "</td>";
		echo "<td>" . $row['stu_course'] . "</td>";
		echo "<td>" . $row['stu_contact'] . "</td>";
        echo "</tr>";  
			
		}
	}
  
}
else
	echo "no results";

echo "</table> <br> <br>";

$mysqli->close();

?>
<form method="GET" action = "LoginWeb.php" name="myForm">
<button onclick="submitForm()" style="width:60px;height:35px">Back</button>
<script>
function submitForm(){
	document.forms["myForm"].submit(); //first submit
    document.forms["myForm"].reset(); //and then reset the form values
}

</script>
</body>
</html>
