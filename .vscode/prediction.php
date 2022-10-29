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
     <link rel="stylesheet" href="css/prediction.css">
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body>
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
                   <li><a href="Symptoms.php">Symptoms Guide</a></li>
                   <li><a href="BrainAct.php">Cognitive Stimulation Activities</a></li>
                   <li><a href="Treatment.php" class="smoothScroll">Treatments</a></li>
                   <li><a href="Doctors.php" class="smoothScroll">Doctors</a></li>
              </ul>
         </div>

    </div>
</section>

    <div class="container">
        <h1>Parkinson's Disease Prediction</h1>
        <!--<div class="flex-form">-->
            <form class="modal-content animate" action="prediction.php" method="post">
            <h3>Filter Symptoms</h3>
            <h3><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for symptoms.."></h3><br>
              <table id="myTable"> <tr>
                <th><label for="age">Select Your Gender:</label><input type="int" name="age" id="age" placeholder="Ex:65"></th>
                <th><label for="gender">Select Your Gender:</label>

                  <select name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select></th>
                <th></th>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" id="family"name="Positive_story_ of_ Parkinson_ disease in family"> Positive story of Parkinson disease in family
                </label</td>
                <td><label>
                  <input type="checkbox" id="sym1" name="Speech_Changes"> Speech Changes
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym2" name="Facial_Expressions_changes"> Facial Expressions changes
                </label></td>
              </tr>
              <tr>
                <td><label><input type="checkbox" id="sym3" name="Tremor_at_Rest _head"> Tremor at Rest -head
                </label></td>
                <td><label><input type="checkbox" id="sym4" name="Tremor_at_Rest_RUE"> Tremor at Rest-RUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym5" name="Tremor_at_Rest_LUE"> Tremor at Rest-LUE
                </label></td>
              </tr>  
              <tr>
                <td><label><input type="checkbox" id="sym6" name="Tremor_at_Rest_RLE"> Tremor at Rest-RLE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym7" name="Tremor_at_Rest_LLE"> Tremor at Rest-LLE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym8" name=" Action_or_Postural_Tremor_RUE"> Action or Postural Tremor-RUE
                </label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" id="sym9" name=" Action_or_Postural_Tremor_LUE"> Action or Postural Tremor-LUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym10" name=" Rigidity_neck"> Rigidity-neck
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym11" name=" Rigidity_RUE"> Rigidity-RUE
                </label></td>
              </tr>
              <tr>
                <td> <label>
                  <input type="checkbox" id="sym12" name=" Rigidity_LUE"> Rigidity-LUE
                </label></td>
                <td> <label>
                  <input type="checkbox" id="sym13" name=" Rigidity_RLE"> Rigidity-RLE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym14" name=" Rigidity_LLE"> Rigidity-LLE
                </label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" id="sym16" name=" Finger_Taps_RUE"> Finger Taps-RUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym17" name=" Finger_Taps_LUE"> Finger Taps-LUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym18" name=" Hand_Movements_RUE"> Hand Movements -RUE
                </label></td>
              </tr>
              <tr>
                  <td><label>
                  <input type="checkbox" id="sym19" name=" Hand_Movements_LUE"> Hand Movements -LUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym20" name=" Rapid_Alternating_Movements_RUE"> Rapid Alternating Movements-RUE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym21" name=" Rapid_Alternating_Movements_LUE"> Rapid Alternating Movements-LUE
                </label></td>
              </tr>
              <tr>
                <td> <label>
                  <input type="checkbox" id="sym22" name=" Leg_Agility_RLE"> Leg Agility -RLE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym22" name=" Leg_Agility_LLE"> Leg Agility -LLE
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym23" name="Arising_from_Chair "> Arising from Chair 
                </label></td>
              </tr>
              <tr>
                
                <td><label>
                  <input type="checkbox" id="sym24" name="Posture "> Posture 
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym25" name="Gait "> Gait
                </label></td>
                <td><label>
                  <input type="checkbox" id="sym26" name="Postural_Stability "> Postural Stability
                </label></td>
              </tr>
              <tr>
                <td><label>
                  <input type="checkbox" id="sym27" name="Body_Bradykinesia_and_Hypokinesia "> Body Bradykinesia and Hypokinesia
                </label></td>
              </tr>
               </ul></table>
               <a href="results.php"><button type="submit" value="Predict" class="clearfix">Predict</button></a>
            </form>
        <!--</div>-->
    </div>
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
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
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