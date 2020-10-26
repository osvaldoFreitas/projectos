<?php 
  
  require_once 'function/Conn.php';
  

  $Osvaldo = new Conn("db_itech","localhost","root","");


 ?>
<!DOCTYPE html>
<html lang="pt-mz">
<head>
  <meta charset="utf-8">
  <title>iTech</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->


  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/Estilo.css">

  <!-- =======================================================
     iTechMoz.com
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1 class="mb-0"><a href="#intro" class="scrollto"><strong style="color: #18d26e;">i</strong>Tech</a></h1>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#Pacotes">Pacotes</a></li>
          <li><a href="#team">Portfolio</a></li>
          <li class="menu-has-children"><a href="">Mais</a>
            <ul>
              <li><a href="#" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a></li>
              <li><a href="#">Marcação Urgente</a></li>
              <li><a href="#">Pré-Marcação</a></li>
              <li><a href="#">Solicitar Avaliação</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contacto <i class="ion-ios-email-outline" style="font-size: 18px;padding-left: 4px"></i> </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" >
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nosso profissionalismo</h2>
                <p> Estamos comprometidos com a exigência, rigor e o profissionalismo que é a característica primodial para a distinção que o negócio merece no mercado.</p>
                <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Valorizamos o seu negócio</h2>
                <p>Os softwares desenvolvidos pela <strong style="color: #18d26e;">i</strong>Tech são idelizados para atender as necessidades de pequenas a grandes corporações com diferentes segmentos de actividades econômicas distintas. </p>
                <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Sabemos o que é tempo</h2>
                <p>sabemos que o tempo é que dá ao homem a noção do passado, presente e futuro. relevando essas variáveis levaremos ao seu negócio para aquilo que chamamos de sucesso.</p>
                <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Damos mais tempo para si mesmo</h2>
                <p>Dedicamos todas nossas enérgias em desenvolver soloções para si e o seu negócio para que você se preocupe com o próximo passo a dar. </p>
                <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Deixe-nós dar o nosso contributo</h2>
                <p>O caminho para o sucesso nem sempre é fácil. Quando os nossos clientes se deparam com obstáculos, gostamos de fazer parte da sua equipe e ajudá-los a chegar à meta o mais rapidamente possível </p>
                <a href="#" class="btn-get-started scrollto" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Rigor & Profissionalismo</a></h4>
            <p class="description">O rigor e o profissionalismo é uma qualidade que nos caracteriza, por isso colocamos todo o nosso impenho neles.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Tempo</a></h4>
            <p class="description">Sabemos que não basta apenas tomar as decisões certas, deve tem estar no momento certo também para antecipar as necessidades.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Valor</a></h4>
            <p class="description">Sabemos do valor que tem para com o seu negócio. por isso cuidaremos dele com si fosse nosso.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Quem Somos..?</h3>
          <p> Somos uma socidade jovem que vem demostrado maturidade no mercado moçambicano, com um grande a anseio de desenvolver com o tempo e contruibuir de forma a criar a diferença, apostado na criatividade e modernidade acompanhada do profissionalismo de exelência. </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp animated slideInRight" data-wow-delay="1.0s" data-wow-duration="2.4s">
            <div class="about-col">
              <div class="img">
                <img src="img/valores/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nossa Missão</a></h2>
              <p>
                Impulsionar o crescimento sustentálvel ao acesso as tecnologias de informação e de comunicação a nível nacional.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/valores/sobre-plano.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nosso Plano</a></h2>
              <p>
                Garantir facilidade ao acesso de plataformas que facilitem o rendimento do nosso pais.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp animated slideInLeft" data-wow-delay="1.0s" data-wow-duration="2.4s">
            <div class="about-col">
              <div class="img">
                <img src="img/valores/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Nossa Visão</a></h2>
              <p>
               Temos a visão de crescer juntamente com os nosso cliente, com o rumo ao sucesso profissional.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Serviços</h3>
          <p>Somos o parceiro que falta para o seu negócio com a capacidade de entender e expressar as necessidades da sua actividade.</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">WebSite</a></h4>
            <p class="description">Criamos partido do nada o seu web site com ferramentas personaliza para si e o seu negócio.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Sistemas De Gestão</a></h4>
            <p class="description">Deixe que a tecnologia lhe ajude a fazer a gestão do seu negócio de forma inteligente, rápida e credível.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Sistema Integrado</a></h4>
            <p class="description">Fica a par do seu negócio em qualquer lugar e a qualquer momento.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="1.6s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Blog</a></h4>
            <p class="description">Deixe que a sua criavidade e os seus pensamentos sejam expressadas de forma inteligente.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.8s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Manutenção</a></h4>
            <p class="description">Asseguramos que o seu negócio não lhe falte recurso técnico para desenvolver plenamente. </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">E-mail coorporativo</a></h4>
            <p class="description">Sabemos que a informação é poder. Por isso garantimos que você sempre á tenha em seu poder.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->



    


    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Ligue-nós</h3>
        <p> Faça a partir da sua casa, local de trabalho ou local onde achar conveniente para uma reunião, sem nenhum termo de compromisso. A nossa equipe está pronta para discutir o quanto a sua empresa pode cresce.</p>
        <a class="cta-btn" href="#" data-toggle="modal" data-target="#exibirModal">Marcar Reunião</a>
        <div class="container">
        <div class="row ">
          <div class="col-12">
            <ul class="nav nav-pills justify-content-center" id="jumbotron" role="tablist">
              <li class="nav-link">
                <a href="#nav-01" class="nav-link active " id="01" data-toggle="pill">Vantagens</a>
              </li>
               <li class="nav-link">
                <a href="#nav-02" class="nav-link " id="02" data-toggle="pill">Porquê Arriele?</a>
              </li>
               
            </ul>
            <div class="tab-content" id="nav-pill">
              
              <div class="tab-pane fade show active" id="nav-01" role="tabpanel">
                <p class="description">Possibilita que a sua empresa tenha maior credibilidade perante o seu público-alvo, garantindo que os seus clientes notem o seu esforço em possuir um relacionamento no ambiente virtual. Isto proporcionará inúmeras vantagens que ajudarão a instituição a lembrar do porquê ter um Website. Ao contar com Website, a entidade passa ainda mais uma imagem profissional para os <strong style="color:#18d26e; ">consumidores.</strong> Uma vez que a página na Web possui informações relevantes a esses clientes, que consequentemente, exalta a reputação positiva da empresa para seus compradores. A credibilidade começa a ser criada por diversas formas, seja pela importância e a empresa atribui aos clientes, ou até mesmo, aos conteúdos informados em sua página oficial.Um Web Site apresenta infinitas possibilidades de alcançar novos clientes para seu negócio, e para que isso ocorra, exiba para seu publico-alvo o mais número de informações sobre o seu campo de actuação, que de facto seja interessante de despertem a leitura do <strong style="color:#18d26e; ">publico.</strong> </p>

              </div>
              <div class="tab-pane fade " id="nav-02" role="tabpanel">
                <p class="description">O website veio para trazer novos modos para a conquista de consumidores que antes si limitava a acções locais, e agora atingir pessoas de diversas partes do mundo. Por meio da página na Web, é possível manter um contacto com uma pessoa do mesmo bairro, mais também de outro lado do continente.Essas medidas contribui para o aumento de vendas na empresa, tornando se alternativa. Quando uma empresa decide <strong style="color:#18d26e; ">investir</strong> em um site, e passa a se dedicar na divulgação de seus produtos e serviços, consegui alancar clientes diferenciados, fazendo com que as vendas aumentem. Por tanto, dê uma atenção maior as descrições dos seus serviços e produtos, e consequentemente, terá a tenção do cliente. </p>

              </div>
              

            </div>
            

          </div>
          


        </div>
        </div>

      </div>
    </section><!-- #call-to-action -->





    <!--==========================
      card
    ============================-->
   <section id="Pacotes" class="pt-5">
    <div class="container">
        <header class="section-header wow fadeInUp">
          <h3>Pacotes</h3>
          <p class="text-center font-italic">Adira já o seu WebSite com pacotes variados para atender a necessidade da sua empresa e do seu negocio ao melhor preço.</p>
        </header>
     </div> 
   </section>
    

    <div class="container-fluid">
      <div class="col-12">
        <div class="row  wow fadeInUp">

          <div class="col-md-4 mb-4">

            <div class="card">
              
            <div class="card-body" style="background: #18d26e">
              <h5 class="card-title">Prata</h5>
               <del><h4 class="card-title pricing-card-title">16,000mt <small class="text-muted">/ Antes</small></h4></del>
                <h2 class="card-title pricing-card-title font-italic">13,500mt <small class="text-muted">/ Agora</small></h2>
              <small class="text-card">Permite ao seu negocio ser visto de um forma diferente aos olhos dos potencias clientes. </small>
            </div>
            <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 dominio grátis</li>
              <li class="list-group-item">6 contas de Email</li>
              <li class="list-group-item">30 GB de espaço em ssd </li>
              <li class="list-group-item">1 mês de hospedagem</li>
              <li class="list-group-item">1 mês de suporte grátis</li>
            </ul>
            <div class="card-body text-center">
              <a href="#" data-toggle="modal"  data-target="#acederPacoteprata" class="card-link"><button class="btn btn-outline-success ">Aceder</button></a>
      
              <a href="#" data-toggle="modal"  data-target="#ModalPacotePrata" class="card-link"> <button class="btn btn-outline-success ">Ler Mais</button></a>
            </div>

            <div class="card-footer">

              <small class="font-italic text-muted">pagamentos até 2 prestações fixas</small>
              

            </div>
          </div>
          </div>






           <div class="col-md-4  mb-4">

            <div class="card">
              
            <div class="card-body" style="background: #18d26e">
              <h3 class="card-title">Gold</h3>
               <del><h4 class="card-title pricing-card-title">50,000mt <small class="text-muted">/ Antes</small></h4></del>
                <h2 class="card-title pricing-card-title font-italic">40,000mt <small class="text-muted">/ Agora</small></h2>
               <small class="text-card">Permite ao seu negocio ser visto de um forma diferente aos olhos dos potencias clientes</small>
            </div>
            <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 dominio grátis</li>
              <li class="list-group-item">∞ contas de Email</li>
              <li class="list-group-item">∞  GB de espaço em ssd </li>
              <li class="list-group-item">3 mês de hospedagem</li>
              <li class="list-group-item">1 mês de suporte grátis</li>
            </ul>
            <div class="card-body text-center">
              <a href="#"  data-toggle="modal"  data-target="#acederPacoteGold" class="card-link"><button class="btn btn-outline-success ">Aceder</button></a>

               <a href="#" data-toggle="modal"  data-target="#ModalPacoteGold" class="card-link"> <button class="btn btn-outline-success">Ler Mais</button></a>
            </div>
            <div class="card-footer">

              <small class="font-italic text-muted">pagamentos até 3 prestações fixas</small>
              

            </div>
          </div>
          </div>
          
           <div class="col-md-4 mb-4">

           <div class="card">
              
            <div class="card-body" style="background: #18d26e">
              <h5 class="card-title">Bronze</h5>
               <del><h4 class="card-title pricing-card-title">30,000mt <small class="text-muted">/ Antes</small></h4></del>
                <h2 class="card-title pricing-card-title font-italic">25,000mt <small class="text-muted">/ Agora</small></h2>
             <small class="text-card">Permite ao seu negocio ser visto de um forma diferente aos olhos dos potencias clientes. </small>
            </div>
            <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 dominio grátis</li>
              <li class="list-group-item">12 contas de Email</li>
              <li class="list-group-item">1 mês de hospedagem</li>
              <li class="list-group-item">1 mês de suporte grátis</li>
              <li class="list-group-item">slides e imagens animadas</li>
            </ul>
            <div class="card-body text-center">
              <a href="#" data-toggle="modal"  data-target="#acederPacoteBronze" class="card-link"><button class="btn btn-outline-success ">Aceder</button></a>

                <a href="#" data-toggle="modal"  data-target="#ModalPacoteBronze" class="card-link"> <button class="btn btn-outline-success">Ler Mais</button></a>
            </div>

              <div class="card-footer">

              <small class="font-italic text-muted">pagamentos até 2 prestações fixas</small>
              

            </div>
          </div>
          </div>
          </div>
          
          


        </div>
        


      </div>
      

    </div>
   


  

  

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nossos Parceiros</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/arielle.png" alt="" title="Seguro de saude">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Equipe</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
           
            <h3>Carlos Eduardo </h3>
            <h4>Programador Sénior</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              <p>sjdbfdjhfjkd</p>
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
          
            <h3>Paulino paulo</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Designer experiente que actua no mercado a cerca de uma década. Com a mente viranda a criar, inovar e supreender com as ferramentas especializada para cada obra que prefere chamar de "filho". 
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
           
            <h3>Julieta Constantino</h3>
            <h4>Secretária</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Secretária multi-funcional com abilidades distitivas para o um sentido orientado ao sucesso.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            
            <h3>Osvaldo Freitas</h3>
            <h4>Desenvolvedor</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Estou nesta área desde os meiados da década passada depositado na programação todo o meu tempo procurado sempre me renventar para me e assim actualizados da tendencias do mercado interno e internacional.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

         
        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Portfolio</h3>
          <p>Vêja os nossos últimos trabalhos realizados. </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/01.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                 
                  <span>ver Arriele Seguro</span>
                 
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/02.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                
                  <span>Ver Tipus</span>
                 
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contacto</h3>
          <p>Em caso de dúvidas ou busca por mais informações busque-nós pelos seguintes contactos abaixo:</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Endereço</h3>
              <address> Av.Angola n°32  Maputo, Cidade Maputo <br>
              </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefone</h3>
              <p><a href="+ 258 82 71 68 414">+ 258 82 71 68 414</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="#"> Itechmoz9@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">

          <?php 
            if (isset($_POST['submit'])) {
              
              $nome=ucfirst(addslashes($_POST['nome']));
              $contacto=addslashes($_POST['contacto']);
              $assunto=addslashes($_POST['assunto']);
              $mensagem=addslashes($_POST['mensagem']);
              
              
              $Osvaldo->guardarMensagem($nome,$contacto,$assunto,$mensagem);
            }

              ?>



          <form action="" method="POST" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nome" class="form-control" id="name" required="required" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="contacto" required="required"  id="email" placeholder="Email ou Telefone" data-rule="email" data-msg="" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="assunto" id="subject" required="required" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="mensagem" rows="5" data-rule="required" required="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit">Enviar</button></div>
          </form>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><strong style="color: #18d26e;">i</strong>Tech</h3>

            <p>Desde que estamos no mercado a <strong style="color: #18d26e;">i</strong>Tech desenvolve soluções em TI para plataformas locais e web's, com base nas mais modernas tecnologias.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Outros serviços</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Hospedagem</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Email-personalizado</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Gereciamento de Redes-Sociais</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Alojamento</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">E mais...</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactos</h4>
            <p>
              Av.Angola n°32 <br>
              Maputo, Cidade Maputo <br>
              Moçambique <br>
              <strong>Telefone:</strong> +258 82 71 68 414<br>
              <strong>Email:</strong> Itechmoz9@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://google-plus.com" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="https://linkedin.com" class="linkedin"><i class="fa fa-linkedin"></i></a>
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
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="#"><strong style="color: #18d26e;">i</strong>Tech</a>
      </div>
    </div>
  </footer><!-- #footer -->

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  



   
   <!--modal-->
   <div class="modal fade" id="exibirModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="modal-title" >

           <h5>Marcar reunião</h5>  

          </div>
          
        </div>

        <div class="modal-body">
          
             <div class="form" >
              <form action=" " method="POST" role="form" class="contactForm" >
            <div class="form-row">
              <div class="form-group col-md-6">
                   <label for="nome" >Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required="required" placeholder="Seu Nome"/>
                
              </div>

              <div class="form-group col-md-6">
                  <label for="contacto">contacto:</label>
                <input type="text" class="form-control"  name="contacto" required="required"  id="contacto" placeholder="Email ou Telefone" data-rule="email" data-msg=""/>
              </div>
            </div>
           <div class="form-row"> 
            <div class="form-group col-md-6">
                 <label  for="data" >Data:</label>
              <input type="date"  min="" class="form-control" name="data" id="data" required="required" />
              
            </div>
            <div class="form-group col-md-6" >
                 <label for="hora" >Hora:</label>
              <input type="time" name="hora"  min='09:30' max='18:00' class="form-control" id="hora" required="required"/>
            </div>
           </div> 
            <div class="text-center">
              <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
            
            </div>
          </form>

             </div>

        </div>

        <div class="modal-footer">

           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>

        </div>
        
      </div>
      

    </div>
     


   </div>
