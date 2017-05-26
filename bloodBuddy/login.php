
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
    
</head>
       
<body data-spy="scroll" data-target="#fixed-collapse-navbar">
<div id="loader-container">
    <div class='loader'></div>
</div>
<style type="text/css">
        #register
{
    padding-bottom: 100px;
    margin-top: 50px;
    margin-left: 320px;
    width: 750px;

}
#tabbox{
    margin-left: 50px;
    width: 100%;
    height: 40px;
    border-bottom: 1px solid white;
}
.tab{
    
    font-size: 20px;
    display: inline-flex;
    padding-left:  15px;
    padding-right: 15px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    -webkit-border-top-left-radius:20px;
    -webkit-border-top-right-radius:20px;
    text-transform: uppercase;
}
#tabbox a{
    float: left;
    text-decoration: none;
    color: #000;
    cursor: pointer;
    margin-top: 25px;
    border-bottom: 2px solid #f13544;
    margin-bottom: 25px;
}
#tabbox a:hover{
    font-size: 22px;
    background-color:#fff;
}
.select{
    text-align: center;
    margin-left: 5px;
    background-color: #f13544;

}
#admin-form{
    text-align: center;
    display: none;
}
#hospital-form{
    text-align: center;
    display: none;
}


#register input[type="submit"]{
    left: 30%;
}


    
</style>

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
                            <a href="register.php">Register</a>
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
            <h3>LOGIN</h3>
        </div>
<div id="tabbox">
    <a href="#" id="bb" class="tab select">Blood Bank</a>
    <a href="#" id="hospital" class="tab hospital">Hospital</a>
    <a href="#" id="admin" class="tab admin">Admin</a>
 </div>
 <div id="bb-form">
 <p>Hey There ! Let's get started !</p>

    <form method="post" action="bb.php">
                <input type="email" name="Email" placeholder="E-mail Id">
                <input type="password" name="Password" placeholder="Password">
               <input type="submit" name="Submit" value="Log In" class="btn btn-default hvr-shutter-out-horizontal">
            </form>
            
       
    </div>    
    
    <div id="hospital-form">
    <p>Hey There ! Let's get started !</p>
    <form action="hosrec.php" method="post">
        <form method="post" action="hosrec.php">
                <input type="email" name="Email" placeholder="E-mail Id">
                <input type="password" name="Password" placeholder="Password">
               <input type="submit" name="Submit" value="Log In" class="btn btn-default hvr-shutter-out-horizontal">
            </form>
            
       
     
</div>

<div id="admin-form">
<p>Hey There ! Let's get started !</p>

    <form method="post" action="admin.php">
                <input type="email" name="Email" placeholder="E-mail Id">
                <input type="password" name="Password" placeholder="Password">
               <input type="submit" name="Submit" value="Log In" class="btn btn-default hvr-shutter-out-horizontal">
            </form>
            
       
        
</div>


</div>
</section>
<div class="clearfix"></div>
<div id="above-footer">

 <div class="container">
     <div class="row">
         <div class="col-md-8 col-sm-7">
                <div class="col-md-6 col-sm-12 wow fadeIn" data-wow-duration="2s">
                    <div class="footer-logo">
                        <img src="file:///C:/Users/SAYLI/Desktop/dbms%207/img/logo_footer.png" alt="logo">
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
            
             if(x=='hospital'){
                $('#bb').removeClass('select');
                $('#admin').removeClass('select');
                
                $('#hospital').addClass('select');
                $('#hospital-form').show();
                $('#admin-form').hide();
                
                $('#bb-form').hide();
            }
            else if(x=='admin'){
                
                $('#bb').removeClass('select');
                $('#hospital').removeClass('select');
                $('#admin').addClass('select');
                $('#admin-form').show();
                $('#bb-form').hide();
                
                $('#hospital-form').hide();
            }
            else{
                $('#admin').removeClass('select');
                
                $('#hospital').removeClass('select');
                $('#bb').addClass('select');
                $('#bb-form').show();
                $('#admin-form').hide();
                
                $('#hospital-form').hide();
            }
        });
    });
</script>

</body>
</html>