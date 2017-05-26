<!DOCTYPE html>
<html>
<head>
	<title>
		Receiver-Blood Donation Database
	</title>

	<link rel="stylesheet" type="text/css" href="css/r_stylesheet.css">
</head>
<body>
 <h3 align="center">New Receiver Entry</h3>
<br>
<br>
<p>Please Fill The form</p>
<form action="" method="post">
<p>Receiver ID: </p><input type="number" name="R_Id" required ><br>
<p>Name: </p><input type="text" name="Name" placeholder="Eg:John Snow"><br>
<p>Email: </p><input type="email" name="Email"><br>
<p>Number: </p><input type="number" name="Number" ><br>
<p>Age: </p><input type="number" name="Age" ><br>
<p>Gender: </p><input type="text" name="Gender"><br>
<p>Address: </p><input type="text" name="Address" style="height:200px; width:300px; "><br>
<p>Blood Group: </p><input type="text" name="Blood_Group" ><br>
<p>Last Date of Recepient: </p><input type="date" name="Last_Rec_Date" ><br>
<p>Medical Condition: </p><input type="text" name="Medical_Condition" ><br>

  <br>
  <input type="submit" value="Submit" name="SubmitButton">
</form>

<?php 

if(isset($_POST['SubmitButton'])){

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="dbms";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$dbname);

	// Check connection
	if (!$conn) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully <br />";


	echo " <br /><br><h3>Inserting</h3><br /><br />";

	
$name = mysql_real_escape_string($_POST["Name"]);
$r_id= mysql_real_escape_string($_POST["R_Id"]);

$email = mysql_real_escape_string($_POST["Email"]);
$medical= mysql_real_escape_string($_POST["Medical_Condition"]);

$age = mysql_real_escape_string($_POST["Age"]);
$blood= mysql_real_escape_string($_POST["Blood_Group"]);

$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);

$date = mysql_real_escape_string($_POST["Last_Rec_Date"]);
$gender= mysql_real_escape_string($_POST["Gender"]);

$sql="INSERT INTO `Rec` (`R_Id`, `Name`, `Email`, `Medical_Condition`, `Age`, `Blood_Group`, `Number`, `Address`, `Last_Rec_Date`, `Gender`) VALUES ('".$r_id."', '".$name."', '".$email."', '".$medical."', '".$age."', '".$blood."', '".$number."', '".$address."', '".$date."', '".$gender."')";

	if(!$result = mysqli_query($conn, $sql))
		echo "Not working";
	else
		echo "Inserted.";

mysqli_close($conn);

header("Location: index.php");
}
 ?>
</body>
</html>