<!--modal de succeso de envio de mensaem
-->






   <?php 

        if (isset($_POST['Enviar'])) {
          
          $nome=ucfirst(addslashes($_POST['nome']));
          $contacto=addslashes($_POST['contacto']);
          $data=addslashes($_POST['data']);
          $hora=addslashes($_POST['hora']);

          

          $Osvaldo->marcarReuniao($nome,$contacto,$data,$hora);
           // header("location:index.php");

          

          //  header("location:loginErro.php");
          
          

        }


        
        


    ?>




     <div class="modal fade" id="ModalPacotePrata" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic p-auto">Descrisão do pacote prata</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="container">
             <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 domínio Grátis</li>
              <li class="list-group-item">1 mês de hospedagem</li>
              <li class="list-group-item">1 mês de suporte grátis </li>
              <li class="list-group-item">6 contas de Email</li>
              <li class="list-group-item">30 GB de espaço em ssd </li>
              <li class="list-group-item">5 páginas de conteúdo/ one page</li>
              <li class="list-group-item">Integração a mídia social</li>
              <li class="list-group-item">Formulário de contacto</li>
               <li class="list-group-item"><a href=""><button type="button" class="btn btn-outline-success">Aceder</button></a></li>
            </ul> 
        </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>
   <!--fim do modal prata-->


  <!--inicio do modal bronze-->
    <div class="modal fade" id="ModalPacoteBronze" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic ">Descrisão do pacote Bronze</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="container">
             <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 domínio Grátis</li>
              <li class="list-group-item">1 mês de hospedagem</li>
              <li class="list-group-item">1 mês de suporte grátis </li>
              <li class="list-group-item">12 contas de Email</li>
              <li class="list-group-item">50 GB de espaço em ssd </li>
              <li class="list-group-item">8 páginas de conteúdo/ one page</li>
              <li class="list-group-item">Integração a mídia social</li>
              <li class="list-group-item">conteúdo e slider animado</li>
               <li class="list-group-item">gogle maps integration</li>
              <li class="list-group-item">Formulário de contacto</li>
               <li class="list-group-item"><a href=""><button type="button" class="btn btn-outline-success">Aceder</button></a></li>
            </ul> 
        </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>
