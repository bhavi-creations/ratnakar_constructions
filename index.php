    <!DOCTYPE html>
    <htm lang="en">

        <head>
            <meta charset="utf-8">
            <title>RATNAKAR CONSTRUCTIONS</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <link rel="icon" type="image/png" sizes="32x32" href="images/logor.png">

            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

            <!-- Icon Font Stylesheet -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

            <!-- Libraries Stylesheet -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            <link href="lib/animate/animate.min.css" rel="stylesheet">
            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


            <!-- Customized Bootstrap Stylesheet -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Template Stylesheet -->
            <link href="css/style.css" rel="stylesheet">





            <!-- imageslider -->

            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

        </head>



        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid topbar d-none d-xl-block w-100">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap  justify-content-start">
                        <a href="#contact" class=" me-4"><i class="fas fa-map-marker-alt fame me-2"> </i>Find A Location</a>
                        <a href="#" class=" me-4"><i class="fas fa-phone-alt fame me-2"></i> 9848424956,8999069990</a>
                        <a href="#" class=" me-0"><i class="fas fa-envelope fame me-2"></i>ratnakarconstructions2007@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <!-- <a href="#" class=" me-3"><i class="fas fa-clock fame me-2"></i>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</a> -->
                        <a href="https://www.facebook.com/ratnakarconstructionskkd/" class="btn btn-primary btn-square icon text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <!-- <a href="#" class="btn btn-primary btn-square icon text-white me-3"><i class="fab fa-twitter"></i></a> -->
                        <a href="https://www.instagram.com/ratnakarconstructionskkd/" class="btn btn-primary btn-square icon text-white me-3"><i class="fab fa-instagram"></i></a>
                        <!-- <a href="#" class="btn btn-primary btn-square icon text-white me-3"><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->

        <!-- Navbar & Hero End -->
        <div class="container-fluid sticky-top px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
                <a href="index.php" class="navbar-brand p-0">
                    <img src="img/logo.jpg" class="image" alt="" style="width:180px; height:100px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Servic</a>
                        <a href="#Gallery" class="nav-item nav-link">Gallery</a>

                        <!-- Dropdown for Projects -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="projectsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
                                <li><a class="dropdown-item" href="#Recent Completed Projects">Recent Completed Projects</a></li>
                                <li><a class="dropdown-item" href="#Progressive Projects">Progressive Projects</a></li>
                                <li><a class="dropdown-item" href="#Construction and Project Management">Construction and Project Management</a></li>
                            </ul>
                        </div>

                        <a href="#contact" class="nav-item nav-link">Contact Us </a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-3 pt-lg-0 ms-lg-2">
                        <a href="#make_app" class="btn py-2 px-4 ms-3 flex-wrap flex-sm-shrink-0">Book an Appointment</a>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        <!-- Carousel Start -->









        <!-- Carousel End -->

        <!-- Carousel -->
        <div class="container-fluid overflow-hidden px-0">

            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">

                <ol class="carousel-indicators  ">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="3" aria-label="fourth slide"></li>

                    <li data-bs-target="#carouselId" data-bs-slide-to="4" aria-label="fifth slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="5" aria-label="sixth slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="6" aria-label="seventh slide"></li>


                </ol>
                <div class="carousel-inner">

                    <div class="carousel-item">
                        <img src="images/1.png" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0  text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/3.png" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/ratnakart7.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src="images/3.png" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/ratnakar.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/3d house.png" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/2.png" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <p class="text-uppercase new_text fs-1 mb-0   text-capitalize">Ratnakar Constructions</p>
                            <h3 class="  text-white mb-4  ">It's all about the trust</h3>
                            <p class="mb-5 fs-5  ">We build somethings new and consistent.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-left fa-2x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated" aria-hidden="true" data-animation="fadeInRight" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-right fa-2x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>











        <!-- About Start -->
        <!-- <section id="about">
            <div class="container-fluid about py-5">

                <p class="text-uppercase text-secondary fs-5 text-center ">About us</p>
                <div class="container py-5">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="about-item-image d-flex">
                                 <img src="images/ratnakart9.jpg" class="img-1 img-fluid w-50" alt=""> 
                                 <img src="images/ratnakart7.jpg" class="img-2 img-fluid w-50" alt=""> 
                              
                                <div class="about-item-image-content">
                                    <img src="img/about-1.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt=""> 
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s" id="index">
                            <div class="about-item-content">

                                <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE CONSTRUCTION COMPANY</p>
                                <h2 class="display-4 text-capitalize mb-3">Making your vision come true at the basics.</h2>
                                <p class="mb-4 fs-5">We specialize in the Effective Planning, Management and Delivery of Commercial and Residential Builiding Projects. in particular, We have developed Over the years to become the specialist partner of choice for individual and Duplex Houses. But No matter the project, we work meticulously from concept through the completion of delivering a comprehensive forward thinking service.
                                </p>
                                <div class="pb-4 mb-4 border-bottom">
                                    <div class="row g-4">
                                        <div class="col-lg-4">
                                            <div class="about-item-content-img">
                                                <img src="img/about-2.jpg" class="img-fluid w-100" alt=""> 
                                                <img src="images/ratnakart3.jpg" class="img-fluid w-100" alt="">
                                               

                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="d-flex mb-4">
                                                <div class="">
                                                    <i class="fas fa-user-shield fa-3x new_icon"></i>
                                                </div>
                                                <h4 class="ms-3 contact_text">Building quality standards</h4>
                                            </div>
                                            <div class="d-flex mb-4">
                                                <div class="">
                                                    <i class="fas fa-users-cog fa-3x new_icon"></i>
                                                </div>
                                                <h4 class="ms-3 contact_text">Vasthu Plan</h4>

                                            </div>
                                            <div class="d-flex mb-4">
                                                <div class="">
                                                    <i class="fas fa-users-cog fa-3x new_icon"></i>
                                                </div>
                                                <h4 class="ms-3 contact_text">Transparency</h4>
                                            </div>
                                            <div class="d-flex mb-4">
                                                <div class="">
                                                    <i class="fas fa-users-cog fa-3x new_icon"></i>
                                                </div>
                                                <h4 class="ms-3 contact_text">Trustworthy</h4>
                                            </div>
                                            <div class="d-flex mb-4">
                                                <div class="">
                                                    <i class="fas fa-users-cog fa-3x new_icon"></i>
                                                </div>
                                                <h4 class="ms-3 contact_text">Certified engineer’s team</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row gy-0 gx-4 justify-content-between pb-4">
                                    <div class="col-lg-6`">
                                        <p class="text-dark"><i class="fas fa-check  me-1"></i> 100% Satisfaction</p>
                                        <p class="text-dark"><i class="fas fa-check  me-1"></i> Trained Emploies</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="text-dark"><i class="fas fa-check  me-1"></i> Annual Pass Programs</p>
                                        <p class="text-dark mb-0"><i class="fas fa-check  me-1"></i> Flexible and cost effective</p>
                                    </div>
                                </div> 
                                 < <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->



        <section id="about">
            <div class="container-fluid about py-5">

                <p class="text-uppercase text-secondary fs-1 text-center  about">About us</p>

                <div class="container py-5">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="images/owner.png" alt="" class="img-fluid">
                            <!-- <video id="video" poster="poster.jpg " class="w-100 " autoplay controls  loop>
                                <source src="images/WhatsApp Video 2024-12-17 at 10.16.44.mp4" type="video/mp4">

                            </video> -->
                            <!-- <section autoplay muted loop class="only_first mt-3  ">
                                <video id="myVideo" width="100%" autoplay controls muted loop>
                                    <source src="images/WhatsApp Video 2024-12-17 at 10.16.44.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p class="text-uppercase  fs-5 walk">Building Walk through video of House.</p> -->


                        </div>
                        <div class="col-12 col-md-6 company">
                            <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE CONSTRUCTION COMPANY</p>
                            <!-- <h2 class="display-4 text-capitalize mb-3">Making your vision come true at the basics.</h2> -->
                            <p class="mb-4 fs-5">
                                We specialize in the Effective Planning, Management and Delivery of Commercial and Residential Builiding Projects. in particular, We have developed Over the years to become the specialist partner of choice for individual and Duplex Houses. But No matter the project, we work meticulously from concept through the completion of delivering a comprehensive forward thinking service.
                            </p>


                        </div>

        </section>
        <!-- About End -->

        <section>
            <div class="container">
                <div class="pb-4 mb-4 ">
                    <div class="row g-4 ">
                        <div class="col-lg-6 standars">
                            <div class="d-flex mb-4">
                                <div class="">
                                    <i class="fas fa-user-shield fa-3x new_icon"></i>
                                </div>
                                <h4 class="ms-3 contact_text">Building quality standards.</h4>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="">
                                    <!-- <i class="fas fa-users-cog fa-3x new_icon"></i> -->
                                    <i class="fas  fa-compass fa-3x new_icon"></i>
                                </div>
                                <h4 class="ms-3 contact_text"> Vasthu Plan</h4>

                            </div>
                            <div class="d-flex mb-4">
                                <div class="">
                                    <i class="fas fa-search fa-3x new_icon"></i>
                                </div>
                                <h4 class="ms-3 contact_text">Transparency</h4>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="">
                                    <i class="fas fa-handshake fa-3x new_icon"></i>
                                    <!-- <img src="images/stakeholder.png" alt="" class="new_icon" style="width:50px;height:50px"> -->
                                    <!-- <i class="fas fa-users-cog fa-3x new_icon"></i> -->
                                </div>
                                <h4 class="ms-3 contact_text"> Trustworthy</h4>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="">
                                    <i class="fas fa-users-cog fa-3x new_icon"></i>
                                </div>
                                <h4 class="ms-3 contact_text">Certified engineer’s team</h4>

                            </div>
                            <div class="row gy-0 gx-4 justify-content-between pb-4">
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Workers</p>
                                    <!-- <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p> -->

                                </div>
                                <div class="col-lg-6">
                                    <!-- <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs</p> -->
                                    <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-item-content-img">
                                <section autoplay muted loop class="only_first mt-3  ">
                                    <video id="myVideo" width="100%" autoplay controls muted loop>
                                        <source src="images/WhatsApp Video 2024-12-17 at 10.16.44.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <p class="text-uppercase  fs-5 walk">Building Walk through video of House.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <script src="script.js">
                const video = document.getElementById('video');
                const replayButton = document.getElementById('replay-button');

                // Add click event to video to restart it
                video.addEventListener('click', () => {
                    if (video.paused) {
                        video.play();
                    }
                });

                // Show replay button when video ends
                video.addEventListener('ended', () => {
                    replayButton.style.display = 'show';
                });

                // Replay video on button click
                replayButton.addEventListener('click', () => {
                    video.currentTime = 0;
                    video.play();
                    replayButton.style.display = '';
                });
            </script>

        </section>

        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5 ">
            <div class="container py-5 ">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-1 mb-0">Why Choose Us</p>
                    <!-- <h2 class=" text-uppercase mb-3 text-secondary fs-1 ontact_text"></h2> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img  d-inline-flex p-4">
                                <i class="fas fa-city new_icon fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4 contact_text">Expert Engineer</a>
                            <p class="mb-0">Expert Engineers is a fast-growing, professionally managed engineering company engaged in the manufacturing of custom-built low-voltage Electrical Control Panels, switchboards, and control panels catering to the needs of the building, water, power, and industrial sectors through its products, aiming to empower and ...</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img  d-inline-flex p-4">
                                <i class="fas fa-funnel-dollar new_icon fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4 contact_text">Free Estimates</a>
                            <p class="mb-0"> Estimating is the process of assessing all the costs of a construction project during the preconstruction phase. These costs include direct costs, indirect costs, overhead costs and a profit margin for the general contractor.1</p>
                        </div>
                    </div> -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img  d-inline-flex p-4">
                                <i class="fas fa-tools  new_icon fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4 contact_text">Quality Materials</a>
                            <p class="mb-0">Quality materials are essential for construction projects as they offer several benefits. Using high-quality materials ensures the durability and longevity of the structure, reducing the need for frequent repairs and maintenance. Quality materials also enhance the overall appearance and aesthetic appeal of the construction,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Services Start -->
        <section id="service">
            <div class="container-fluid service bg-light pb-5">
                <div class="container pb-5">
                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                        <p class="text-uppercase text-secondary  fs-1 mb-0">Our Services</p>
                        <h2 class=" text-capitalize mb-3 contact_text">our service is creative, & decent</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <!-- <img src="img/service-1.jpg" class="img-fluid w-100" alt="Image"> -->
                                    <!-- <img src="images/ratnakart25.jpg" class="img-fluid w-100" alt="Image"> -->
                                    <img src="images/ratnakar38.jpeg" class="img-fluid w-100" alt="Image">




                                </div>
                                <div class="service-content text-center p-4 ">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                        <i class="fas fa-home new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Designing plans for the Commercial and Residential Properties </a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center ps-4 w-100">
                                        <h4 class="font contact_text">Designing plans for the Commercial and Residential Properties</h4>
                                    </div>
                                    <div class="btn-xl-square bg p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-home new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/ratnakar39.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                        <i class="fas fa-users-cog new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4"> Construction of Futurstic individual Houses</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text"> Construction of Futurstic individual Houses</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-users-cog new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/duplex.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white mx-auto" style="width: 120px; height: 120px;">
                                        <i class="fas fa-hospital-user new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Construction of Sophisticated Duplex Houses</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text">Construction of Sophisticated Duplex Houses</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-hospital-user new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/3d house.png" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white mx-auto" style="width: 120px; height: 120px;">
                                        <i class="fas fa-hospital-user new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Construction of 3D view of Houses</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text">Construction of 3D view of Houses</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-hospital-user new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/villas.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                        <i class="fas fa-file-invoice-dollar new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Building of Avant Garde Apartments and Villas</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font new_font contact_text">Building of Avant Garde Apartments and Villas</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-file-invoice-dollar new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/interior.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                        <i class="fas fa-cogs new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Interior and Exterior Works</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text">Interior and Exterior Works</h4>
                                    </div>
                                    <div class="btn-xl-square p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-cogs new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/supervisor.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 100px; height: 100px;">
                                        <i class="fas fa-sitemap new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4">Construction Supervision</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text">Construction Supervision</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-sitemap new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 new_service wow fadeInUp align-items-center g-4" data-wow-delay="0.4s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="images/contractor.jpeg" class="img-fluid w-100" alt="Image">
                                </div>
                                <div class="service-content text-center p-4">
                                    <div class="bg-white btn-xl-square mx-auto" style="width: 120px; height: 120px;">
                                        <i class="fas fa-users-cog new_icon fa-4x"></i>
                                    </div>
                                    <a href="" class="d-block fs-4 my-4"> Building Contractors</a>
                                    <p class="text-white mb-4"></p>
                                    <!-- <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                                <div class="service-tytle">
                                    <div class="d-flex align-items-center justify-content-start ps-4 w-100">
                                        <h4 class="font contact_text"> Building Contractors</h4>
                                    </div>
                                    <div class="btn-xl-square  p-4" style="width: 80px; height: 80px;">
                                        <i class="fas fa-users-cog new_icon fa-2x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-secondary py-3 px-5 mt-4" href="#">More Services</a>
                    </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->

        <section>
            <div class="container-fluid  py-5">
                <div class="container py-5">
                    <div class="row g-4">
                        <h2 class="text-center fs-1 contact_text my-4 text-uppercase text-secondary">3D <span class="fs-4">v/s</span> Real</h2>
                        <div class="col-lg-6 col-12">
                            <img src="images/2.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="images/111.png" alt="" class="img-fluid">
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Start -->

        <section id="Gallery">
            <div class="container-fluid blog pb-5">
                <div class="container pb-5">
                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                        <p class="text-uppercase text-secondary fs-1 mb-0 pt-5 about">Gallery</p>
                        <!-- <h2 class="display-4 text-capitalize mb-3">Our latest news post and articles?</h2> -->
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="images/ratnakar.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <!-- <img src="images/ratnakar38.jpeg" class="img-fluid w-100" alt=""> -->
                                    <img src="images/ratnakart7.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="images/ratnakart28.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="images/ratnakart25.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="images/ratnakart26.jpg" class="img-fluid " alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="blog-item h-100">
                                <div class="blog-img">
                                    <img src="images/ratnakart27.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="blog-content">
                                    <div class="d-flex justify-content-between mb-3">
                                        <!-- <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p> -->
                                    </div>
                                    <!-- <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery End-->



        <!-- <div class="desktop_2" unique-script-id="w-w-dm-id">
        <div class="Container">
          <div class="portfolio">
            <div class="above">
              <div class="project project-first">
                <img alt="" class="bigImg image-block" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png">
                <div class="overlay">
                  <div class="overlay-inner">
                    <button class="close">
                      Close X
                    </button>
                    <div class="hdImgs">
                      <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d11.png">
                    </div>
                  </div>
                </div>
                <div class="btn-box">
                  <button class="btn">
                    View
                  </button>
                </div>
              </div>
              <div class="side">
                <div class="project">
                  <img alt="" class="project-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d22.png">
                  <div class="overlay">
                    <div class="overlay-inner">
                      <button class="close">
                        Close X
                      </button>
                      <div class="hdImgs">
                        <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d22.png">
                      </div>
                    </div>
                  </div>
                  <div class="btn-box">
                    <button class="btn">
                      View
                    </button>
                  </div>
                </div>
                <div class="project">
                  <img alt="" class="project-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d14.png">
                  <div class="hdImg">
                    <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d14.png">
                  </div>
                  <div class="btn-box">
                    <button class="btn">
                      View
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="bottom">
              <div class="project">
                <img alt="" class="project-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d25.png">
                <div class="overlay">
                  <div class="overlay-inner">
                    <button class="close">
                      Close X
                    </button>
                    <div class="hdImgs">
                      <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d25.png">
                    </div>
                  </div>
                </div>
                <div class="btn-box">
                  <button class="btn">
                    View
                  </button>
                </div>
              </div>
              <div class="project">
                <img alt="" class="project-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d26.png">
                <div class="overlay">
                  <div class="overlay-inner">
                    <button class="close">
                      Close X
                    </button>
                    <div class="hdImgs">
                      <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d26.png">
                    </div>
                  </div>
                </div>
                <div class="btn-box">
                  <button class="btn">
                    View
                  </button>
                </div>
              </div>
              <div class="project">
                <img alt="" class="project-image" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d27.png">
                <div class="overlay">
                  <div class="overlay-inner">
                    <button class="close">
                      Close X
                    </button>
                    <div class="hdImgs">
                      <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d27.png">
                    </div>
                  </div>
                </div>
                <div class="btn-box">
                  <button class="btn">
                    View
                  </button>
                </div>
              </div>
              <div class="project">
                <img alt="" class="project-image last" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d23.png">
                <div class="overlay">
                  <div class="overlay-inner">
                    <button class="close">
                      Close X
                    </button>
                    <div class="hdImgs">
                      <img alt="" class="againImg" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/d23.png">
                    </div>
                  </div>
                </div>
                <div class="btn-box">
                  <button class="btn">
                    View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->





        <!-- Fact Counter -->
        <div class="container-fluid counter py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-box ">
                            <div class="counter-item  ">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-thumbs-up fa-4x new_color"></i>
                                    <h4 class="text-dark my-4 need_space contact_text">Completed Projects</h4>
                                    <div class="counter-counting">
                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">800</span>
                                        <span class="h1 fw-bold text-white">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-users fa-4x new_color"></i>
                                    <h4 class="text-dark my-4 need_space  contact_text">Happy Customers</h4>
                                    <div class="counter-counting">
                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">800</span>
                                        <span class="h1 fw-bold text-white">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-user fa-4x new_color"></i>
                                    <h4 class="text-dark my-4 need_space  contact_text">Qualified Engineers</h4>
                                    <div class="counter-counting">
                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">53</span>
                                        <span class="h1 fw-bold text-white">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-box">
                            <div class="counter-item">
                                <div class="counter-item-style"></div>
                                <div class="counter-item-inner p-5">
                                    <i class="fas fa-heart fa-4x new_color"></i>
                                    <h4 class="text-dark my-4 need_space  contact_text">Years Experiance</h4>
                                    <div class="counter-counting">
                                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">17</span>
                                        <span class="h1 fw-bold text-white">+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 text-center pt-4 wow fadeInUp" data-wow-delay="0.9s">
                        <a class="counter-btn btn btn-secondary py-3 px-5" href="#">Join With Us</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Fact Counter -->

        <!-- Projects Start -->
        <!-- <section id="project">
            <div class="container-fluid project py-5">
                <div class="container py-5">
                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                        <p class="text-uppercase text-secondary fs-5 mb-0">Our Projects</p>
                        <h2 class=" text-capitalize mb-3 contact_text">Recent Completed Projects</h2>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="project-img">
                                            <img src="images/ratnakart3.jpg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="project-content mb-4">
                                            <p class="fs-5 text-secondary mb-2">Architecture</p>

                                            <p class="mb-0 mt-3">

                                                Architecture is the art and technique of designing and building, as distinguished from the skills associated with construction. It is both the process and the product of sketching, conceiving, planning, designing, and constructing buildings or other structures.</p>
                                        </div>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="project-img">
                                            <img src="images/ratnakart3.jpg" class="img-fluid w-100 pt-3 ps-3" alt=""> 
                                            <img src="images/interior1.jpeg" class="img-fluid w-100 pt-3 ps-3" alt="">

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="project-content mb-4">
                                            <p class="fs-5 text-secondary mb-2">Interior Design</p>
                                            <p class="mb-0 mt-3">Interior design plays a crucial role in the construction of any space, whether it's a home, an office, or a commercial establishment. It goes beyond mere aesthetics as it aims to create functional and appealing environments that cater to the needs and preferences of the occupants.</p>
                                        </div>
                                     <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="project-img">
                                            <img src="images/house and exterior.jpeg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="project-content mb-4">
                                            <p class="fs-5 text-secondary mb-2">House & Exterior</p>
                                            <p class="mb-0 mt-3">The exterior home design plays a crucial role in making guests and neighbours stop in their tracks and gawk in awe. Hence, planning the exterior design of a home is a daunting process of colour choices, materials and balancing shape.</p>
                                        </div>
                                         <a class="btn btn-primary py-2 px-4" href="#">Read More</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-item">
                                <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="project-img">
                                            <img src="images/granade.jpeg" class="img-fluid w-100 pt-3 ps-3" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="project-content mb-4">
                                            <p class="fs-5 text-secondary mb-2">Granite and Tile works</p>
                                            <p class="mb-0 mt-3">Granite is a natural stone that's used to make tiles, and tiles can be made from a variety of materials, including ceramic, porcelain, and vitrified substances. Here are some things to consider when comparing granite and tiles:
                                                Composition
                                                Granite is an igneous rock that's formed when magma from deep within the Earth cools on the surface. Tiles can be made from a variety of materials, including ceramic, porcelain, and vitrified substances. </p>
                                        </div>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-secondary py-3 px-5" href="#">More Projects</a>
                    </div> 
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Projects End -->

        <!-- <section id="make_app">
            <div class="container py-5">
                <h2 class="text-center contact_text mb-5">Make an Appointment</h2>
                <div class="row">
                    <div class="col-6">
                        <img src="images/app.webp" alt="" class="img-fluid h-50">
                    </div>
                    <div class="col-6 ">
                        <form action="contactform.php" method="post" role="form" class="php-email-form ">

                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" name="contactnumber" id="email" placeholder="Your Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating ">
                                        <input type="email" class="form-control" name="contactemail" id="subject" placeholder="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating ">
                                        <textarea class="form-control" name="contactmessage" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="Recent Completed Projects" class="some">
            <div class="container-fluid project py-5">

                <div class="container py-5">
                    <p class="text-uppercase text-secondary fs-1 mb-0 text-center">Our Projects</p>
                    <h2 class=" text-capitalize mb-5 contact_text text-center">Recent Completed Projects</h2>

                    <div class="row g-4">
                        <!-- Image Card 1 -->
                        <div class="col-md-6 col-lg-4 ">
                            <div class="card ">
                                <img src="images/1.png" class=" " alt="Image 2" style="height:300px;">
                                <div class="card-body text-center">
                                    <h5 class="contact_text">Ratnakar Constructions</h5>
                                    <!-- <p class="card-text">Short description for Image 3.</p> -->
                                    <i class="fas me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada.</i>

                                    <i class="fas  me-2 contact_text    ">8999069990,9848424956</i>
                                    <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                                </div>
                            </div>
                        </div>
                        <!-- Image Card 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img src="images/3.png" class="img-fluid" alt="Image 2" style="height:300px;">
                                <div class="card-body text-center">
                                    <h5 class="contact_text">Ratnakar Constructions</h5>
                                    <!-- <p class="card-text">Short description for Image 3.</p> -->
                                    <i class="fas  me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada.</i>

                                    <i class="fas  me-2 contact_text    ">8999069990,9848424956</i>
                                    <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                                </div>
                            </div>
                        </div>
                        <!-- Image Card 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <img src="images/2.png" class="img-fluid" alt="Image 3" style="height:300px">
                                <div class="card-body text-center">
                                    <h5 class="contact_text">Ratnakar Constructions</h5>
                                    <!-- <p class="card-text">Short description for Image 3.</p> -->
                                    <i class="fas me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada.</i>

                                    <i class="fas me-2 contact_text    ">8999069990,9848424956</i>
                                    <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="Progressive Projects" class="gap">
            <div class="container py-5">

                <h2 class=" text-capitalize mb-5 contact_text text-center mt-5">Progressive Projects</h2>

                <div class="row g-4">
                    <!-- Image Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="images/111.png" class=" " alt="Image 2" style="height:300px;">
                            <div class="card-body text-center">
                                <h5 class="contact_text">Ratnakar Constructions</h5>
                                <!-- <p class="card-text">Short description for Image 3.</p> -->
                                <i class="fas  me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada.</i>

                                <i class="fas  me-2 contact_text    ">8999069990,9848424956</i>
                                <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                            </div>
                        </div>
                    </div>
                    <!-- Image Card 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="images/222.png" class="img-fluid" alt="Image 2" style="height:300px;">
                            <div class="card-body text-center">
                                <h5 class="contact_text">Ratnakar Constructions</h5>
                                <!-- <p class="card-text">Short description for Image 3.</p> -->
                                <i class="fas me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada.</i>

                                <i class="fas  me-2 contact_text    ">8999069990,9848424956</i>
                                <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                            </div>
                        </div>
                    </div>
                    <!-- Image Card 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="images/333.png" class="img-fluid" alt="Image 3" style="height:300px">
                            <div class="card-body text-center ">
                                <h5 class="contact_text">Ratnakar Constructions</h5>
                                <!-- <p class="card-text">Short description for Image 3.</p> -->
                                <i class="fas me-2 contact_text"> 27-5-24,Buddavarapu street and Buildings,Kakinada</i>

                                <i class="fas  me-2 contact_text    ">8999069990,9848424956</i>
                                <!-- <i class="fas fa-envelope me-2 contact_text">ratnakarconstructions</i> -->
                            </div>
                        </div>
                    </div>
                </div>






            </div>



        </section>




        <!-- <section id="Construction and Project Management" class="gap">
            <div class="container">
                <h2 class="text-capitalize text-center fs-2 mb-5 contact_text">Construction and Project Management</h2>
                <div class="row">
                    <div class="ftco-departments">
                        <div class="col-md-12  "
                            style="background-color: rgb(236, 234, 234); padding-top: 10px; padding-bottom: 10px; border-radius: 8px; margin-bottom: 50px;">
                            <div class="nav d-flex justify-content-between nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="horizontal">
                                <div class="col-md-3 col-12  text_center">

                                    <a class="    nav-link ftco-animate active " id="v-pills-a-tab" data-bs-toggle="pill"
                                        href="#v-pills-a1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                                        3d modular of house
                                    </a>

                                </div>

                                <div class="col-md-3 col-12 text_center">

                                    <a class=" box_text_color nav-link ftco-animate" id="v-pills-b-tab" data-bs-toggle="pill"
                                        href="#v-pills-b1" role="tab" aria-controls="v-pills-b" aria-selected="false">
                                        project managing
                                    </a>
                                </div>

                                <div class="col-md-3 col-12  text_center">

                                    <a class=" box_text_color nav-link ftco-animate" id="v-pills-c-tab" data-bs-toggle="pill"
                                        href="#v-pills-c1" role="tab" aria-controls="v-pills-c" aria-selected="false">
                                        construction
                                    </a>
                                </div>

                            </div>
                        </div>


                        <div class=" tab-wrap">
                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-a1" role="tabpanel" aria-labelledby="v-pills-a-tab">

                                    <div class="row">
                                        <h3 class=" text-capitalize contact_text my-3 text-center mb-5">
                                            Experience Your Dream Home in 3D
                                        </h3>

                                        <div class=" col-md-6">


                                            <p>
                                                Experience Your Dream Home in 3D
                                                Step into the future of home design with our immersive 3D house view. Whether you're exploring the layout of your dream home or visualizing a renovation, our interactive 3D model brings every detail to life. Here's what you can expect:

                                                Full 360° Views: Rotate, zoom, and navigate through every room and corner. Experience the true scale and layout of your home from every angle.
                                                Detailed Interiors: View furniture placements, wall textures, lighting designs, and flooring options for an accurate feel of your space.
                                                Customizable Features: Experiment with different finishes, color schemes, and furniture arrangements to make the space uniquely yours.
                                                Seamless Navigation: Explore both the exterior and interior with intuitive controls that make navigation effortless.
                                            </p>

                                        </div>
                                        <div class="col-md-6">
                                            <section autoplay muted loop class="only_first mt-3  ">
                                                <video id="myVideo" width="100%" autoplay controls muted loop>
                                                    <source src="images/3d video.mp4" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                        </div>
                                    </div>
                                </div>








                                <div class="tab-pane fade  " id="v-pills-b1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                                    <div class="row col-lg-12">


                                        <div class="container">

                                            <h3 class="my-5 text-center text-capitalize contact_text">


                                                Efficient Project Management Turning Plans into Reality
                                            </h3>
                                            <p>
                                                Project management is the cornerstone of achieving organizational goals and delivering success. By blending strategic planning, effective communication, and resource optimization, we ensure that every project reaches its potential. Key aspects of our approach include:

                                                Strategic Planning: Clear goal setting, task prioritization, and timeline development to ensure every step aligns with the project's objectives.
                                                Resource Management: Optimal allocation of personnel, tools, and budgets to maximize efficiency without compromising quality.
                                                Collaborative Leadership: Encouraging teamwork and open communication to resolve challenges swiftly and foster innovation.
                                                Risk Mitigation: Proactively identifying and addressing potential obstacles to keep projects on track.
                                                Performance Monitoring: Using key metrics and regular updates to ensure milestones are met and adjustments are made when necessary.
                                                Our project management expertise spans various domains, including construction, IT, product development, and event planning. From inception to completion, we focus on delivering projects that exceed expectations, on time, and within budget.


                                            </p>




                                        </div>
                                    </div>
                                </div>


                                <div class="tab-pane fade " id="v-pills-c1" role="tabpanel" aria-labelledby="v-pills-a-tab">
                                    <div class="container">
                                        <div class="row  ">
                                            <h3 class="my-5 text-center text-capitalize contact_text">
                                                Building the Future with Excellence
                                            </h3>
                                            <div class="col-md-6">
                                                <img src="images/ratnakart25.jpg" alt="" class="img-fluid">


                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    The content of construction generally refers to the materials, elements, and considerations involved in the planning, design, and execution of a construction project. This concept can be broken down into several key components:

                                                    1. Materials of Construction
                                                    Structural Materials: Concrete, steel, wood, and masonry.
                                                    Finishing Materials: Paints, tiles, glass, and plaster.
                                                    Specialty Materials: Insulation, waterproofing, and fireproofing materials.
                                                    2. Design and Planning Elements
                                                    Architectural Design: Floor plans, elevations, and aesthetics.
                                                    Structural Design: Load calculations, reinforcement, and stability analysis.
                                                    Mechanical, Electrical, and Plumbing (MEP):
                                                    HVAC systems
                                                    Electrical wiring and fixtures
                                                    Plumbing networks
                                                    Environmental and Sustainability Considerations:
                                                    Use of eco-friendly materials
                                                    Energy-efficient designs (e.g., solar panels)
                                                    3. Construction Techniques
                                                    Traditional methods (e.g., brick-and-mortar)
                                                    Modern techniques (e.g., modular construction, 3D printing, prefabrication)
                                                    Specialized techniques for different environments (e.g., underwater, high-rise)
                                                    4. Regulations and Standards
                                                    Building codes and zoning laws.
                                                    Safety standards (e.g., OSHA in the U.S.).
                                                    Environmental regulations.
                                                    5. Project Management Components
                                                    Planning: Timeline, scheduling, and budgeting.
                                                    Execution: Resource allocation, team management, and progress tracking.
                                                    Quality Control: Ensuring the work meets the specified standards.
                                                    Risk Management: Addressing potential issues like delays, cost overruns, and safety hazards.
                                                    6. Documentation
                                                    Construction drawings, blueprints, and models.
                                                    Contracts, permits, and approvals.
                                                    Records of inspections, tests, and certifications.</p>
                                            </div>




                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  -->





        <div class="container mt-5">
            <h2 class="text-capitalize text-center fs-2 mb-5 contact_text">Construction and Project Management</h2>

            <!-- Tabs Navigation -->

