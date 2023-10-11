  <?php
session_start();
include ("koneksi.php");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Mahasiswa - Home</title>
	<link rel="icon" href="img/undiksa.jpg" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li> 
              <li class="nav-item"><a class="nav-link" href="#kontak" rel="page-scroll">Kontak</a></li>
           
              
							</li>
             
            </ul>

            
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <main class="side-main">
    <!--================ Hero sm Banner start =================-->      
    <section class="hero-banner mb-30px">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/pitri.png" alt="">
            </div>
          </div>
          <div class="col-lg-5 pt-5">
            <div class="hero-banner__content">
              <h1>Tentang Website Ini</h1>
              <p>Website ini dipergunakan sebagai informasi Universitas Pendidikan Ganesha.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero sm Banner end =================-->

    <!--================ Feature section start =================-->      
    
    <!--================ Feature section end =================-->      

    <!-- Login Feature Section Start -->

    <section class="section-margin">
      
        <div class="row content" id="login">
      <div class="col-lg-12 danger text-center zero-panel">
        <div class="col-lg-12 zero-panel-content">
          <h1> LOGIN </h1>
        
        </div>
        <br>
        <ul class="list-inline" id="chart-skill">
          <li><a href="login.php" target="_blank"><button class="btn btn-warning" style="size: 50px;">Login</button></a>
          </li><br>
          
          
        </ul>
      </div>
    </div>
    </section>


    <!-- Login Feature Section End -->
    

    <!--================ about section start =================-->      
   


  <!-- ================ start footer Area ================= -->
  <section class="section-margin">
      <div class="container">
        <div class="section-intro pb-85px text-center" id="kontak">
          <h2 class="section-intro__title">Kontak</h2>
          <p class="section-intro__subtitle"></p>
        </div>
  <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                 
                </span>
                <h3 class="card-feature__title">Email</h3>
                <p class="card-feature__subtitle">humas@undiksha.ac.id </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                  
                </span>
                <h3 class="card-feature__title">Telepon</h3>
                <p class="card-feature__subtitle">(0362)22570</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
                <span class="card-feature__icon">
                
                </span>
                <h3 class="card-feature__title">Youtube</h3>
                <p class="card-feature__subtitle">Universitas Pendidikan Ganesha</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</body>
</html>