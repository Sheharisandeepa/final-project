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
    <!--Gogale font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Beau+Rivage&family=DM+Serif+Display&family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!--Stylesheet link-->
    <link rel="stylesheet" href="css/style4.css">
    <!--script.js file link -->
    <script src="./js/script.js"></script>
    <script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
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
    <div class="hero-img"id="contact-img">
<h1 class="contact-h1">Contact Us</h1>
  </div>


  <section id="section1">
      <div class="container-gallery py-5">
        <div class="text-center">
          <h2 class="section-title">Richwin Hotel</h2>
          <h1 class="mb-3"style="color:#0076A3;">Write Us Your Message</h1>
        </div>
</section>


        <!--contact form-->
        <section class="contact-form">
        <div class="contactForm">
        <form action="contact_conn.php" method="post">
         <h1 class="sub-heading">Contact Us</h1>
         <p class="detail detail2">Please write us your message to info.hotelrichwin@gmail.com</p>
         <input type="text" class="input" placeholder="your name" name="name">
         <input type="text" class="input" placeholder="your email" name ="mail">
         <input type="text" class="input" placeholder="your Subject" name = "sub">
         <input type="submit" class="input submit" value="Send Message">
         
        

        </form>

        <div class="map-container">
            <div class="mapBg"></div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.2317654021276!2d80.36906719006845!3d7.551048663738403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3379ad3b2579b%3A0x1a61ca90fe850a7e!2sRichwin%20Hotel!5e0!3m2!1sen!2slk!4v1702315832681!5m2!1sen!2slk" width="100%" height="600" style="border: 2px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>
    </div>
    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Location</h1>
                <p class="detail">Hadirawalana ,Ihalagama, Thuriliyagama 60570</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="detail">info.hotelrichwin@gmail.com</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Phone</h1>
                <p class="detail">+94-37-226-3110</p>
            </article>
        </div>
    </div>
   </section>

    <!--Footer section-->

<div class="container-fluid bg-dark text-light footer pt-3 mt-3" id="footer">
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