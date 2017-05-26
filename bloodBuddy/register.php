
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>voidmain Register</title>

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
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
       
<body data-spy="scroll" data-target="#fixed-collapse-navbar">
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
                            <a href="login.php">Login</a>
                        </li>           
                        <li>
                            <a href="#contact">Contact Us</a>
                        </li>                        
                      </ul>                     
                    </div>
                  </div>
                </nav>
            </div>
        </div>
    </div>
                    
</section>

<section id="register">
<div class="form">
 <div class="form-title">
            <h3>Register</h3>
        </div>
<div id="tabbox">
    <a href="#" id="donor" class="tab select">Donor</a>
    <a href="#" id="receiver" class="tab receiver">Receiver</a>
    <a href="#" id="hospital" class="tab hospital">Hospital</a>
    <a href="#" id="bb" class="tab bb">Blood Bank</a>
 </div>
 <div id="donor-form">
 <p>Hey There ! Let's get started !</p>
    <form action="" method="post">
        <input type="number" name="D_ID" required placeholder="ID" >
        <input type="number" name="Number" placeholder="Mobile Number"><br>
        <input type="text" name="Name" required placeholder="FirstName"><br>
        <input type="number" name="Age" min="18" placeholder="Age" >
        <input class="gender" type="text" name="Gender" placeholder="Male/Female"><br>
        <input type="text" name="Address" placeholder="Address" style="height:100px; width:300px; "><br>
        <input type="email" name="Email" placeholder="Email"><br>
        <input type="text" name="Blood_Group" placeholder="Blood Group"><br>
        <input type="date" name="Last_Donation_Date" placeholder="Last Donation Date"><br>
        <input type="password" name="Password" placeholder="Password">
        <button name="SubmitButtond" class="btn btn-default hvr-shutter-out-horizontal"> 
                        DONE
                    </button>  
    </form>  
    </div>    
    <?php 

if(isset($_POST['SubmitButtond'])){

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
    

    
$name = mysql_real_escape_string($_POST["Name"]);
$did= mysql_real_escape_string($_POST["D_ID"]);

$email = mysql_real_escape_string($_POST["Email"]);
$age = mysql_real_escape_string($_POST["Age"]);
$blood= mysql_real_escape_string($_POST["Blood_Group"]);

$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);

$date = mysql_real_escape_string($_POST["Last_Donation_Date"]);
$gender= mysql_real_escape_string($_POST["Gender"]);
$pwd=mysql_real_escape_string($_POST["Password"]);
$type='d';


$sql="INSERT INTO `donor` (`D_ID`, `Number`, `Name`, `Age`, `Gender`, `Address`, `Email`, `Blood_Group`, `Last_Donation_Date`, `Password`,`Type`) VALUES ('".$did."','".$number."', '".$name."', '".$age."', '".$gender."', '".$address."', '".$email."', '".$blood."', '".$date."','".$pwd."','".$type."')";

    if(!$result = mysqli_query($conn, $sql))
        echo "Not working";
$sql1="INSERT INTO `login` (`Email`, `Password` , `Type`) VALUES ('".$email."','".$pwd."','".$type."')";
        if(!$result = mysqli_query($conn, $sql1))
        echo "Not working";

mysqli_close($conn);


}
 ?>    
    
    <div id="receiver-form">
    <p>Hey There ! Let's get started !</p>
    <form action="" method="post">
        <input type="number" name="R_ID" required placeholder="ID" >
        <input type="number" name="Number" placeholder="Mobile Number"><br>
        <input type="text" name="Name" required placeholder="FirstName"><br>
        <input type="number" name="Age" min="18" placeholder="Age" >
        <input class="gender" type="text" name="Gender" placeholder="Male/Female"><br>
        <input type="text" name="Address" placeholder="Address" style="height:100px; width:300px; "><br>
        <input type="email" name="Email" placeholder="Email"><br>
        <input type="text" name="Blood_Group" placeholder="Blood Group"><br>
        <input type="date" name="Last_Received_Date" placeholder="Last Donation Date"><br>
        <input type="password" name="Password" placeholder="Password">
        <button name="SubmitButtonr" class="btn btn-default hvr-shutter-out-horizontal"> 
                        DONE
                    </button> 
  
</form>
</div>
<?php 

if(isset($_POST['SubmitButtonr'])){

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
   

    
$name = mysql_real_escape_string($_POST["Name"]);
$rid= mysql_real_escape_string($_POST["R_ID"]);

$email = mysql_real_escape_string($_POST["Email"]);
$age = mysql_real_escape_string($_POST["Age"]);
$blood= mysql_real_escape_string($_POST["Blood_Group"]);

$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);

$date = mysql_real_escape_string($_POST["Last_Received_Date"]);
$gender= mysql_real_escape_string($_POST["Gender"]);
$pwd=mysql_real_escape_string($_POST["Password"]);
$type='r';
$sql="INSERT INTO `receiver` (`R_ID`, `Number`, `Name`, `Age`, `Gender`, `Address`, `Email`, `Blood_Group`, `Last_Received_Date`, `Password` , `Type`) VALUES ('".$rid."','".$number."', '".$name."', '".$age."', '".$gender."', '".$address."', '".$email."', '".$blood."', '".$date."','".$pwd."','".$type."')";

    if(!$result = mysqli_query($conn, $sql))
        echo "Not working";
$sql1="INSERT INTO `login` (`Email`, `Password` , `Type`) VALUES ('".$email."','".$pwd."','".$type."')";
if(!$result = mysqli_query($conn, $sql1))
        echo "Not working";

mysqli_close($conn);


}
 ?>
