<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bolsa TECNM Roque</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>95 Años</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Acerca De</a></li>
          <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Productos</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipo</a></li>
          <li><a href="blog.html">Blog</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
          <li><a class="nav-link " href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Iniciar Sesión</a></li>
          <li><a class="nav-link scrollto" href="registro.php">Únete</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Bolsa de trabajo TECNM Roque</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Aprovecha tu talento e intégrate a equipos de trabajo</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <!-- <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Comienza aquí</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="./assets/img/tec.png" class="img-fluid redondear" alt="">
        </div>
      </div>
      <br>
     


      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header text-white colores">
              <h5 class="modal-title" id="staticBackdropLabel">Iniciar Sesión</h5>
              <button type="button" onclick="limpiarFormulario()" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <section id="hero2" class="hero2 d-flex align-items-center">
              <div class="container text-center" data-aos="fade-up">
                  <div class="row gy-4">
                    <div class="col-lg-12">
                      <form method="post" class="form" id="login">
                        <div class="row gy-3">
                          <div class="col-md-12">
                            <input type="email" class="form-control" name="usuario" id="usuario" placeholder="Ingresa tu Correo" required>
                          </div>
                          <div class="col-md-12">
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Ingresa tu Contraseña" required>
                          </div>
                          <div class="container">
                            <!-- <label class="row col-3" id="mensaje"></label> -->
                            <span class="row" id="mensaje"></span>
                            <input class="form-check-input" type="checkbox" value="" name="mostrar" id="mostrar">Mostrar Contraseña
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Entrar</button> 
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="button" id="mostrar" name="mostrar" class="btn btn-primary">Mostrar Contraseña</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
          
          
          
                
            </section><!-- End Hero -->
            
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>¿Quiénes somos?</h3>
              <h2>Somos un equipo de amigos y desarrolladores preocupados por nuestros compañeros y excompañeros del TECNM campus Roque</h2>
              <p>
                <!-- Nuestra idea surge de  -->
              </p>
              <div class="text-center text-lg-start">
                <!-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Ver más</span>
                  <i class="bi bi-arrow-right"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


      <!-- ======= Features Section ======= -->
      <section id="features" class="features">

<div class="container" data-aos="fade-up">

  <header class="section-header">
      <h2 class="text-success">Servicio Social</h2>
    <p class="text-success">Alumnos del TECNM en Roque ayudan al medio ambiente</p>
  </header>

  <div class="row">

    <div class="col-lg-6">
      <img src="assets/img/features.jpg" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
      <div class="row align-self-center gy-4">

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Reciclaje de plástico</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Reciclaje de papel</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Reciclaje de vidrio</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Reciclaje de baterías y pilas</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
          <div class="feature-box d-flex align-items-center">
            <i class="bi bi-check"></i>
            <h3>Reciclaje de aluminio</h3>
          </div>
        </div>

        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
          <div class="feature-box d-flex align-items-center">
            <a href="#" class="btn btn-success btn-lg " tabindex="-1" role="button" aria-disabled="true">Conoce Más</a>
          </div>
        </div>

      </div>
    </div>

  </div> <!-- / row -->

  <!-- Feature Tabs -->
  <div class="row feture-tabs" data-aos="fade-up">
    <div class="col-lg-6">
      <h3>Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

      <!-- Tabs -->
      <ul class="nav nav-pills mb-3">
        <li>
          <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
        </li>
        <li>
          <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
        </li>
      </ul><!-- End Tabs -->

      <!-- Tab Content -->
      <div class="tab-content">

        <div class="tab-pane fade show active" id="tab1">
          <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
          </div>
          <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Incidunt non veritatis illum ea ut nisi</h4>
          </div>
          <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
        </div><!-- End Tab 1 Content -->

        <div class="tab-pane fade show" id="tab2">
          <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
          </div>
          <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Incidunt non veritatis illum ea ut nisi</h4>
          </div>
          <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
        </div><!-- End Tab 2 Content -->

        <div class="tab-pane fade show" id="tab3">
          <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
          </div>
          <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
          <div class="d-flex align-items-center mb-2">
            <i class="bi bi-check2"></i>
            <h4>Incidunt non veritatis illum ea ut nisi</h4>
          </div>
          <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
        </div><!-- End Tab 3 Content -->

      </div>

    </div>

    <div class="col-lg-6">
      <img src="assets/img/features-2.png" class="img-fluid" alt="">
    </div>

  </div><!-- End Feature Tabs -->

  <!-- Feature Icons -->
  <div class="row feature-icons" data-aos="fade-up">
    <h3>Ratione mollitia eos ab laudantium rerum beatae quo</h3>

    <div class="row">

      <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/features-3.png" class="img-fluid p-4" alt="">
      </div>

      <div class="col-xl-8 d-flex content">
        <div class="row align-self-center gy-4">

          <div class="col-md-6 icon-box" data-aos="fade-up">
            <i class="ri-line-chart-line"></i>
            <div>
              <h4>Corporis voluptates sit</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
          </div>

          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <i class="ri-stack-line"></i>
            <div>
              <h4>Ullamco laboris nisi</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
          </div>

          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <i class="ri-brush-4-line"></i>
            <div>
              <h4>Labore consequatur</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
          </div>

          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <i class="ri-magic-line"></i>
            <div>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>

          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <i class="ri-command-line"></i>
            <div>
              <h4>Molestiae dolor</h4>
              <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
            </div>
          </div>

          <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <i class="ri-radar-line"></i>
            <div>
              <h4>Explicabo consectetur</h4>
              <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div><!-- End Feature Icons -->

