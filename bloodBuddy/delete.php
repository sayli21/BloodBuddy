<!DOCTYPE html>
<html>
<head>
	<title></title>
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


	if($_GET['t']=="d")
		{
			$sql="DELETE FROM donor WHERE D_ID=".$_GET['id'];


			$result = mysqli_query($conn, $sql);
		}
	elseif ($_GET['t']=="r") {
			$sql="DELETE FROM receiver WHERE R_ID=".$_GET['id'];


			$result = mysqli_query($conn, $sql);
		
	}


	elseif ($_GET['t']=="bb") {
			$sql="DELETE FROM bloodbank WHERE B_ID=".$_GET['id'];


			$result = mysqli_query($conn, $sql);
		
	}
	elseif ($_GET['t']=="h") {
			$sql="DELETE FROM hospital WHERE H_ID=".$_GET['id'];


			$result = mysqli_query($conn, $sql);
		
	}
	elseif ($_GET['t']=="b") {
			$sql="DELETE FROM blood WHERE Blood_Group=".$_GET['id'];


			$result = mysqli_query($conn, $sql);
		
	}



header("Location: index.php");


?>


</body>
</html>

