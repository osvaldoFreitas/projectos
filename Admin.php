<?php 
 session_start();
 require_once 'function/Conn.php';

if (!empty($_SESSION['id_admin'])) {
    
    header("location:LoginErro.php");
    

 }

  

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

<body style="background-color:rgba(127, 137, 161, 0.25);">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto"><strong style="color: #18d26e;">i</strong>Tech</a></h1>  <!--logotipo-->

    </div>


  </header>


  <br><br><br><br><br><br>


    <div class="container">

     

        <h1 class="text-center">Area administrativa</h1>


        

      
        



      
               <div class="form-row">
                  <div class="form-group">
                    <P class="ion-ios-list-outline mb-1"> Tabela mensagens</P>
                    <p class="ion-ios-person mb-1" style="font-size: 20px;"> Usuario:</p>
                    <a href="#" data-toggle="modal" title="Terminar sessão" data-target="#terminarSessao" style="color: black;">Osvaldo Freitas</a>
                  </div>
             

                 <div class="form-group col-md-3">
                 <form method="POST" action="">
                  <P class="ion-ios-list-outline mb-1"> ordenar por:</P>
                  <select class="form-control mb-1 " name="ordenar" style="width: 100px">
                    <option value="id_mensagem DESC ">Mais Recentes</option>
                    <option value="nome_mensagem">Nome</option>
                    <option value="data_mensagem">Data</option>
                    <option value="assunto_mensagem">Assunto</option>
                  </select>

                   <input type="submit" name="ver" value="ver" class="btn btn-info ">

                      </form>
                  </div>
            
    
              </div>
    


      

      

  </div>
  

       
    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-striped table-hover" >
            <tr class="active btn-primary">
              <th>Nome</th>
               <th>Contacto</th>
               <th>Assunto</th>
               <th>Mensagens</th>
                <th>Data/Hora</th>
                <th>Ações</th>
            </tr>
      <?php 



      try {
         $dados=$Osvaldo->buscarMensagem();

         if (count($dados)>0) {

          for ($i=0; $i <count($dados) ; $i++) { 

            echo "<tr>";
              foreach ($dados[$i] as $k => $v) {

                if ($k !="id_mensagem") {
                    echo "<td>".$v."</td>";
                  
                }
                
              }
              ?>
           <td><a href="Admin.php?id_mensagens=<?php echo $dados[$i]['id_mensagem']; ?>"><button type="submit" class=" btn btn-danger">Apagar</button></a></td>
           <?php 
              echo "</tr>";
            
          }
           
         }
        
      } catch (Exception $e) {

            echo "<center> <p  class='alert alert-danger my-5 col-9'>".$e->getmessage()."</p> </center>" ;
        
      }
     
        

      
       ?>

        </table>       
      </div> 


      <hr>

      <!--tabela da marcaoes de reuniao-->

       <div class="container">
   
      <P class="ion-ios-list-outline"> Tabela Reuniões agendadas</P>


     </div> 
    <div class="container-fluid">
      <div class="table-responsive">
        <table class="table table-striped table-hover" >
            <tr class="active btn-primary">

              <th>Nome</th>
              <th>Contacto</th>
              <th>Data/Hora</th>
              <th>Hora</th>
              <th>Ações</th>

            </tr>

          <?php 

          try {

              $reuniao =$Osvaldo->buscarReuniao();

            if (count($reuniao)>0) {

          for ($i=0; $i <count($reuniao) ; $i++) { 

            echo "<tr>";
              foreach ($reuniao[$i] as $k => $v) {

                if ($k !="id_reuniao") {
                    echo "<td>".$v."</td>";
                  
                }
                
              }


              ?>
           <td><a href="Admin.php?id=<?php echo $reuniao[$i]['id_reuniao']; ?>"><button type="submit" href="" class=" btn btn-danger">Apagar</button></a></td>
           <?php 
              echo "</tr>";
            
          }

        }
            
          } catch (Exception $e) {



            echo "<center> <p  class='alert alert-danger my-5 col-9'>".$e->getmessage()."</p> </center>" ;
            
          }
          
           ?>  
            
        </table>       
      </div>   
    </div>

    <br><br>
    <!--modal-->
   <div class="modal fade" id="terminarSessao" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" >

           <h5>Terminar a sessão.</h5>  

          </div>
          
        </div>

        <div class="modal-body">
          <center>
             <p>Tem certeza que deseja terminar a sessão.?</p>

          </center>
            
            
         
              <div class="contactForm" >
                <div class="form-row justify-content-center">
                  <form>
                      
                   <div class="form-group col-md-1">
                     <input type="submit" name="simLogout" class="btn btn-danger" value="sim" />
                   </div>
                  </form>
            
               <form>
                 <div class="form-group col-md-1">
                   <input type="submit" class="btn btn-primary" name="naoLogout" value="não" />
                 </div>

              </form>
             

              </div>
            </div>

          

         
           

        <div class="modal-footer">

           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

        </div>
        
      </div>
      

    </div>
     


   </div>
   <?php

   #terminando session

   if (isset($_POST['simLogout'])) {

      $Osvaldo->loguot();

      header("location:index.php");

      
    } elseif (isset($_POST['naoLogout'])) {

      header("location:Admin.php");


     
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


  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>


<?php

//reuniao deletar 
  if (isset($_GET['id'])) {

    $id =addslashes($_GET['id']);

    $Osvaldo->deletarReuniao($id);
   // header("location:Admin.php");



  }elseif(isset($_GET['id_mensagens'])){
      
      $id_mensagem=addslashes($_GET['id_mensagens']);
      $Osvaldo->deletarMensagem($id_mensagem);
    //  header("location:Admin.php");

  }


 ?>