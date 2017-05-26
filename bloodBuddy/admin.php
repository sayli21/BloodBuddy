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

    if($_POST['Email']!='admin@gmail.com' || $_POST['Password']!='admin1234'){

             echo '<meta http-equiv="refresh" content="0; URL=error.php">';
    }
          
  
    

?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>voidmain Admin</title>

	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,400italic,800italic,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300,200,900,800,600,500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">  
    <link rel="stylesheet" type="text/css" href="css/hover-min.css"> 
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
       
<body data-spy="scroll" data-target="#fixed-collapse-navbar">
<style type="text/css">
    h3{
        margin-top: 50px;
        text-align: center;
        display: block;
        
    }    
     h4{
        border-top: 1px solid rgba(0,0,0,0.4);
        color: #f13544;
        padding: 4px;
        font-size: 20px;
        text-align: center;
    }
    .form {
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 300px;
    }
    button{
        display: inline-block;
        left: 20%;
    }
</style>

<div id="loader-container">
    <div class='loader'></div>
</div>

<section id="top_header">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 header_upper">
                    <div class="col-sm-6 contact_info">
                        <p>All red things don't signify danger #donateBlood</p>
                    </div>
                    <div class="col-sm-6 social_icon text-right">
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="icon hvr-shutter-out-horizontal">
                            <a href="#"><i class="fa fa-tumblr"></i></a>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 logo text-left">
                    <a href="#"><img src="img/logo.png" alt="LOGO"></a>
                </div>
                <div class="col-sm-8 header_bottom text-right">
                    <div class="col-md-6 col-sm-5 contact_info">
                        <a href="#"><i class="fa fa-phone"></i>Call us : 8652365328</a>
                    </div>
                    <div class="col-md-6 col-sm-7 contact_info text-right">
                        <p>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:say.uttarwar@gmail.com">say.uttarwar@gmail.com</a>
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <div id="navigation" data-spy="affix" data-offset-top="138">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default navbar-right">
                  <div class="container-fluid">
                    
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      
                    </div>
                    <div class="collapse navbar-collapse" id="fixed-collapse-navbar">
                      <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#contact">Contact Us</a>
                        </li> 
                        <li>
                            <a href="index.php">Logout</a>
                        </li>   
                        
                                                         
                      </ul>                     
                    </div>
                  </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section id="table">