<!-- 
            <div class="d-flex justify-content-around mb-3">
                <div class="custom-tab active col-md-3 col-12" data-target="#content-1 ">

                    <div class=" text_center">


                        3d modular of house


                    </div>

                </div>
                <div class="custom-tab  col-md-3 col-12" data-target="#content-2">

                    project managing
                </div>
                <div class="custom-tab  col-md-3 col-12" data-target="#content-3">
                    construction
                </div>
            </div> -->







            <div class="d-flex flex-column flex-md-row justify-content-around mb-3">
    <div class="custom-tab active col-12 col-md-3 mb-2 mb-md-0" data-target="#content-1">
        <div class="text-center">
            3D Modular of House
        </div>
    </div>
    <div class="custom-tab col-12 col-md-3 mb-2 mb-md-0" data-target="#content-2">
        <div class="text-center">
            Project Managing
        </div>
    </div>
    <div class="custom-tab col-12 col-md-3" data-target="#content-3">
        <div class="text-center">
            Construction
        </div>
    </div>
</div>


            <!-- Tabs Content -->
            <div id="content-1" class="custom-tab-content active">

                <div class="row">
                    <h3 class=" text-capitalize contact_text my-3 text-center mb-5">
                        Experience Your Dream Home in 3D
                    </h3>

                    <div class=" col-md-6">


                        <p>
                            Experience Your Dream Home in 3D
                            Step into the future of home design with our immersive 3D house view. Whether you're exploring the layout of your dream home or visualizing a renovation, our interactive 3D model brings every detail to life. Here's what you can expect:

                            Full 360° Views: Rotate, zoom, and navigate through every room and corner. Experience the true scale and layout of your home from every angle.
                            Detailed Interiors: View furniture placements, wall textures, lighting designs, and flooring options for an accurate feel of your space.
                            Customizable Features: Experiment with different finishes, color schemes, and furniture arrangements to make the space uniquely yours.
                            Seamless Navigation: Explore both the exterior and interior with intuitive controls that make navigation effortless.
                        </p>

                    </div>
                    <div class="col-md-6">
                        <section autoplay muted loop class="only_first mt-3  ">
                            <video id="myVideo" width="100%" autoplay controls muted loop>
                                <source src="images/3d video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                    </div>
                </div>
            </div>

            <div id="content-2" class="custom-tab-content">
                <div class="container">

                    <h3 class="my-5 text-center text-capitalize contact_text">


                        Efficient Project Management Turning Plans into Reality
                    </h3>
                    <p>
                        Project management is the cornerstone of achieving organizational goals and delivering success. By blending strategic planning, effective communication, and resource optimization, we ensure that every project reaches its potential. Key aspects of our approach include:

                        Strategic Planning: Clear goal setting, task prioritization, and timeline development to ensure every step aligns with the project's objectives.
                        Resource Management: Optimal allocation of personnel, tools, and budgets to maximize efficiency without compromising quality.
                        Collaborative Leadership: Encouraging teamwork and open communication to resolve challenges swiftly and foster innovation.
                        Risk Mitigation: Proactively identifying and addressing potential obstacles to keep projects on track.
                        Performance Monitoring: Using key metrics and regular updates to ensure milestones are met and adjustments are made when necessary.
                        Our project management expertise spans various domains, including construction, IT, product development, and event planning. From inception to completion, we focus on delivering projects that exceed expectations, on time, and within budget.


                    </p>




                </div>
            </div>
            <div id="content-3" class="custom-tab-content">
                <div class="container">
                    <div class="row  ">
                        <h3 class="my-5 text-center text-capitalize contact_text">
                            Building the Future with Excellence
                        </h3>
                        <div class="col-md-6">
                            <img src="images/ratnakart25.jpg" alt="" class="img-fluid">


                        </div>
                        <div class="col-md-6">
                            <p>
                                The content of construction generally refers to the materials, elements, and considerations involved in the planning, design, and execution of a construction project. This concept can be broken down into several key components:

                                1. Materials of Construction
                                Structural Materials: Concrete, steel, wood, and masonry.
                                Finishing Materials: Paints, tiles, glass, and plaster.
                                Specialty Materials: Insulation, waterproofing, and fireproofing materials.
                                2. Design and Planning Elements
                                Architectural Design: Floor plans, elevations, and aesthetics.
                                Structural Design: Load calculations, reinforcement, and stability analysis.
                                Mechanical, Electrical, and Plumbing (MEP):
                                HVAC systems
                                Electrical wiring and fixtures
                                Plumbing networks
                                Environmental and Sustainability Considerations:
                                Use of eco-friendly materials
                                Energy-efficient designs (e.g., solar panels)
                                3. Construction Techniques
                                Traditional methods (e.g., brick-and-mortar)
                                Modern techniques (e.g., modular construction, 3D printing, prefabrication)
                                Specialized techniques for different environments (e.g., underwater, high-rise)
                                4. Regulations and Standards
                                Building codes and zoning laws.
                                Safety standards (e.g., OSHA in the U.S.).
                                Environmental regulations.
                                5. Project Management Components
                                Planning: Timeline, scheduling, and budgeting.
                                Execution: Resource allocation, team management, and progress tracking.
                                Quality Control: Ensuring the work meets the specified standards.
                                Risk Management: Addressing potential issues like delays, cost overruns, and safety hazards.
                                6. Documentation
                                Construction drawings, blueprints, and models.
                                Contracts, permits, and approvals.
                                Records of inspections, tests, and certifications.</p>
                        </div>




                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JavaScript -->
        <script>
            $(document).ready(function() {
                // Tab click event
                $(".custom-tab").on("click", function() {
                    // Remove active class from all tabs
                    $(".custom-tab").removeClass("active");
                    // Add active class to clicked tab
                    $(this).addClass("active");

                    // Hide all tab contents
                    $(".custom-tab-content").removeClass("active");
                    // Show the content associated with clicked tab
                    $($(this).data("target")).addClass("active");
                });
            });
        </script>










        <!-- Team Start -->
        <!-- 
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Our Team</p>
                    <h2 class="display-4 text-capitalize mb-3">Expert team members.</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item border border-primary p-1">
                            <div class="team-border-style-1"></div>
                            <div class="team-border-style-2"></div>
                            <div class="team-border-style-3"></div>
                            <div class="team-border-style-4"></div>
                            <div class="team-img">
                                <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                                <div class="team-icon d-flex justify-content-around">
                                    <a class="btn btn-secondary btn-md-square text-white mx-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-top-0 bg-white py-3">
                                <h4 class="mb-0">Masud Maria</h4>
                                <p class="mb-0">Foreman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item border border-primary p-1">
                            <div class="team-border-style-1"></div>
                            <div class="team-border-style-2"></div>
                            <div class="team-border-style-3"></div>
                            <div class="team-border-style-4"></div>
                            <div class="team-img">
                                <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                                <div class="team-icon d-flex justify-content-around">
                                    <a class="btn btn-secondary btn-md-square text-white mx-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-top-0 bg-white py-3">
                                <h4 class="mb-0">Masud Maria</h4>
                                <p class="mb-0">Foreman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item border border-primary p-1">
                            <div class="team-border-style-1"></div>
                            <div class="team-border-style-2"></div>
                            <div class="team-border-style-3"></div>
                            <div class="team-border-style-4"></div>
                            <div class="team-img">
                                <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                                <div class="team-icon d-flex justify-content-around">
                                    <a class="btn btn-secondary btn-md-square text-white mx-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-top-0 bg-white py-3">
                                <h4 class="mb-0">Masud Maria</h4>
                                <p class="mb-0">Foreman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item border border-primary p-1">
                            <div class="team-border-style-1"></div>
                            <div class="team-border-style-2"></div>
                            <div class="team-border-style-3"></div>
                            <div class="team-border-style-4"></div>
                            <div class="team-img">
                                <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                                <div class="team-icon d-flex justify-content-around">
                                    <a class="btn btn-secondary btn-md-square text-white mx-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-secondary btn-md-square text-white me-3" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center border border-top-0 bg-white py-3">
                                <h4 class="mb-0">Masud Maria</h4>
                                <p class="mb-0">Foreman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Team End -->

        <!-- Blog Start -->
        <!-- <div class="container-fluid blog pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">News & Blog</p>
                    <h2 class="display-4 text-capitalize mb-3">Our latest news post and articles?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  -->
        <!-- Blog End -->



        <!-- Testimonial Start -->

        <!-- <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-1 mb-0">Testimonials</p>
                    <h2 class=" text-capitalize mb-3 contact_text">Our clients reviews.</h2>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.4s">
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary  col-md-3 col-12">
                                <p class="mb-0">He is a very friendly and helpful man,always cheerful and ready to understand the exact requirements of his clients whether is architectural excellence or convenience and comfort of the client about their house.I wish him the very best in all his ventures and i am sure,in future also,he will take up prestigeous projects and come out with flying colours in his profession as a sound and efficient architect.I wish him him and his family all the best and blessings of almighty.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/client2.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark contact_text">GROUP CAPTAIN M S BOSE</h4>
                                    <p class="m-0 pb-3">Ramanayya peta, Kakinada.</p>

                                     <div class="d-flex text-secondary pe-5">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary col-md-3 col-12">
                                <p class="mb-0">I wish to thank you for the great job you did on my home.The team was professional,they kept to the schedule,and the overall cost was very reasonable.Your work really made the place look more alive than ever. Thank you for putting your passion and hard work into it and giving us a very beautiful and spacious home.Your time and efforts are appreciated.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/client2.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark contact_text">TADIMETI SAI KUMAR</h4>
                                    <p class="m-0 pb-3">Madhavapatnam,Kakinada.</p>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary col-md-3 col-12">
                                <p class="mb-0">Our building engineer Mr.Buddhavarapu Ratnakar has prooved himself as the best committed engineer cum friend.He built our house with utmost good care and attended the job with full dedication and his approach is quite professional and gave his best to us. He gives top priority to the satisfication of his customers.He also takes care of any shortcomings even after the construction/execution of project is over. As a customer we are totally satisfied with his work.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/client2.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark contact_text">ASV RAMANAMURTHY</h4>
                                    <p class="m-0 pb-3">Main Road,Kakinada.</p>
                                 
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-primary position-absolute" style="bottom: 30px; right: 0;"></i>
                            <div class="mb-4 pb-4 border-bottom border-secondary col-md-3 col-12">
                                <p class="mb-0">Despite being a lorry owner who transports building Materials,I choose Ratnakar Constructions to construct my home along with my daughter's home because of their commitment towards delivering our dream house.
                                </p>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="me-4">
                                    <img src="img/client2.jpg" class="img-fluid w-100" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="d-block">
                                    <h4 class="text-dark contact_text">VIGNESWARA RAO BODDU</h4>
                                    <p class="m-0 pb-3">Auto Nagar, Kakinada.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Testimonial End -->




        <section class="package">
            <h2 class="text-center mt-5 text-uppercase text-secondary fs-3 contact_text ">Our Packages</h2>
            <div class="container mt-5">
                <div class="row Packages ">
                    <div class="col-md-12 col-lg-4 text-center content">
                        <h2 class="mb-3 contact_text">Starter</h2>
                        <p>This minimal package gives you affordability without compromising quality which is perfect for comfortable residential construction in Kakinada.</p> <a href="#contact"> <button class=" btn card_btn  btn-primary">Enquire Now</button></a>
                    </div>
                    <div class="col-md-12 col-lg-4 text-center content">
                        <h2 class="mb-3  contact_text">Professional</h2>
                        <p> This minimal package gives you affordability without compromising quality which is perfect for comfortable residential construction in Kakinada. </p> <a href="#contact"> <button class=" btn card_btn  btn-primary">Enquire Now</button></a>
                    </div>
                    <div class="col-md-12 col-lg-4 text-center content">
                        <h2 class="mb-3  contact_text">Premium</h2>
                        <p> Our premium package brings opulence and sophistication to your residential villa that is tailored for those seeking the pinnacle of luxury.</p> <a href="#contact"> <button class=" btn card_btn btn-primary">Enquire Now</button></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="banking">
            <div class="container-fluid py-4"></div>
            <h2 class="text-center text_center">Our Banking Partners</h2>

            <div class="container py-5">
                <div class="row">
                    <div class="col-12 pics">
                        <img src="images/11.png" alt="" class="img-fluid">
                        <img src="images/22.png" alt="" class="img-fluid">
                        <img src="images/partner1.svg" alt="" class="img-fluid">
                        <img src="images/partner2.svg" alt="" class="img-fluid">
                        <img src="images/partner3.svg" alt="" class="img-fluid">
                        <img src="images/partner5.svg" alt=""  class="img-fluid">

                    </div>
                </div>
            </div>
        </section> -->
        <section>
            <div class="container ">
                <div class="container-fluid py-5"></div>
                <h2 class="text-center  partner text-uppercase text-secondary fs-3  contact_text">Our Banking Partners</h2>
                <div class="custom-slide-container swiper">
                    <div class="custom-slide-content">
                        <div class="custom-card-wrapper swiper-wrapper py-5 sliders">

                            <div class="custom-card custom_card_bg_two swiper-slide col-12 col-md-6 col-lg-4">
                                <img src="images/icici.jpg" alt="" class="img-fluid text-center border 2px solid ">
                            </div>

                            <div class="custom-card custom_card_bg_two swiper-slide col-12 col-md-6 col-lg-4">
                                <img src="images/22.png" alt="" class="img-fluid">
                            </div>

                            <div class="custom-card custom_card_bg_two swiper-slide col-12 col-md-6 col-lg-4">
                                <img src="images/partner1.svg" alt="" class="img-fluid">
                            </div>

                            <div class="custom-card custom_card_bg_two swiper-slide col-12 col-md-6 col-lg-4">
                                <img src="images/partner2.svg" alt="" class="img-fluid">
                            </div>

                            <div class="custom-card custom_card_bg_two swiper-slide col-12 col-md-6 col-lg-4">
                                <img src="images/partner3.svg" alt="" class="img-fluid">
                            </div>




                            <!-- <div class="swiper-button-next custom-swiper-navBtn"></div>
        <div class="swiper-button-prev custom-swiper-navBtn"></div> -->


                            <script>
                                var swiper = new Swiper(".custom-slide-content", {
                                    slidesPerView: 3,
                                    spaceBetween: 25,
                                    loop: true,
                                    centerSlide: 'true',
                                    fade: 'true',
                                    grabCursor: 'true',
                                    pagination: {
                                        el: ".custom-swiper-pagination",
                                        clickable: true,
                                        dynamicBullets: true,
                                    },
                                    autoplay: {
                                        delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
                                        disableOnInteraction: false, // Keeps autoplay active even after manual swiping
                                    },
                                    navigation: {
                                        nextEl: ".swiper-button-next.custom-swiper-navBtn",
                                        prevEl: ".swiper-button-prev.custom-swiper-navBtn",
                                    },

                                    breakpoints: {
                                        0: {
                                            slidesPerView: 1,
                                        },
                                        520: {
                                            slidesPerView: 2,
                                        },
                                        950: {
                                            slidesPerView: 3,
                                        },
                                    },
                                });
                            </script>

                        </div>
        </section>
        <!---Contact Start--------->
        <section id="contact">
            <div class="container-fluid contact bg-light py-5">
                <div class="container py-5">
                    <div class="row g-5 mb-5">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                                <p class="text-uppercase text-secondary fs-3 mb-0">Contact us</p>
                                <!-- <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2> -->
                                <!-- <p class="mb-0">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                            </div>
                            <form action="contactform.php" method="post" role="form" class="php-email-form">

                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" name="contactname" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control" name="contactnumber" id="email" placeholder="Your Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating ">
                                            <input type="phone" class="form-control" name="contactnumber" id="phone" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating ">
                                            <input type="text" class="form-control" name="contactproject" id="project" placeholder="Project">
                                            <label for="project">Your Project</label>
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <div class="form-floating ">
                                            <input type="email" class="form-control" name="contactemail" id="subject" placeholder="email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating ">
                                            <textarea class="form-control" name="contactmessage" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <div class="contact-map h-100 w-100 my-5">
                                <!-- <iframe class="h-100 w-100" 
                                style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d61063.794535250905!2d82.19210405663631!3d16.950571173303814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a3827716b4dde65%3A0x67d7e63524de062b!2sRatnakar%20Constructions%2C%20Kakinada.!3m2!1d16.9504932!2d82.23330399999999!5e0!3m2!1sen!2sin!4v1732260331482!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="row g-5">
                        <div class="col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="d-inline-flex bg-white w-100 p-4">
                                <i class="fas fa-map-marker-alt fa-2x icon me-4"></i>
                                <div>
                                    <h4 class="contact_text">Address</h4>
                                    <p class="mb-0">27-5-24,Buddavarapu Street and Buildings,kakinada</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="d-inline-flex bg-white w-100  p-4">
                                <i class="fas fa-envelope fa-2x icon  me-4"></i>
                                <div>
                                    <h4 class="contact_text">Mail Us</h4>
                                    <p class="mb-0">ratnakarconstructions2007
                                        @gmail
                                        .com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="d-inline-flex bg-white w-100  p-4">
                                <i class="fa fa-phone-alt fa-2x icon me-4"></i>
                                <div>
                                    <h4 class="contact_text">Telephone</h4>
                                    <p class="mb-0">8999069990,9848424956
                                        9381457864
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---Contact End------>





        <!-- Footer Start -->
        <div class="container-fluid footer py-3 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-2">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-2 col-xxl-3 d-flex flex-column justify-content-center">
                        <div class="footer-item">
                            <div class="footer-item">
                                <div class="position-relative mx-auto">
                                    <a href="index.php"> <img src="img/logo.jpg" alt="" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2 col-xxl-2">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text mb-4 contact_text">Explore</h4>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> About Us</a>

                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Services</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Gallery</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Projects</a>
                            <!-- <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> testimonial</a> -->
                            <!-- <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Our Team</a> -->
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 col-xxl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text mb-4 contact_text">Our Services</h4>

                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i>Designing plans</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Construction of Futurstic individual Houses</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Construction of Sophisticated Duplex Houses</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Building of Avant Garde Apartments </a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Interior and Exterior Works</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Construction Supervision</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> Building Contractors</a>
                            <a href="#"><i class="fas fa-angle-right me-2 new_space"></i> 3d view of house</a>


                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 col-xxl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text mb-4 contact_text">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2 new_space"></i> 27-5-24,Buddavarapu street and Buildings,Kakinada.</a>

                            <a href=""><i class="fas fa-phone me-2 new_space    "></i> 8999069990,9848424956</a>
                            <a href=""><i class="fas fa-phone me-2 new_space"></i> 9381457864</a>
                            <a href=""><i class="fas fa-envelope me-2 new_space"></i>ratnakarconstructions</a>



                            <div class="footer-btn d-flex align-items-center">
                                <a class="btn btn-secondary btn-md-square me-2" href="https://www.facebook.com/ratnakarconstructionskkd/"><i class="fab fa-facebook-f text-white"></i></a>
                                <!-- <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-twitter text-white"></i></a> -->
                                <a class="btn btn-secondary btn-md-square me-2" href="https://www.instagram.com/ratnakarconstructionskkd/"><i class="fab fa-instagram text-white"></i></a>
                                <!-- <a class="btn btn-secondary btn-md-square me-0" href=""><i class="fab fa-whatsapp text-white"></i></a> -->
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Footer End -->


        <!-- Copyright Start -->
        <div class="container-fluid copyright py-2">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="terms.html" class=" text-white">Terms & conditions :</a><a href="privacy.html" class=" text-white"> Privacy & Policy</a></span>
                    </div>
                    <div class="col-md-6 text-center text-white text-md-end ">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By
                        <a class="" href=""> <img src="img/Bhavi_Branding_Stamp.png" class="brand" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
        <a href="https://api.whatsapp.com/send?phone=9848424956" style="color: #fff;" class="whatsapp-link" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>


        <a href="images/Ratnakar Constructions (1).pdf" download id="" class="navbar-brand p-0">
            <img src="images/logor.png" class="whatsapp-link1" alt="" style="width:180px; height:100px">
        </a>

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>

        <script>
            $(document).ready(function() {

                $(`[unique-script-id="w-w-dm-id"] .btn-box`).click(function() {
                    $(this).parent().children(".overlay").show();

                });


                $(`[unique-script-id="w-w-dm-id"] .close`).click(function() {
                    $(`[unique-script-id="w-w-dm-id"] .overlay`).hide();
                });
            });
        </script>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>


        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



        <!-- <a href="https://wa.me/1234567890" class="whatsapp-float" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
    </a> -->



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



        </body>

        </html>