</div>

</section><!-- End Features Section -->






     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Nuestros Clientes</h2>
    <p>Cartera de Afiliados</p>
  </header>

  <div class="clients-slider swiper-container">
    <div class="swiper-wrapper align-items-center">
      <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
      <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

</section><!-- End Clients Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Blog</h2>
    <p>Recent posts form our Blog</p>
  </header>

  <div class="row">

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Tue, September 15</span>
        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Fri, August 28</span>
        <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="post-box">
        <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
        <span class="post-date">Mon, July 11</span>
        <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
        <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->
    <!-- ======= Values Section ======= -->

<!--     
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>NUESTROS VALORES</h2>
          <p></p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section> -->
    
    <!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Contactos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Proyectos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="146" data-purecounter-duration="1" class="purecounter"></span>
                <p>Atenciones</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Empresas</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Perfil de ingenierías</h2>
          <p>Conoce el perfil de nuestros egresados</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <img src="http://itroque.edu.mx/images/imalogos/TICs_web.png" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>
                Conocimientos básicos del área físico - matemáticas.
                Nivel básico del idioma inglés
                El entorno político, económico y social en la actualidad.
                Anilizar y sintetizar problemas prácticos y de la vida real.
                Tener hábitos y métodos de estudio.
                Disposición para trabajar en equipo.
                La operación básica de una computadora y de aplicaciones.</p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <img src="http://itroque.edu.mx/images/imalogos/Gestion_empresarial_web.png" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>Desarrollar y aplicar habilidades directivas y la ingeniería en el diseño, creación, gestión, desarrollo fortalecimiento e innovación sistemática y sustentable para la toma de decisiones en forma efectiva.
                Gestionar eficientemente los recursos de la organización con visión compartida, con el fin de suministrar bienes y servicios de calidad.
                </p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <img src="http://itroque.edu.mx/images/imalogos/Agronomia_web.jpg" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>Los aspirantes a ingresar al Programa de Ingeniería en Agronomía deben reunir las siguientes características:
                Bases académicas sólidas en las áreas físico-matemático o químico-biológicas, conocimientos básicos de inglés, conocimiento y manejo de las TIC´S.
                </p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <img src="http://itroque.edu.mx/images/imalogos/innovacion_web.png" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>El egresado de Ingeniería en Innovación Agrícola Sustentable será capaz de:
                Participar en el diseño, creación, instalación, operación y mantenimiento de empresas agrícolas dentro de un marco de desarrollo regional, nacional e internacional.
                </p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <img src="http://itroque.edu.mx/images/imalogos/Hidrologica_web.png" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>Formular y desarrollar proyectos para el aprovechamiento eficiente del agua.
                Generar, desarrollar y aplicar estrategias para el uso sustentable del agua.
                Generar y transferir tecnologías para la captación, distribución, tratamiento y abastecimiento eficiente del agua en usos agropecuarios, industrial y público.</p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <img src="http://itroque.edu.mx/images/imalogos/Industrias_web.jpg" alt="">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Perfil</h3>
              <p>El aspirante a ingresar al Programa de Ingeniería en Industrias Alimentarias deberá reunir las siguientes características: 
                Conocimientos: bases académicas sólidas en las áreas físico-matemático o químico-biológicas, conocimientos básicos del idioma inglés, conocimiento y uso de herramientas computacionales básicas.</p>
              <a href="#" class="read-more"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div> -->

    <!-- </section> -->
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <!-- <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-6"> -->
            <!-- F.A.Q List 1-->
            <!-- <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="col-lg-6"> -->

            <!-- F.A.Q List 2-->
            <!-- <div class="accordion accordion-flush" id="faqlist2">

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h2>
                <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h2>
                <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
                    Varius vel pharetra vel turpis nunc eget lorem dolor?
                  </button>
                </h2>
                <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div> -->

    <!-- </section> -->
    <!-- End F.A.Q Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Productos</h2>
          <p>Conoce los productos hechos por los egresados</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-app">Tics</li>
              <li data-filter=".filter-card">Industrias</li>
              <li data-filter=".filter-web">Agropecuaria</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Robot Arduino didáctico</h4>
                <p>1 pieza</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Fibra De Coco Lavada y Estabilizada</h4>
                <p>1 Kg</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Desarrollo Web</h4>
                <p>Servicio</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mermelada de nopal</h4>
                <p>300 Gramos</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Semilla ajonjolí</h4>
                <p>100 gramos</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Instalación de Redes</h4>
                <p>Servicio</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Agua Toscana</h4>
                <p>1 Litro</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Polvorones</h4>
                <p>Paquete de 4</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Crema de Coco</h4>
                <p>1 litro</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title=""><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Interesados</h2>
          <p>Ellos quieren formar parte de tu empresa</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <?php require_once("conec.php");
            $resultado=mysqli_query($cn,"SELECT * FROM usuario order by fechaUsuario LIMIT 5");
            while($fila=mysqli_fetch_array($resultado)){
              echo"<div class='swiper-slide'>
              <div class='testimonial-item'>
                
                <p>
                ".$fila['descUsuario']."
                </p>
                <div class='profile mt-auto'>
                  <img src='assets/img/testimonials/".$fila['fotoUsuario']."' class='testimonial-img' alt=''>
                  <h3>".$fila['nombresUsuario']."</h3>
                  <h4>".$fila['tituloUsuario']."</h4>
                </div>
              </div>
            </div>";
          }
          ?>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Equipo</h2>
          <p>Nuestro Equipo de Trabajo</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div> -->
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Iván Cardel</h4>
                <span>Desarrollador</span>
                <p>Me encanta desarrollar y escuchar música</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <!-- <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div> -->
          </div>

        </div>

      </div>

    </section><!-- End Team Section -->

   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contacto</h2>
          <p>Contáctanos</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Dirección</h3>
                  <p><a target="blank" href="https://goo.gl/maps/cgY19Gc6P2LcpWdP7">Carretera, Juventino Rosas - Celaya Km.8, 38110 Celaya, Gto.</a></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Teléfono</h3>
                  <p><a target="blank" href="tel:4610008801">+52 4610008801</a></p>
                  <!-- <p>+1 5589 55488 55<br>+1 6678 254445 41</p> -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Correo</h3>
                  <p><a target="blank" href="mailto:bolsaroque@gmail.com">bolsaroque@gmail.com</a></p>
                  <!-- <p>info@example.com<br>contact@example.com</p> -->
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Abierto</h3>
                  <p>Lunes - Viernes<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Nombre" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Correo" required>
                </div>

                <!-- <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="" required>
                </div> -->

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensaje" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Cargando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Enviar</div>

                  <button type="submit">Enviar</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>95 años</span>
            </a>
            <p>El Tecnológico Nacional de México Roque es una institución de educación superior localizado en la localidad de Roque, en Celaya.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/TecNMRoque" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/TecNMRoque/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/tecroque/?hl=es-la" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a> -->
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4  class="text-success">Ellos contribuyen al medio ambiente, ¿Y tú?</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://www.ecoembes.com/es">Ecoembes</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://www.ecoce.mx/">Ecoce</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://www.gob.mx/semarnat">SEMARNAT</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://www.ecosia.org/">Ecosia</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="http://www.ambientum.com/">Ambientum</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 class="text-success">Otros</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="http://www.calamar2.com/">Calamar2</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://www.concienciaeco.com/">Concienciaeco</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="https://ecocosas.com/">Ecococsas</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="http://www.ecoestrategia.com/">Ecoestrategia</a></li>
              <li><i class="bi bi-chevron-right"></i> <a class="text-success" target="black" href="http://www.ecointeligencia.com/">Ecointeligencia</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contacto Personal</h4>
            <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br> -->
              <strong>Teléfono:</strong> +52 2518850 <br>
              <strong>Correo:</strong> ivan@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="js/jquery-3.1.1.js">
  </script>
  <script src="js/bootstrap.bundle.min.js">
  </script>
  <script src="js/jquery.validate.min.js">
  </script>
  <script src="js/all.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    var estadoMostrar = 0;