<h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">welcome</h3>

    <h4 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">ADMIN</h4>
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



    echo " <br /><br /><br /><h3>DONOR TABLE:-</h3><br /><br />";

    $sql="SELECT * FROM donor";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    // output data of each row

    echo "<table class=form style='align:center; margin-left:80px;'>
        <tr style='padding:20px; align:center;'>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Donor Id</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Number</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Name</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Age</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Gender</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Address</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Email</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Blood Group</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Last Date of Donation</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Edit</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Delete</th>            
            
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {

         echo ' 
            <tr>    
                <td style="padding:20px;">'.$row["D_ID"].'</td>
                <td style="padding:20px;">'.$row["Number"].'</td>
                <td style="padding:30px;">'.$row["Name"].'</td>
                <td style="padding:20px;">'.$row["Age"].'</td>
                <td style="padding:20px;">'.$row["Gender"].'</td>
                <td style="padding:20px;">'.$row["Address"].'</td>
                <td style="padding:30px;">'.$row["Email"].'</td>
                <td style="padding:20px;">'.$row["Blood_Group"].'</td>
                <td style="padding:20px;">'.$row["Last_Donation_Date"].'</td>
                
                
                <td style="padding:20px;"><a href="edit.php?id=' . $row['D_ID'] . '&t=d"><input type="submit" value="Edit"></a></td>

                <td style="padding:10px;"><a href="delete.php?id=' . $row['D_ID'] . '&t=d"><input type="submit" value="Delete"></a></td>


            </tr>'; 
       
    }
    } else {
    echo "0 results";
    }
    echo'</table>';


    echo "<br> <br>";

    echo " <br /><br /><br /><br /><br /><h3>REC TABLE:-</h3><br /><br />";


    $sql="SELECT * FROM receiver";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    // output data of each row

    echo "<table class=form style='align:center; margin-left:80px;'>
        <tr>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Receiver Id</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Number</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Name</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Age</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Gender</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Address</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Email</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Blood Group</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Last Date of Receiving</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Edit</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Delete</th>   
            
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo '    
            <tr style="padding:20px;">    
                <td style="padding:20px;">'.$row["R_ID"].'</td>
                <td style="padding:20px;">'.$row["Number"].'</td>
                <td style="padding:20px;">'.$row["Name"].'</td>
                <td style="padding:20px;">'.$row["Age"].'</td>
                <td style="padding:20px;">'.$row["Gender"].'</td>
                <td style="padding:20px;">'.$row["Address"].'</td>
                <td style="padding:20px;">'.$row["Email"].'</td>
                <td style="padding:20px;">'.$row["Blood_Group"].'</td>
                <td style="padding:20px;">'.$row["Last_Received_Date"].'</td>
                
                
                <td style="padding:20px;"><a href="edit.php?id=' . $row['R_ID'] . '&t=r"><input type="submit" value="Edit"></a></td>

                <td style="padding:20px;"><a href="delete.php?id=' . $row['R_ID'] . '&t=r"><input type="submit" value="Delete"></a></td>


            </tr>';  
    }
    } else {
    echo "0 results";
    }

    echo'</table>';
    echo "<br><br><br><br><br><br><br><br><br>";
    echo " <br /><br /><br /><h3>BLOOD BANK TABLE:-</h3><br /><br />";

    $sql="SELECT * FROM bloodbank";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    // output data of each row

    echo "<table class=form style='align:center; margin-left:300px;'>
        <tr style='padding:20px; align:center;'>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Bld Bank Id</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Number</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Name</th>
            
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Email</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Address</th>

            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Edit</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Delete</th>            
            
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {

         echo ' 
            <tr>    
                <td style="padding:20px;">'.$row["B_ID"].'</td>
                <td style="padding:20px;">'.$row["Number"].'</td>
                <td style="padding:30px;">'.$row["Name"].'</td>
                <td style="padding:30px;">'.$row["Email"].'</td>
                <td style="padding:20px;">'.$row["Address"].'</td>

                
                
                <td style="padding:20px;"><a href="edit.php?id=' . $row['B_ID'] . '&t=bb"><input type="submit" value="Edit"></a></td>

                <td style="padding:10px;"><a href="delete.php?id=' . $row['B_ID'] . '&t=bb"><input type="submit" value="Delete"></a></td>


            </tr>'; 
       
    }
    } else {
    echo "0 results";
    }
    echo'</table>';


    echo "<br><br><br><br><br><br><br><br><br><br>";

    echo " <br /><br /><br /><br /><h3>HOSPITAL TABLE:-</h3><br /><br />";

    $sql="SELECT * FROM hospital";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    // output data of each row

    echo "<table class=form style='align:center; margin-left:270px;'>
        <tr style='padding:20px; align:center;'>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Hospital Id</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Number</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Name</th>
            
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Email</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Address</th>

            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Edit</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Delete</th>            
            
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {

         echo ' 
            <tr>    
                <td style="padding:20px;">'.$row["H_ID"].'</td>
                <td style="padding:20px;">'.$row["Number"].'</td>
                <td style="padding:30px;">'.$row["Name"].'</td>
                <td style="padding:30px;">'.$row["Email"].'</td>
                <td style="padding:20px;">'.$row["Address"].'</td>

                
                
                <td style="padding:20px;"><a href="edit.php?id=' . $row['H_ID'] . '&t=h"><input type="submit" value="Edit"></a></td>

                <td style="padding:10px;"><a href="delete.php?id=' . $row['H_ID'] . '&t=h"><input type="submit" value="Delete"></a></td>


            </tr>'; 
       
    }
    } else {
    echo "0 results";
    }
    echo'</table>';


    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

    echo " <br /><br /><br /><h3>Blood TABLE:-</h3><br /><br />";

    $sql="SELECT * FROM blood";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    // output data of each row

    echo "<table class=form style='align:center; margin-left:430px;'>
        <tr style='padding:20px; align:center;'>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Blood Group</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544;'>Quantity(ml)</th>
            <th style='padding:20px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Edit</th>
            <th style='padding:10px; text-align:center; border-bottom:1px solid #ccc; color:#f13544'>Delete</th>            
            
        </tr>";

    while($row = mysqli_fetch_assoc($result)) {

         echo ' 
            <tr>    
                <td style="padding:20px;">'.$row["Blood_Group"].'</td>
                <td style="padding:20px;">'.$row["Quantity"].'</td>
                
                <td style="padding:20px;"><a href="edit.php?id=' . $row['Blood_Group'] . '&t=b"><input type="submit" value="Edit"></a></td>

                <td style="padding:10px;"><a href="delete.php?id=' . $row['Blood_Group'] . '&t=b"><input type="submit" value="Delete"></a></td>


            </tr>'; 
       
    }
    } else {
    echo "0 results";
    }
    echo'</table>';


    echo "<br> <br>";
    mysqli_close($conn);


