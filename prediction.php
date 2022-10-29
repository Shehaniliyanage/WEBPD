


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
            <form class="modal-content animate" action="prediction.php"  method="post">
            <h3>Filter Symptoms</h3>
            <h3><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for symptoms.."></h3><br>
            <h4>1 = Postive   &nbsp; 0 = Negative</h4>
              <table id="myTable" > <tr>
                <th><label for="Age">Enter Your Age:</label><input type="text" name="age" id="age" placeholder="Ex:65"></th>

                <th><label for="Gender">Select Your Gender:</label>

                  <select name="gender" id="gender">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                  </select></th>
                <th></th>
              </tr>
              <tr>
                <td>
                
               <select name="family" id="family">
               <option value="0">0</option>
               <option value="1">1</option>
              </select><label for="Family">Positive story of Parkinson disease in family</label></td>
                <td>
                <select name="sym1" id="sym1">
               <option value="0">0</option>
               <option value="1">1</option>
              </select><label for="Sym1">Speech Changes</label></td>
                <td><select name="sym2" id="sym2">
                <option value="0">0</option>
               <option value="1">1</option>
              </select><label for="Sym2"> Facial Expressions changes</label></td>
              </tr>
              <tr>
                <td><select name="sym3" id="sym3">
                <option value="0">0</option>
                <option value="1">1</option>
              </select><label for="Sym3">  Tremor at Rest -head</label></td>
                <td><select name="sym4" id="sym4">
                <option value="0">0</option>
                <option value="1">1</option>
              </select><label for="Sym4"> Tremor at Rest-RUE</label></td>
                <td><select name="sym5" id="sym5">
               <option value="0">0</option>
               <option value="1">1</option>
             </select><label for="Sym5"> Tremor at Rest-LUE</label></td>
              </tr>  
              <tr>
                <td><select name="sym6" id="sym6">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym6">Tremor at Rest-RLE</label></td>
                <td><select name="sym7" id="sym7">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym7">Tremor at Rest-LLE</label></td>
                <td><select name="sym8" id="sym8">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym8"> Action or Postural Tremor -RUE</label></td>
              </tr>
              <tr>
                <td><select name="sym9" id="sym9">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym9"> Action or Postural Tremor -LUE</label></td>
                <td><select name="sym10" id="sym10">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym10"> Rigidity-neck</label></td>
                <td><select name="sym11" id="sym11">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym11">Rigidity -RUE</label></td>
              </tr>
              <tr>
                <td> <select name="sym12" id="sym12">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym12">Rigidity-LUE</label></td>
                <td><select name="sym13" id="sym13">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym13">Rigidity-RLE</label></td>
                <td><select name="sym14" id="sym14">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym14">Rigidity-LLE</label></td>
              </tr>
              <tr>
                <td><select name="sym15" id="sym15">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym15">Finger Taps-RUE</label></td>
                <td><select name="sym16" id="sym16">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym16">Finger Taps-LUE</label></td>
                <td><select name="sym17" id="sym17">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym17">Hand Movements-RUE</label></td>
              </tr>
              <tr>
                  <td><select name="sym18" id="sym18">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym18">Hand Movements-LUE</label></td>
                <td><select name="sym19" id="sym19">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym19">Rapid Alternating Movements-RUE</label></td>
                <td><select name="sym20" id="sym20">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym20">Rapid Alternating Movements-LUE</label></td>
              </tr>
              <tr>
                <td> <select name="sym21" id="sym21">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym21">Leg Agility-RLE</label></td>
                <td><select name="sym22" id="sym22">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym22">Leg Agility-LLE</label></td>
                <td><select name="sym23" id="sym23">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym23">Arising from Chair</label></td>
              </tr>
              <tr>
                
                <td><select name="sym24" id="sym24">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym24">Posture</label></td>
                <td><select name="sym25" id="sym25">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym25"> Gait</label></td>
                <td><select name="sym26" id="sym26">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym26">Postural Stability</label></td>
              </tr>
              <tr>
                <td><select name="sym27" id="sym27">
  <option value="0">0</option>
  <option value="1">1</option>
</select><label for="Sym27">Body Bradykinesia and Hypokinesia</label></td>
              </tr>
               </table>
               <button type="submit"  class="clearfix" name="submit" id="submit" onClick="httpGet()">Predict</button>
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
<script>
function httpGet()
{
     var family= document.getElementById("family").value;
     var sym1= document.getElementById("sym1").value;
     var sym2= document.getElementById("sym2").value;
     var sym3= document.getElementById("sym3").value;
     var sym4= document.getElementById("sym4").value;
     var sym5= document.getElementById("sym5").value;
     var sym6= document.getElementById("sym6").value;
     var sym7= document.getElementById("sym7").value;
     var sym8= document.getElementById("sym8").value;
     var sym9= document.getElementById("sym9").value;
     var sym10= document.getElementById("sym10").value;
     var sym11= document.getElementById("sym11").value;
     var sym12= document.getElementById("sym12").value;
     var sym13= document.getElementById("sym13").value;
     var sym14= document.getElementById("sym14").value;
     var sym15= document.getElementById("sym15").value;
     var sym16= document.getElementById("sym16").value;
     var sym17= document.getElementById("sym17").value;
     var sym18= document.getElementById("sym18").value;
     var sym19= document.getElementById("sym19").value;
     var sym20= document.getElementById("sym20").value;
     var sym21= document.getElementById("sym21").value;
     var sym22= document.getElementById("sym22").value;
     var sym23= document.getElementById("sym23").value;
     var sym24= document.getElementById("sym24").value;
     var sym25= document.getElementById("sym25").value;
     var sym26= document.getElementById("sym26").value;
     var sym27= document.getElementById("sym27").value;
     var url="http://127.0.0.1:5000/hello?family="+family+"&sym1="+sym1+"&sym2="+sym2+ "&sym3="+sym3+"&sym4="+sym4+"&sym5="+sym5+"&sym6="+sym6+ "&sym7="+sym7+"&sym8="+sym8+ "&sym9="+sym9+ "&sym10="+sym10+
     "&sym11="+sym11+ "&sym12="+sym12+ "&sym13="+sym13+ "&sym14="+sym14+ "&sym15="+sym15+ "&sym16="+sym16+ "&sym17="+sym17+ "&sym18="+sym18+
     "&sym19="+sym19+ "&sym20="+sym20+ "&sym21="+sym21+ "&sym22="+sym22+ "&sym23="+sym23+ "&sym24="+sym24+ "&sym25="+sym25+ "&sym26="+sym26+ "&sym27="+sym27;
    var xmlHttp = new XMLHttpRequest();

    //xmlHttp.open( "GET", url, false ); // false for synchronous request
   // xmlHttp.send( null );
    alert("Sorry You may have Parkinson's diseae")
    //return xmlHttp.responseText;
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