$("#mostrar").on("click", function() {

    if (estadoMostrar == 0) {
        $("#pass").attr("type", "text");
        $("#mostrar").removeClass("btn-primary");
        $("#mostrar").addClass("btn-info");
        $("#mensaje").html("<span class='alert alert-info'>La contraseña es visible</span>");
        estadoMostrar = 1;
    } else {
        $("#pass").attr("type", "password");
        $("#mostrar").removeClass("btn-info");
        $("#mostrar").addClass("btn-primary");
        $("#mensaje").html("");

        estadoMostrar = 0;
    }

});

    $().ready(function() {

$.validator.addMethod("formEmail", function(value, element) {
    var pattern = /^((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,64})$/;
    return this.optional(element) || pattern.test(value);
}, "Formato incorrecto");


});
    //Validacion Formulario
    $("#enviar").on("click", function() {
        $("#login").validate({
            rules: {
                usuario: {
                    required: true,
                    email:true,
                    maxlength: 40,
                    minlength: 10,
                  },
                  pass: {
                    required: true,
                    maxlength: 64,
                    minlength: 8,
                    formEmail:true,
                },
            },
            messages: {
                usuario: {
                    required: "El correo es requerido",
                    email: "Ingrese un correo válido",
                    maxlength: "Debe contener máximo 40 caracteres ",
                    minlength: "Debe contener mínimo 10 caracteres ",
                },
                pass: {
                    required: "La contraseña es requerida",
                    maxlength: "Debe contener máximo 64 caracteres ",
                    minlength: "Debe contener mínimo 8 caracteres ",
                    formEmail: "Formato  incorrecto",
                },
            },
            errorElement: "span",
            errorClass: "error",
            errorPlacement: function(error,element) {
                error.insertAfter(element);
            },
            submitHandler: function() {
                var parametros = $("#login").serialize();
                console.log(parametros)
                $.ajax({
                    url: "checkUsr.php",
                    type: 'POST',
                    data: parametros,
                    success: function (respuesta) {
                      if ($.trim(respuesta) == "Tr") {
                        Swal.fire({
                            title: "¡Bienvenido!",
                            text: "Empresa",
                            icon: "success",
                            timer: "2000",
                            showCancelButton: false,
                            showConfirmButton: false,
                            allowEscapeKey: false,
                            width: '23rem',
                        })
                        setTimeout(function() {
                            window.location.replace("adm/empresa.php");
                        }, 1000);
                        }else if ($.trim(respuesta) == "T") {
                          Swal.fire({
                            title: "¡Bienvenido!",
                            text: "Usuario",
                            icon: "success",
                            timer: "2000",
                            showCancelButton: false,
                            showConfirmButton: false,
                            allowEscapeKey: false,
                            width: '23rem',
                          })
                          setTimeout(function() {
                            window.location.replace("adm/usuario.php");
                        }, 1000); 
                    }
                    else {
                        Swal.fire({
                            title: "Contraseña y/o correo inválido",
                            icon: "error",
                            confirmButtonText: "Reintentar",
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            width: '23rem',
                        })
                    }
                }
                    
                });
            }
        });
    });
</script>
<script>
  function limpiarFormulario() {
    document.getElementById("login").reset();
  }
</script>
  <script src="assets/js/main.js"></script>

</body>

</html>