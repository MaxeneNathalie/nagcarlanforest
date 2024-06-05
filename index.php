<?php

require('admin/db_config.php');
require('admin/essentials.php');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NAGCARLAN FOREST RESORT - HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Slackside+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link rel="stylesheet" href="common.css">
        <style>
            .custom-alert{
                position: fixed;
                top: 80px;
                right: 25px;
                z-index: 1111;
            }
        </style>
       

    </head>
   
    <body class="bg-light">
         <!-- NAVBAR & LOGO -->
        <?php include('header.php');?>


        <!-- IMAGES -->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="b1.jpg" class="w-100 d-block"/>
                    </div>
                    
                    <div class="swiper-slide">
                     <img src="b2.jpg" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                      <img src="b3.jpg" class="w-100 d-block"/>
                    </a>
                    </div>
                    <div class="swiper-slide">
                     <img src="b4.jpg" class="w-100 d-block"/>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- AVAILABILITY FORM -->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 gb-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-in </label required>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500">Check-out </label required>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                                <label class="form-label" style="font-weight: 500">Adult</label>
                                <input type="number" class="form-control" min="1" placeholder="Enter number of adult" required>
                            </div>
                            
                            <div class="col-lg-2 mb-3">
                                <label class="form-label" style="font-weight: 500">Children</label>
                                <input type="number" class="form-control" min="1" placeholder="Enter number of children" required>
                            </div>
                            
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ROOMS -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 my-3" id="room1">
                    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
                        <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="c1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="x1.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="x2.jpeg" class="img-fluid rounded">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="x3.jpeg" class="img-fluid rounded">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        <div class="card-body">
                          <h5 class="card-title">El Presidente (Building 1)</h5>
                          <h6 class="mb-4">₱3500</h6>
                          <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2nd Floor
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    2 Bedrooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Good for 6 persons
                                </span>
                                
                          </div>
                           <div class="Amenities mb-4">
                                <h6 class="mb-1">Inclusions</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free use of Swimming Pool
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Entrance fee
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Breakfast
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                           </div>
                           <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">6 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Children</span>
                           </div>
                           <div class="ratings mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                           </div>
                            <div class="d-flex justify-content-evenly"> 
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room1" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
                          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3" id="room2">
                    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
                        <div id="carouselExample1" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="c2.jpeg" class="img-fluid rounded">
                              </div>
                              <div class="carousel-item">
                                <img src="x4.jpg" class="img-fluid rounded">
                              </div>
                              <div class="carousel-item">
                                <img src="x5.jpg" class="img-fluid rounded">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Pasilyo 1-4 (Building 3)</h5>
                          <h6 class="mb-4">₱2500</h6>
                          <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1st Floor
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bedroom
                                </span>
                                
                          </div>
                           <div class="Amenities mb-4">
                                <h6 class="mb-1">Inclusions</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free use of Swimming Pool
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    Breakfast
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    LED Television
                                </span>
                           </div>
                           <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Child</span>
                           </div>
                           <div class="ratings mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                           </div>
                            <div class="d-flex justify-content-evenly"> 
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room2" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
                        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3" id="room3">
                    <div class="card border-0 shadow " style="max-width: 350px; margin:auto;">
                        <div id="carouselExample2" class="carousel slide">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="c3.jpeg" class="img-fluid rounded">
                              </div>
                              <div class="carousel-item">
                                <img src="x6.jpg" class="img-fluid rounded">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Pasilyo 5-7 (Building 1)</h5>
                          <h6 class="mb-4">₱2800</h6>
                          <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1st Floor
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    1 Bedroom
                                </span>
                               
                          </div>
                           <div class="Amenities mb-4">
                                <h6 class="mb-1">Amenities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Free use of Swimming Pool
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                 Breakfast
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">
                                    LED Television
                                </span>
                           </div>
                           <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Child</span>
                           </div>
                           <div class="ratings mb-4">
                                <h6 class="mb-1">Rating</h6>
                                <span class="badge rounded-pill bg-light">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                           </div>
                            <div class="d-flex justify-content-evenly"> 
                            <?php
                            if(isset($_SESSION['name']) && !empty($_SESSION['name'])) {
                                echo '<a href="roomdetails.php?roomId=room3" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>';
                            } else {
                                echo '<button type="button" class="btn btn-sm text-white custom-bg shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal">Please login to book</button>';
                            }
                            ?>
                             
                            </div>
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-12 text-center mt-5">
                   <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
                </div>
            </div>
        </div>
         
        <!-- AMENITIES -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR AMENITIES</h2>
        <div class="container">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                   <img src="a1.png" width="110px" alt="pool">
                   <h5 class="mt-3">Swimming Pool</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="a2.png" width="60px" alt="pool">
                    <h5 class="mt-3">Smart Television</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="a3.png" width="60px" alt="pool">
                    <h5 class="mt-3">Batis</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="a5.png" width="80px" alt="pool">
                    <h5 class="mt-3">Airconditioned Room</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="a4.png" width="60px" alt="pool">
                    <h5 class="mt-3">Heater</h5>
                </div>
                
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="amenities.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Amenities >>></a>
             </div>
        </div>
        
        <!-- Photos -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHOTOS</h2>
        <div class="container">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide bg-white p-4">
                        <img src="p1.jpg" width="325" height="210">
                    </div>

                    <div class="swiper-slide bg-white p-4">
                        <img src="p2.jpg" width="325" height="210">
                    </div>

                    <div class="swiper-slide bg-white p-4">
                        <img src="p3.jpg" width="325" height="210">
                    </div>

                    <div class="swiper-slide bg-white p-4">
                        <img src="p4.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p5.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p6.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p7.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p8.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p9.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p10.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p11.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p12.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p13.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p14.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p15.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p16.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p17.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p18.jpg" width="325" height="210">
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <img src="p19.jpg" width="325" height="210">
                    </div>
                 
                </div>
                <div class="swiper-pagination"></div>
            </div>            
        </div>

        <!-- Reach Us -->
        
        <?php
            $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
            $values = [1];
            $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
           
        ?>

        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                    <iframe class="w-100 rounded"  height="320px" src="<?php echo $contact_r['iframe']?>"
                     loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Call Us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
                            +<?php echo $contact_r['pn1']?></a>
                            <br>
                        <a href="tel: <?php echo $contact_r['pn2']?>" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
                            +<?php echo $contact_r['pn2']?></a>
                    </div>

                    <div class="bg-white p-4 rounded mb-4">
                        <h5>Follow Us</h5>
                        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-facebook me-1"></i>Facebook</span>
                        </a>
                        <br>
                        <a href="<?php echo $contact_r['ig']?>" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"><i class="bi bi-instagram me-1"></i>Instagram</span>
                        </a>
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


            function alert(type,msg)
            {
                let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
                let element = document.createElement('div');
                element.innerHTML = `
                    <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
                        <strong class="me-3">${msg}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
                document.body.append(element);
            }
        </script>

       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

       
    </body>
</html>
