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
          <h2 class="fw-bold h-font text-center">CONTACT US</h2>
          <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">Feel free to reach out to us through any of the following means: 
                Call us directly at the number provided,<br> send us a message via the 
                contact details listed below, or 
                alternatively, you can effortlessly get in touch by filling out the 
                form below. <br> We'll be delighted to hear from you and will respond promptly.
            </p>

        </div>

        <?php
            $contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
            $values = [1];
            $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
           
        ?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                     <iframe class="w-100 rounded mb-4"  height="320px" src="<?php echo $contact_r['iframe']?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     <h5>Address</h5>
                     <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-geo-alt-fill"></i><?php echo $contact_r['address']?>
                     </a>
                     <h5 class="mt-4">Call Us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
                        <?php echo $contact_r['pn1']?>
                        </a>
                        <br>
                        <a href="tel: +<?php echo $contact_r['pn2']?>" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>
                        <?php echo $contact_r['pn2']?>
                        </a>

                        <h5 class="mt-4">Email</h5>
                        <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill me-1"></i><?php echo $contact_r['email']?>
                        </a>

                        <h5 class="mt-4">Follow Us</h5>
                        <a href="<?php echo $contact_r['fb']?>" class="d-inline-block text-dark fs-5 me-2">
                           <i class="bi bi-facebook me-1"></i>
                        </a>
                        <a href="<?php echo $contact_r['ig']?>" 
                        class="d-inline-block text-dark fs-5">
                            <i class="bi bi-instagram me-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <form action="contactform.php"  method="POST">
                            <h5>Send a Message</h5>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Name</label required>
                                <input name="name" type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Email</label required>
                                <input name="email" type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Subject</label required>
                                <input name="subject" type="text" class="form-control shadow-none">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" style="font-weight: 500;">Message</label required>
                                <textarea name="message" class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                            </div>
                            <button name="send" type="submit" class="btn text-white custom-bg mt-3 shadow-none">SEND</button>
                        </form>
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
                     running water straight from Mt. Banahaw.</p>
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