<div id="hospital-form">
<p>Hey There ! Let's get started !</p>
    <form action="" method="post">
        <input type="text" name="H_ID" placeholder="Hospital Id"><br>
        <input type="number" name="Number" placeholder="number"><br>
        <input type="text" name="Name" placeholder="Eg:John Snow"><br>
        <input type="email" name="Email" placeholder="email"><br>
        <input type="text" name="Address" style="height:200px; width:300px; " placeholder="Address"><br>
        <input type="password" name="Password" placeholder="password">
        <button name="SubmitButtonh" class="btn btn-default hvr-shutter-out-horizontal"> 
                        DONE
                    </button> 
    </form>
</div>
<?php 

if(isset($_POST['SubmitButtonh'])){

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
    

    
$name = mysql_real_escape_string($_POST["Name"]);
$hid= mysql_real_escape_string($_POST["H_ID"]);

$email = mysql_real_escape_string($_POST["Email"]);



$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);


$pwd=mysql_real_escape_string($_POST["Password"]);
$type='h';
$sql="INSERT INTO `hospital` (`H_ID`, `Number`, `Name`, `Email`, `Address`, `Password` , `Type`) VALUES ('".$hid."','".$number."', '".$name."','".$email."', '".$address."','".$pwd."','".$type."')";

    if(!$result = mysqli_query($conn, $sql))
        echo "Not working";
$sql1="INSERT INTO `login` (`Email`, `Password` , `Type`) VALUES ('".$email."','".$pwd."','".$type."')";    
if(!$result = mysqli_query($conn, $sql1))
        echo "Not working";

mysqli_close($conn);


}
 ?>
<div id="bb-form">
<p>Hey There ! Let's get started !</p>
    <form action="" method="post">
        <input type="text" name="B_ID" placeholder="Blood Bank Id"><br>
        <input type="number" name="Number" placeholder="number"><br>
        <input type="text" name="Name" placeholder="Name"><br>
        <input type="email" name="Email" placeholder="email"><br>
        <input type="text" name="Address" style="height:200px; width:300px; " placeholder="Address"><br>
        <input type="password" name="Password" placeholder="password">
        <button name="SubmitButtonb" class="btn btn-default hvr-shutter-out-horizontal"> 
                        DONE
                    </button> 
    </form>
    </div>
    <?php 

if(isset($_POST['SubmitButtonb'])){

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
   
    
$name = mysql_real_escape_string($_POST["Name"]);
$bid= mysql_real_escape_string($_POST["B_ID"]);

$email = mysql_real_escape_string($_POST["Email"]);



$number = mysql_real_escape_string($_POST["Number"]);
$address= mysql_real_escape_string($_POST["Address"]);


$pwd=mysql_real_escape_string($_POST["Password"]);
$type='b';
$sql="INSERT INTO `bloodbank` (`B_ID`, `Number`, `Name`, `Email`, `Address`, `Password` , `Type`) VALUES ('".$bid."','".$number."', '".$name."','".$email."', '".$address."','".$pwd."','".$type."')";

    if(!$result = mysqli_query($conn, $sql))
        echo "Not working";
$sql1="INSERT INTO `login` (`Email`, `Password` , `Type`) VALUES ('".$email."','".$pwd."','".$type."')";   
if(!$result = mysqli_query($conn, $sql1))
        echo "Not working";

mysqli_close($conn);


}
 ?>
</div>
</section>
<div class="clearfix"></div>
<div id="above-footer">

 <div class="container">
     <div class="row">
         <div class="col-md-8 col-sm-7">
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="2s">
                    <div class="footer-logo">
                        <img src="  img/logo_footer.png" alt="logo">
                        <p>
                            Lorem ipsum dolor sit amet, ea soluta altera democritum vim, porro aeterno vituperata vel ex, an erant oporteat. Lorem ipsum dolor sit amet, ea soluta altera democritum vim.<span class="hidden-xs hidden-sm"> porro aeterno vituperata vel ex, an erant oporteat.Lorem ipsum dolor sit amet, ea soluta altera democritum vim, porro aeterno vituperata vel ex, an erant  voter oporteat.Lorem ipsum dolor sit amet, ea soluta altera democritum vim, porro aeterno vituperata vel ex, an erant.</span>
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
</div>
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
<script type="text/javascript">
    $(document).ready(function(){
        $(".tab").click(function(){
            var x=$(this).attr('id');
            if(x=='receiver'){
                $('#donor').removeClass('select');
                $('#hospital').removeClass('select');
                $('#bb').removeClass('select');
                $('#receiver').addClass('select');
                $('#receiver-form').show();
                $('#donor-form').hide();
                $('#hospital-form').hide();
                $('#bb-form').hide();
            }
            else if(x=='hospital'){
                $('#donor').removeClass('select');
                $('#bb').removeClass('select');
                $('#receiver').removeClass('select');
                $('#hospital').addClass('select');
                $('#hospital-form').show();
                $('#donor-form').hide();
                $('#receiver-form').hide();
                $('#bb-form').hide();
            }
            else if(x=='bb'){
                $('#donor').removeClass('select');
                $('#receiver').removeClass('select');
                $('#hospital').removeClass('select');
                $('#bb').addClass('select');
                $('#bb-form').show();
                $('#donor-form').hide();
                $('#receiver-form').hide();
                $('#hospital-form').hide();
            }
            else{
                $('#bb').removeClass('select');
                $('#receiver').removeClass('select');
                $('#hospital').removeClass('select');
                $('#donor').addClass('select');
                $('#donor-form').show();
                $('#bb-form').hide();
                $('#receiver-form').hide();
                $('#hospital-form').hide();
            }
        });
    });
</script>

</body>
</html>