?>



    
</section>
<div class="clearfix"></div>
<section id="contact">
<div id="above-footer">

 <div class="container">
     <div class="row">
         <div class="col-md-8 col-sm-7">
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="2s">
                    <div class="footer-logo">
                        <img src="img/logo_footer.png" alt="logo">
                        <p>
                            <span class="hidden-xs hidden-sm">No doubt the first and foremost advantage of donating blood is the exalted feeling of saving someone's life. If we donate the little excess blood in our body, it could save someone's life without creating any problem for us.</span>
                        </p>
                    </div>    
                </div>             
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                    <div class="row empty hidden-sm hidden-xs" style="height:60px; padding:50px 0"></div>
                    <div class="footer-above">
                    	<div class="footer-info-box">
                            <div class="footer_icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="footer_iconinfo">
                                <h2>ADDRESS</h2>
                                <p>Sardar PAtel Institute of Technology</p>
                            </div>
                        </div>
                        <div class="footer-info-box">
                            <div class="footer_icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="footer_iconinfo">
                                <h2>Email</h2>
                                <p>say.uttarwar@gmail.com</p>
                            </div>
                        </div>
                        <div class="footer-info-box">
                            <div class="footer_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="footer_iconinfo">
                                <h2>PHONE</h2>
                                <p>8652365328</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-5 footer-form-base">
             <div class="footer-form wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                 <div class="top-head text-center">
                     <h1>Contact for Donation</h1>
                     <h4>Lorem ipsum dolor sit amet, ea soluta alte</h4>
                    </div>
                    <div class="form-form">
                    	<div class="expMessage"></div>
                        <form id="contactus-form">
                             <label for="name">Name:</label>
                             <input type="text" name="formInput[name]" id="name" class="form-control" required>
                                
                             <label for="email">Email:</label>
                             <input type="email" name="formInput[email]" id="email" class="form-control" required>
                                
                             <label for="message">Message:</label>
                             <textarea name="formInput[message]" id="message" class="form-control" rows="4"  required></textarea>
                             <div class="form-btn text-center">
                             <button type="submit" class="btn btn-default footer-form-btn">Submit This</button>
                             </div>
                             <input type="hidden" name="action" value="submitform">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="footer">
	<div class="container">
    	<div class="row">
            <div class="col-sm-8 footer_text wow fadeIn" data-wow-duration="2s">
            	<a href="#">© Copyright 2016 by Blood Buddy. All rights reserved. </a>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.appear.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>