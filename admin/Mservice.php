<?php include("./php/config.php");


// Start the session
session_start();

// Check if user is not logged in, redirect if true
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>              Enig Junior Entreprise  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="Mservice.php">
            <img src="images/logo.png" alt="">
            <span>
              Enig Junior Entreprise

            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="Mabout.php"> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Mservice.php"> Service </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Mblog.php"> Blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Mcontact.php">Contact </a>
                        <li class="nav-item ">
                          <!-- Logout Button -->
    <form action="./php/logout.php" method="post">
        <button class="nav-link" id="dcnx" style="background-color: #5f040b;" type="submit">Deconnecter<span class="sr-only">(current)</span></button>
    </form>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    </header>
    <!-- end header section -->
  </div>


  <section class="service_section layout_padding">
    
    <div class="container">
      <div class="heading_container">
        <h2>
          NOS SERVICES
        </h2>
        <img src="images/HAND.png" alt="">
      </div>

      <div class="service_container">
        <div class="box">
          <div class="img-box">
            <img src="images/s1.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Développement Web
            </h5>
            <p>
              ENIG JE s'attache à créer votre site internet pour vous offrir un maximum de visibilité. Nos ingénieurs vos accompagneront dans sa création et sa conception            </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/s2.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Développement Mobile	            </h5>
            <p>
              Avec l'essor de la mobilité, souhaitez-vous conquérir aussi les magasins en ligne ? Nos ingénieurs-développeurs mettent à votre disposition des applications smartphone et tablettes. Tout sur votre mesure !            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s3.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Conception des cartes électroniques
            </h5>
            <p>
              En nous confiant vos projets électroniques, vous faites confiance à des ingénieurs spécialistes de la conception de cartes électroniques tout en se basant sur des logiciels précis tel que Proteus ISIS ARES .             </p>
          </div>
        </div>
        <div class="box ">
          <div class="img-box">
            <img src="images/s4.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Conception Mécanique
            </h5>
            <p>
              A partir des informations ou de votre cahier des charges, nos ingénieurs étudient et conçoivent tout système mécanique, outillage, adaptation machines, pièces de rechange à partir de SolidWorks et Catia et surtout tout est sur mesure.            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s5.jpg" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Modélisation immobilière
            </h5>
            <p>
              L'immobilier prend aujourd'hui le virage du digital et se réinvente. C'est pour ça nos ingénieurs vous accompagnent pour développer et visualiser votre futur plan architectural dans leurs environnements réels en se basant principalement sur AutoCAD et Arche.            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          En savoir plus
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->


  <!-- info section -->

  <section class="info_section layout_padding">
    <div class="container">
      <div class="info_contact" >
        <div class="row" >
          
          
            <h1 style="color: #fff; padding-left:16%" >   United we hunt,Devided we are hunted
            </h1>
          
          
        </div>
      </div>
      
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-9 mx-auto">
          <p>
            &copy; 2024. All rights reserved by
            <a href="https://html.design/"> Junior Entreprise ENIG</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>


</body>

</html>