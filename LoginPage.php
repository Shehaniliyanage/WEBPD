<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>WebPD</title>
     <link rel="icon" href="images/Logonav.png">

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/LoginPage.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +94 2789567</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@webpd.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><img src="images/Logo3.jpeg"  max-width="60%"
                         height="57"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="SignUp.php">Sign-Up</a></li>
                         <li><a href="index.php#about" class="smoothScroll">About Us</a></li>
                         <li><a href="index.php#google-map" class="smoothScroll">Contact</a></li>
                    </ul>
               </div>

          </div>
     </section>
       
        </head>
        <body>
         <!-- MAKE AN APPOINTMENT -->
   <section id="appointment" data-stellar-background-ratio="3">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <img src="images/pngegg.png" class="img-responsive" alt="">
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form  method="post" action="LoginPage.php">

                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h2>Login Page</h2>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <div class="col-md-6 col-sm-6">
                                   <label for="UserName">User Name</label>
                                   <input type="text" class="form-control" id="Username" name="Username" placeholder="User Name" required>
                              </div>


                              <div class="col-md-6 col-sm-6">
                                   <label for="psw"><b>Password</b></label>
                                   <input type="password"   id="psw1"class="form-control" placeholder="Password" name="psw1" required>
                                   
                              </div>
                              

                              <div class="col-md-12 col-sm-12">
                              <button type="submit" class="form-control" id="submit" name="submit" >Login</button>

                                   
                                   <p>Don't Have An Account? <a href="SignUp.php">Sign-Up</a></p>
                              </div>
                         </div>
                         <?php
                              
                              if(isset($_POST["submit"]))
          
                             {				
                                   $username = $_POST["Username"];
                                   $Psw1 =  $_POST["psw1"];
          
                                   $con = mysqli_connect("localhost","root","","undergraduateproject");
                                   if(!$con)
                                   {	
                                             die("Sorry, We are facing a technical issue");		
                                   }	
                                   $sql = "SELECT * FROM `tblpatient` WHERE `UserName`='".$username."' AND `psw`='".$Psw1."';";
                                   $results = mysqli_query($con,$sql)	;
          
                                   if(mysqli_num_rows($results)>0)
                                   {
                                        $row = mysqli_fetch_assoc($results);
                                        $_SESSION["id"] = $row['Pid'];
                                        
                                        echo "<script> window.location.assign('prediction.php'); </script>";
                         
                                    
                                   }
                                   else
                                   { 
                                        echo "Please enter a correct user name and a
                                        password";
                                   }
                             }
                            
                         ?>


          
                         
                   </form>
               </div>

          </div>
     </div>
</section>
   

<!-- FOOTER -->
<footer data-stellar-background-ratio="5">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb"> 
                         <h5 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h5>
                         <p>The WebPD helpline is a free and confidential service for Parkinson's information and support</p>

                         <div class="contact-info">
                              <p><i class="fa fa-phone"></i>  +94 2789567</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="#">info@WebPD.com</a></p>
                         </div>
                    </div>
               </div>

               <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h5 class="wow fadeInUp" data-wow-delay="0.4s">Parkinson’s<br>Information</h5><br>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="parkinson.php"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="parkinson.php"><h6>Parkinson’s Disease: Causes,Diagnosis</h6></a>
                                        <span>August 20, 2022</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="tips.php"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="tips.php"><h6>Tips for Living With Parkinson’s Disease</h6></a>
                                        <span>August 20, 2022</span>
                                   </div>
                              </div>
                         </div>
                    </div>

               <div class="col-md-4 col-sm-4"> 
                    <div class="footer-thumb">
                         <div class="opening-hours">
                              <h5 class="wow fadeInUp" data-wow-delay="0.4s">Follow Us on</h5>
                         </div> 

                         <ul class="social-icon">
                              <li><a href="https://www.facebook.com/SLIITA/" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="https://twitter.com/SLIITinfo?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a></li>
                              <li><a href="https://www.instagram.com/sliit_academy/?hl=en" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>

               <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                         <div class="copyright-text"> 
                              <p>Copyright &copy; 2022 WebPD
                              
                              | W.L.Shehani Pabodha</p>
                         </div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                         <div class="angle-up-btn"> 
                             <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                         </div>
                    </div>   
               </div>
               
          </div>
     </div>
</footer>

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>