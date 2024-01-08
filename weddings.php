<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Richwin</title>
    <!--Icon font stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <!--boostrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Swiper from CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--Font Awesome-->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <!--Gogale font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!--Stylesheet link-->
    <link rel="stylesheet" href="css/style1.css">
    <!--script.js file link -->
</head>
<body>

 <!--Main Navbar-->
 <div class="container-fluid position-relative p-0">
     <div class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" id="navbar">
     <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="Logo" width="80" height="80" class="d-inline-block hotel align-bottem ">
                Richwin Hotel
            </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarcollapse"
      aria-controls="#navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end"id="navbarcollapse">
        <div class="navbar-nav justify-content-end ms-auto py-0">
          <a href="home.php"class="nav-item nav-link font-weight-bold active">Home</a>
          <a href="accommodation.php"class="nav-item nav-link font-weight-bold">Accommodation</a>
          <a href="weddings.php"class="nav-item nav-link font-weight-bold">Weddings</a>
          <a href="gallery.php"class="nav-item nav-link font-weight-bold">Gallery</a>
          <a href="service.php"class="nav-item nav-link font-weight-bold">Other Service</a>
          <a href="contact.php"class="nav-item nav-link font-weight-bold">Contact</a>
        </div>
        </div>
        </div>


    <!--Section hero-->
    <div class="hero-img1">
    <h1 class="wedding-h1">Weddings</h1>
    </div>

            
      <div class="container p-5">
      <div class="row g-5">
      <div class="col-lg-6" style="min-height:500px;">
        <!--<div class="position-relative h-100">-->
          <!--<img src="img/couple1.jpg"alt="" style="object-fit:scale-down;" class="img-fluid position-absolute w-100 h-100">-->
          <div id="eventCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- Replace these images with your actual event images -->
                    <div class="carousel-item active position-relative h-100">
                        <img src="img/couple.jpg" class="d-block w-100 "alt="room1"style="object-fit:scale-down;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/couple2.jpg" class="d-block w-100" alt="room2"style="object-fit:scale-down;">
                    </div>
                    <div class="carousel-item">
                        <img src="img/image7.jpg" class="d-block w-100 "alt="room3"style="object-fit:scale-down;">
                    </div>

                </div>
              </div>
                </div>
         
   
      <div class="col-lg-6">
      <h1 class="mb-4"style="color:#0076A3;">Banquet Hall</h1>
      <p class="mb-2"id="about-p"style="text-align:justify">At Richwin Hotel, we take pride in offering exquisite banquet halls that seamlessly blend sophistication with comfort, creating the perfect ambiance for your special events. Whether you're hosting a grand wedding reception,
       a corporate gala, or an intimate celebration, our banquet halls are designed to exceed your expectations.</p>

       <p class="mb-1"><i class="fa-solid fa-arrow-right me-2"></i>Weddings</p>
       <p class="mb-1"><i class="fa-solid fa-arrow-right me-2"></i>Engagement</p>
       <p class="mb-1"><i class="fa-solid fa-arrow-right me-2"></i>Birthday Celebration</p>   
  
      <div class="row gy-2 gx-4 mb-4">
      <div class="col-sm-6">
        <a href="" class="btn button py-1 px-5 mt-2"style="background-color:#FFD700;">Read More</a>
      </div>
      </div>
      </div>
      </div>
      </div>


      
     


        <!--Footer section-->

<div class="container-fluid bg-dark text-light footer pt-0 mt-0" id="footer">
  <div class="conteiner py-5">
    <div class="row g-3">
      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3"> Company</h4>
        <a href="" class="btn btn-link"> About Us</a>
        <a href="" class="btn btn-link"> Contact Us</a>
        <a href="" class="btn btn-link"> Privacy Policy</a>
        <a href="" class="btn btn-link"> Terms & Condition</a>
        <a href="" class="btn btn-link"> FAQ</a>
      </div>

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Contact</h4>
        <p class="mb-2"><i class="fa fa-map-marked-alt me-3"></i>Hadirawalana ,Ihalagama, Thuriliyagama 60570</p>
        <p class="mb-2"><i class="fa-solid fa-phone-volume me-3"></i>+94-37-226-3110</p> 
        <p class="mb-2"><i class="fa-solid fa-envelope-open me-3"></i>info.hotelrichwin@gmail.com</p>
        
        <div class="d-flex pt-2">
          <a href=""class="btn btn-outline-light btn-social">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/p/Richwin-Hotel-kurunegala-100054352085094/"class="btn btn-outline-light btn-social">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.youtube.com/watch?v=tBNsjCr2nrE"class="btn btn-outline-light btn-social">
            <i class="fab fa-youtube"></i>
          </a>
          <a href=""class="btn btn-outline-light btn-social">
            <i class="fab fa-linkedin-in"></i>
          </a>

        </div>
      </div>

      

      <div class="col-lg-3 col-md-6">
        <h4 class="text-white mb-3">Newsletter</h4>
        <div class="position-relative mx-auto"style="max: width 400px;">
        <input type="text" class="form-control border-primary w-100 py-3 ps-4 pe-5"placeholder="Your Email">
        <button class="btn button py-2 position-absolute top-0 end-0 mt-2 me-2 "style="background-color:#FFD700" type="button">Submit</button>
        </div>
      </div>
    </div>
  </div>
    
 <div class="container">
  <div class="copyright">
<div class="row">
  <div class="col-md-6 text-center">
      <p class="text-center">&copy; 2023 JourneyToCeylon. All rights reserved.</p>
  </div>
</div>
</div>
</div>
</div>



    


<!--Java Script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Swiper from Script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>