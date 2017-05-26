
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>voidmain Hospital</title>

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
        
    }    
     h4{
        border-top: 1px solid rgba(0,0,0,0.4);
        color: #f13544;
        padding: 4px;
        font-size: 20px;
        text-align: center;
    }
    #order .form {
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 390px;
    }
    #near .form{
        margin-top: 50px;
        margin-bottom: 50px;
        margin-left: 300px;
    }
    #order button{
        display: inline-block;
        left: -5%;
    }
    #near button{
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
                            <a href="#order">Availability</a>
                        </li>
                        <li>
                            <a href="#near">Find Blood Banks</a>
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
<section id="order">
    <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">welcome</h3>

    <h4 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
    <?php
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="bloodbuddy";

    $counter=0;

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
        
    }

    
    $sql="SELECT * FROM hospital";

    

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

    
    while($row = mysqli_fetch_assoc($result)) {
        if($_POST['Email']==$row['Email'] && $_POST['Password']==$row['Password']){

            echo $row['Name'];
                       
             $counter=1;
             break;


        }
          
    }
  

}
    else {
    echo "0 results";
    }

   if($counter!=1){
echo '<meta http-equiv="refresh" content="0; URL=error.php">';

   }
   

?>  </h4>
    <div class="form">
     
        <div class="form-title">
            <h3>CHECK AVAILABILITY</h3>
        </div>
        <div class="form-content">
            <p>Hey There !</p>
            <form method="post" action="">
                <input type="text" name="bloodgroup" placeholder="Blood Group">
                <input type="number" name="quantity" placeholder="Quantity in ml">
               <button name="check" id="avail" class="button hvr-shutter-out-horizontal">CHECK AVAILABILITY
               
            </form>
            
        </div>
<?php
        if(isset($_POST['check'])){
        $sql="SELECT * FROM blood";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                if($_POST['bloodgroup']==$row['Blood_Group'] && $_POST['quantity']<=$row['Quantity']){
                    echo "<script>";
                    echo "alert('Available')";
                    echo "</script>";
                }
                else{
                    echo "<script>";
                    echo "alert('Sorry Not Available')";
                    echo "</script>";
                }
             }

        }

}
?>



</section>
<div class="clearfix"></div>
<section id="near">
    <div class="form">
     
        <div class="form-title">
            <h3>FIND BLOOD-BANKS NEAR YOU</h3>
        </div>
        <div class="form-content">
            <p>Hey There !</p>
            <form action="place.php" method="post">
                <input type="text" name="Place" placeholder="NAME OF CITY">
                
               <input type="submit" name="check" class="button hvr-shutter-out-horizontal"> 
              
            </form>
            
        </div>
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
                           No doubt the first and foremost advantage of donating blood is the exalted feeling of saving someone's life. If we donate the little excess blood in our body, it could save someone's life without creating any problem for us.
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