<?php
require('admin/db_config.php');
require('admin/essentials.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAGCARLAN FOREST RESORT - ABOUT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Slackside+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="common.css">
       
       

    </head>
   
    <body class="bg-light">
        <!-- NAVBAR & LOGO -->
        <?php include('header.php');?>
        
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
              <p class="text-center mt-3">Nagcarlan Forest Resort is a “natural spring resort”
                 located at Brgy Silangan Napapatid, Nagcarlan, Laguna. <br>Our facilities include
                  room accommodations, Maria’s Restaurante, swimming pools and “batis” running
                   water straight from Mt. Banahaw.
              </p>
  
        </div>

        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-4 col-md-5 mb-4 order-lg-2 order-md-2 order-1 text-center">
                    <h3 class="mb-3" style="color: #2bb030;"><i>Get Lost in Nagcarlan Forest Resort!</i></h3>
                    <p class="inline-justify">
                        Indulging in the captivating beauty of our resort showcased in the video is 
                        truly a joy. The serene footage captures our lush surroundings, inviting pools,
                         and the tranquil river. It's a haven for relaxation and recreation, whether
                          lounging by the pool or strolling along the riverbank. Come experience the
                           beauty and luxury firsthand.
                    </p>
                </div>

                <div class="col-lg-5 col-md-5 mb-4 text-center order-lg-1 order-md-1 order-2"> 
                    <div class="col-lg-5 col-md-5 mb-4 text-center order-lg-1 order-md-1 order-2"> 
                        <iframe width="700" height="450" src="https://www.youtube.com/embed/Q8nxXfYw1ug" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="room.png" width="70px">
                        <h4 class="mt-3">20+ Rooms</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="j1.png" width="110px">
                        <h4 class="mt-3">3 Swimming Pools</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="j2.png" width="108px">
                        <h4 class="mt-3">100+ Customers</h4>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                        <img src="j3.png" width="90px">
                        <h4 class="mt-3">10+ Cottages</h4>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-5 fw-bold h-font text-center">OUR STAFF</h3>

        <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper mb-5">
                    <?php
                    $about_r = selectAll('staff_details');
                    $path = ABOUT_IMG_PATH;

                    while($row = mysqli_fetch_assoc($about_r)){
                        echo<<<data
                        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                            <img src="$row[picture]" class="w-90">
                            <h5 class="mt-2">$row[name]</h5>
                        </div>
                        data;
                    } 
                    
                    ?>
                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Miko Galang</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Mark luis Vallestero</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Angelo Pullan</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Jericho Pullan</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Matthew Bueno</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Jay-R Coronado</h5>
                  </div>

                  <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="st2.png" class="w-90">
                    <h5 class="mt-2">Jerome Alberga</h5>
                  </div>
                  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            
        </div>
        
        

       

        <!-- Footer -->
        <div class="container-fluid bg-white mt-5">
            <div class="row">
                <div class="col-lg-4 p-4">
                  <h3 class="h-font fw-bold fs-3 mb-2">Nagcarlan Forest Resort</h3>
                    <p>Nagcarlan Forest Resort is a “natural spring resort” located at 
                      Brgy Silangan Napapatid, Nagcarlan, Laguna. Our facilities include
                       room accommodations, Maria’s Restaurante, swimming pools and “batis” 
                       running water straight from Mt. Banahaw. </p>
                </div>
                <div class="col-lg-4 p-4">
                    <h5>Links</h5>
                    <a href="index.php" class="d-inline-block mb-2 text-decoration-none">Home</a><br>
                    <a href="rooms.php" class="d-inline-block mb-2 text-decoration-none">Rooms</a><br>
                    <a href="amenities.php" class="d-inline-block mb-2 text-decoration-none">Amenities</a><br>
                    <a href="about.php" class="d-inline-block mb-2 text-decoration-none">About</a><br>
                    <a href="contactUs.php" class="d-inline-block mb-2 text-decoration-none">Contact Us</a><br>
                </div>
                <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Follow us</h5>
                    <a href="https://www.facebook.com/NagcarlanForestResort" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-facebook me-1"></i>Facebook</span>
                    </a>
                    <br>
                    <a href="https://www.instagram.com/nagcarlanforest?fbclid=IwAR2YVifytwtrBH454j0YknT_pvD0O96Q4ry1fWvT_3oOuJZHlqUeNSAbAwg" 
                    class="d-inline-block text-dark text-decoration-none">
                        <i class="bi bi-instagram me-1"></i>Instagram</span>
                    </a>
                </div>
            </div>
        </div>

        <h6 class="text-center bg-dark text-white p-3 m-0"></h6>

        <?php include('loginform.php');?>
     
     
        
      <script>
            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper(".swiper-container", {
                    spaceBetween: 30,
                    effect: 'fade',
                    loop: true, 
                    autoplay: {
                        delay:3500,
                        disableOnInteraction: false,
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function () {
                var swiper = new Swiper(".swiper-testimonials", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                slidesPerView: "3",
                loop:true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                },
                breakpoints: {
                    320:{
                        slidesPerView: 1,
                    },
                    640:{
                        slidesPerView: 1,
                    },
                    768:{
                        slidesPerView: 2,
                    },
                    1024:{
                        slidesPerView: 3,
                    },
                }
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 4,
                spaceBetween: 40,
              pagination: {
                el: ".swiper-pagination",
              },
              breakpoints: {
                    320:{
                        slidesPerView: 1,
                    },
                    640:{
                        slidesPerView: 1,
                    },
                    768:{
                        slidesPerView: 2,
                    },
                    1024:{
                        slidesPerView: 3,
                    },
                }
            });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>
