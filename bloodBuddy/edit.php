<!DOCTYPE html>
<html>
<head>
	<title>
		Edit Page
	</title>
</head>
<body>


<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="bloodbuddy";

// Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br />";

    $sql="SELECT * FROM donor WHERE D_ID=".$_GET['id'];;

    

    $result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

?>


<h3 align="center">Edit Page-Donor Info </h3>


<br>


<br>
<p>Donor ID:<?php echo $_GET['id'];?></p>
<form action="" method="post">

<p>Name: </p><input type="text" name="Name" required value="<?php echo $row["Name"];?>"><br>
<p>Email: </p><input type="email" name="Email" value="<?php echo $row["Email"];?>"><br>
<p>Number: </p><input type="number" name="Number" value="<?php echo $row["Number"];?>"><br>
<p>Age: </p><input type="number" name="Age" min="18" value="<?php echo $row["Age"];?>"><br>
<p>Gender: </p><input type="text" name="Gender" value="<?php echo $row["Gender"];?>"><br>
<p>Address: </p><input type="text" name="Address" style="height:200px; width:300px; " value="<?php echo $row["Address"];?>"><br>
<p>Blood Group: </p><input type="text" name="Blood_Group" value="<?php echo $row["Blood_Group"];?>"> <br>
<p>Last Date of Donation: </p><input type="date" name="Last_Donation_Date"  value="<?php echo $row["Last_Donation_Date"];?>"><br>



  <br>
  <input type="submit" value="Submit" name="SubmitButton">
</form>

<?php 

if(isset($_POST['SubmitButton'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="bloodbuddy";

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
$d_id= mysql_real_escape_string($_GET['id']);

$email = mysql_real_escape_string($_POST["Email"]);

$age = mysql_real_escape_string($_POST["Age"]);
$blood= mysql_real_escape_string($_POST["Blood_Group"]);

$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);

$date = mysql_real_escape_string($_POST["Last_Donation_Date"]);
$gender= mysql_real_escape_string($_POST["Gender"]);

$sql="UPDATE donor SET Name = '".$name."', Email = '".$email."', Age = '".$age."', Blood_Group = '".$blood."', Number = '".$number."', Address = '".$address."', Last_Donation_Date = '".$date."', Gender = '".$gender."' WHERE donor.D_ID = ".$d_id."";


$result=mysqli_query($conn, $sql);

mysqli_close($conn);

header("Location: index.php");
}

?>	
</body>
</html>