<!--fim do moda bronze-->

<!--inicio do modal Gold-->
     <div class="modal fade" id="ModalPacoteGold" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic">Descrisão do pacote Gold</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="container">
             <ul class="list-group list-group-flush text-center">
               <li class="list-group-item">1 domínio Grátis</li>
              <li class="list-group-item">3 mês de hospedagem</li>
              <li class="list-group-item">6 mês de suporte grátis </li>
              <li class="list-group-item">∞ contas de Email</li>
              <li class="list-group-item">∞ GB de espaço em ssd </li>
              <li class="list-group-item">∞ páginas de conteúdo/ one page</li>
              <li class="list-group-item">Integração a mídia social</li>
              <li class="list-group-item">Formulário de contacto</li>
              <li class="list-group-item">conteúdo e slider animado</li>
               <li class="list-group-item">Chat Online</li>
               <li class="list-group-item">Integração de Newsletter</li>
               <li class="list-group-item">gateway de Pagamento</li>
               <li class="list-group-item"><a href=""><button type="button" class="btn btn-outline-success">Aceder</button></a></li>
            </ul> 
        </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>

<!-- aceder pacote prata-->

  <div class="modal fade" id="acederPacoteprata" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic">confirmar Interesse no pacote prata</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="form" >
              <form action=" " method="POST" role="form" class="contactForm" >
            <div class="form-row">
              <div class="form-group col-md-6">
                   <label for="nome" >Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required="required" placeholder="Seu Nome"/>
                
              </div>

              <div class="form-group col-md-6">
                  <label for="contacto">contacto:</label>
                <input type="text" class="form-control"  name="contacto" required="required"  id="contacto" placeholder="Email ou Telefone" data-rule="email" data-msg=""/>
              </div>
            </div>
           
            <div class="text-center my-2">
              <button type="submit" name="EnviarPacotePrata" class="btn btn-primary">Enviar</button>
            
            </div>
          </form>

             </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>



 <!-- aceder pacote Gold-->

  <div class="modal fade" id="acederPacoteGold" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic">confirmar Interesse no pacote Gold</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="form" >
              <form action=" " method="POST" role="form" class="contactForm" >
            <div class="form-row">
              <div class="form-group col-md-6">
                   <label for="nome" >Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required="required" placeholder="Seu Nome"/>
                
              </div>

              <div class="form-group col-md-6">
                  <label for="contacto">contacto:</label>
                <input type="text" class="form-control"  name="contacto" required="required"  id="contacto" placeholder="Email ou Telefone" data-rule="email" data-msg=""/>
              </div>
            </div>
           
            <div class="text-center my-2">
              <button type="submit" name="EnviarPacoteGold" class="btn btn-primary">Enviar</button>
            
            </div>
          </form>

             </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>


 <!-- aceder pacote Bronze-->

  <div class="modal fade" id="acederPacoteBronze" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">

          <div class="modal-title" >
           <h5 class="title font-italic">confirmar Interesse no pacote Bronze</h5>
          </div>

        </div>

        <div class="modal-body">

          <div class="form" >
              <form action=" " method="POST" role="form" class="contactForm" >
            <div class="form-row">
              <div class="form-group col-md-6">
                   <label for="nome" >Nome:</label>
                <input type="text" name="nome" class="form-control" id="nome" required="required" placeholder="Seu Nome"/>
                
              </div>

              <div class="form-group col-md-6">
                  <label for="contacto">contacto:</label>
                <input type="text" class="form-control"  name="contacto" required="required"  id="contacto" placeholder="Email ou Telefone"  />
              </div>
            </div>
           
            <div class="text-center my-2">
              <button type="submit" name="EnviarPacoteBronze" class="btn btn-primary">Enviar</button>
            
            </div>
          </form>

             </div>

         <div class="modal-footer">
           <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        </div>

      </div>
    </div>
   </div>
 </div>

 <?php
 #tratando a manifestacao de interesse nos card

 if (isset($_POST['EnviarPacotePrata']) || isset($_POST['EnviarPacoteBronze']) || isset($_POST['EnviarPacoteGold']) ) {
   
   $nome = addslashes($_POST['nome']) ?? "desconecido ";
   $contacto = addslashes($_POST['contacto']) ?? "null";

   $Osvaldo->manifestacaoDeInteresse($nome,$contacto);
 }



 ?>









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
