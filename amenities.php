<?php
require('admin/db_config.php');
require('admin/essentials.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAGCARLAN FOREST RESORT - AMENITIES</title>
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
          <h2 class="fw-bold h-font text-center">OUR AMENITIES</h2>
          <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">Our resort offers an array of amenities designed
                 to elevate your stay to unparalleled levels of comfort and relaxation.
                  <br>These are just a glimpse of the many
                   amenities awaiting you at our resort, promising a memorable and rejuvenating getaway.
            </p>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a1.png" width="40px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Swimming Pools</h5>
                        </div>
                        <p>Dive into our refreshing swimming pool, perfect for
                             a leisurely swim or soaking up the sun's rays!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a5.png" width="40px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Airconditioned Room</h5>
                        </div>
                        <p>Retreat to your air-conditioned room, ensuring a cool
                             and comfortable environment throughout your stay.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a3.png" width="20px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Batis</h5>
                        </div>
                        <p>Explore the tranquil beauty of our batis (river),
                             where you can unwind amidst nature's serenity. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a6.png" width="40px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Restaurant</h5>
                        </div>
                        <p> Indulge your taste buds at
                             our on-site restaurant, serving delectable dishes 
                             crafted with locally sourced ingredients.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a7.png" width="40px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Wi-Fi</h5>
                        </div>
                        <p>Wi-Fi access available throughout the property, for you to stay
                             in touch with loved ones or catch up on work.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                        <div class="d-flex align-items-center mb-2">
                            <img src="a4.png" width="40px" height="29px">
                            <h5 class="m-0 ms-3" style="color: #2bb030;">Shower with Heater</h5>
                        </div>
                        <p>Relax and rejuvenate with our showers
                             equipped with heaters, ensuring a comfortable bathing experience</p>
                    </div>
                </div>
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
                       running water straight from Mt. Banahaw. 
                    </p>
                </div>
                <div class="col-lg-4 p-4">
                    <h5>Links</h5>
                    <a href="index.html" class="d-inline-block mb-2 text-decoration-none">Home</a><br>
                    <a href="rooms.html" class="d-inline-block mb-2 text-decoration-none">Rooms</a><br>
                    <a href="amenities.html" class="d-inline-block mb-2 text-decoration-none">Amenities</a><br>
                    <a href="about.html" class="d-inline-block mb-2 text-decoration-none">About</a><br>
                    <a href="contactUs.html" class="d-inline-block mb-2 text-decoration-none">Contact Us</a><br>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>
