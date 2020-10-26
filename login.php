<?php 
 session_start();
  require_once 'function/Conn.php';

   $Osvaldo = new Conn("db_itech","localhost","root","");


 ?>
<!DOCTYPE html>
<html lang="pt-mz">
<head>
  <meta charset="utf-8">
  <title>Login</title>
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
    <div class="row justify-content-center">
      <div class="col-md-12">
          <h1 >login</h1>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-10 col-lg-8">
          
            <form method="POST" >
            <div class="form-row">
              <div class="form-group col-sm-8">
                  <label for="nome">Nome:</label>
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="username" maxlength="25" minlength="8">
              </div>
            </div>
          

            <div class="form-row">
              <div class="form-group col-sm-8">
                  <label for="password">Senha:</label>
                  <input type="password" name="senha" class="form-control" id="password" name="senha" placeholder="password" maxlength="32" >
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-sm-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" name="" class="form-check-input">Salvar senha 
                  </label>
                </div>
              </div>

              <div class="form-row">
                <div class="col-sm-12">
                  <button type="submit" name="submit" class="btn btn-primary">Login</button>
                  <button type="reset" name="" class="btn btn-danger">limpar</button>
                </div>
              </div>
            </div>
          </form>

      </div>
      

    </div>
    

  </div>

  <?php 
    if (isset($_POST['nome'])) {

      $nome=addslashes($_POST['nome']);
      $senha=addslashes($_POST['senha']);


      $res= $Osvaldo->login($nome,$senha);

       switch ($res) {

         case '1':
           header("location:Admin.php");
            
           break;
         
         case '0':

           header("location:LoginErro.php");

           break;
       }
       
    }




   ?>

 

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
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
