<?php 
 session_start();

/** if (empty($_SESSION)){
   header("location:login.php");
 }*/
  require_once 'function/Conn.php';

   $Osvaldo = new Conn("db_itech","localhost","root","");


 ?>
<!DOCTYPE html>
<html lang="pt-mz">
<head>
  <meta charset="utf-8">
  <title>iTech-Adimin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">




  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet" type="text/css">

  <!-- =======================================================
     iTechMoz.com
  ======================================================= -->
</head>

<body>
  <div class="container">

    <div id="#head">
      <div class="container">
        <div class="row">
        <p class="ion-android-person-add"> <h4>Registar</h4> </p>  
        </div>
      </div>
     </div> 

     <div id="#head">
      <div class="container">
        <div class="row">
        <div class="form col-md-8">
          <form class="">
            <div class="form-group ">
              <label for="name">nome:</label>
              <input type="" name="" class="form-control" placeholder="" maxlength=""> 

            </div>
            

          </form>
          

        </div>

        </div>
      </div>
     </div> 



   </div>
 


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><strong style="color: #18d26e;">i</strong>Tech</strong>. Todos direitos reservados
      </div>
      <div class="credits">
       
        Designed by <a href="#"><strong style="color: #18d26e;">i</strong>Tech</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->



  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>



