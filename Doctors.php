<?php 

        if (isset($_POST['submit'])) {
		
          $username = $_POST["Username"];
          $email = $_POST["Email"];
          $date = $_POST["Date"];
          $doctor = $_POST["Doctor"];
          $phone = $_POST["Phone"];
          $message = $_POST["Message"];
               
		$con = mysqli_connect("localhost","root","","undergraduateproject");
			if(!$con)
			{
				die("Something went wrong....Please try again....");
			}


          $sql = "INSERT INTO `tblappointment` (`name`,`email`,`date`,`doctor`,`phone`,`message`) VALUES ('$username', '$email','$date','$doctor','$phone','$message');";

          mysqli_query($con,$sql);

          mysqli_close($con);
          header('Location:Doctors.php');
     }
          
     ?>
     
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
                    <a href="index.php" class="navbar-brand"><img src="images/Logo3.jpeg" max-width="60%" height="57"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php#top" class="smoothScroll">Home</a></li>
                        <li><a href="BrainAct.php" class="smoothScroll">Cognitive Stimulation Activities</a></li>
                        <li><a href="Treatment.php" class="smoothScroll">Treatments</a></li>
                        <li><a href="Music.php" class="smoothScroll">Music Therapies</a></li>
                    </ul>
               </div>

          </div>
     </section>


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
             <div class="row">
                <div class="col-md-6 col-sm-6">
                       <div class="about-info">
                            <h1>Our Doctors</h1>
                       </div>
                  </div>

                  <div class="clearfix"></div>

                  <div class="col-md-4 col-sm-6">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                            <img src="images/team-image1.jpg" class="img-responsive" alt="">

                                 <div class="team-info">
                                      <h5>James H. Bower</h5>
                                      <p>Neurologist
                                        Rochester, MN</p>
                                      <div class="team-contact-info">
                                           <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                           <p><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p>
                                      </div>
                                      <ul class="social-icon">
                                           <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                           <li><a href="#" class="fa fa-envelope-o"></a></li>
                                      </ul>
                                 </div>

                       </div>
                  </div>

                  <div class="col-md-4 col-sm-6">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                            <img src="images/team-image2.jpg" class="img-responsive" alt="">

                                 <div class="team-info">
                                      <h5>Jason Stewart</h5>
                                      <p>Neurologist
                                        Phoenix, AZ</p>
                                      <div class="team-contact-info">
                                           <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                           <p><i class="fa fa-envelope-o"></i> <a href="#">neuro@company.com</a></p>
                                      </div>
                                      <ul class="social-icon">
                                           <li><a href="#" class="fa fa-facebook-square"></a></li>
                                           <li><a href="#" class="fa fa-envelope-o"></a></li>
                                           <li><a href="#" class="fa fa-flickr"></a></li>
                                      </ul>
                                 </div>

                       </div>
                  </div>

                  <div class="col-md-4 col-sm-6">
                       <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                            <img src="images/team-image3.jpg" class="img-responsive" alt="">

                                 <div class="team-info">
                                      <h5>Miasha Nakahara</h5>
                                      <p>Neurosurgeon
                                        Jacksonville, FL</p>
                                      <div class="team-contact-info">
                                           <p><i class="fa fa-phone"></i> 010-040-0140</p>
                                           <p><i class="fa fa-envelope-o"></i> <a href="#">surgeon@company.com</a></p>
                                      </div>
                                      <ul class="social-icon">
                                           <li><a href="#" class="fa fa-twitter"></a></li>
                                           <li><a href="#" class="fa fa-envelope-o"></a></li>
                                      </ul>
                                 </div>
                       </div>
                  </div>     
             </div>
        </div>
   </section>
   <!-- MAKE AN APPOINTMENT -->
   <section id="appointment" data-stellar-background-ratio="3">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <img src="images/appointment-image.jpg" class="img-responsive" alt="">
               </div>
               <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="Doctors.php">

                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h2>Make an appointment</h2>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <div class="col-md-6 col-sm-6">
                                   <label for="name">Patient Name</label>
                                   <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter Patient name" required>
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="Email" name="Email" placeholder="Your Email" required>
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="date">Select Date</label>
                                   <input type="date" id="Date" name="Date" value="" class="form-control">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="doctor">Select Doctor</label>
                                   <select class="form-control" id="Doctor" name="Doctor" required>
                                        <option>James H. Bower</option>
                                        <option>Jason Stewart</option>
                                        <option>Miasha Nakahara</option>
                                   </select>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <label for="phone">Phone Number</label>
                                   <input type="tel" class="form-control" id="Phone" name="Phone" placeholder="Phone" required>
                                   <label for="message">Additional Message</label>
                                   <textarea class="form-control" rows="5" id="Message" name="Message" placeholder="Message"></textarea>
                                   <button type="submit" class="form-control" id="submit" name="submit"onClick="validateAll()">Make An Appointment</button>
                              </div>
                         </div>
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
<script type="text/javascript">

     function validateUserName()
     {
          

     if( document.getElementById('Username').value === '' ){
     alert('Please enter the Patient Name');
    }
     else{

     return true;

          }
     }

     function validateEmail()
     {
          var email= document.getElementById("Email").value;

          var at= email.indexOf("@");
          var dt= email.lastIndexOf(".");
          var len= email.length;

          if((at<2) || (dt-at <2) || (len-dt<2))
          {
               alert("Please enter a valid email address")
               return false;
          }
          else{
               return true;
          }
     }
     function validatedate()
     {
          

     if( document.getElementById('Date').value === '' ){
     alert('Please enter the Appointment Date');
    }
     else{

     return true;

          }
     }

     
          function validateContactNum()
			{
				var number = document.getElementById("Phone").value

				if((isNaN(number)) || (number.length !=10))
					{
						alert("Please enter valid contact number");
						return false;
					}
				else{
					return true;
				}

			}
     function validatemsg()
     {
          

     if( document.getElementById('Message').value === '' ){
     alert('Please Describe about your status');
    }
     else{

     return true;

          }
     }

     function validateAll()
     {
            if(validateUserName() && validateEmail() && validatedate() && validateContactNum() && validatemsg())
           {
             alert("Successfully Made the Appointment ! We will contact you soon");
           }
            else
           {
             event.preventDefault(); 
           }
     }
</script>
</html>