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
    <link rel="stylesheet" href="css/style.css">
    <!--script.js file link -->
    <script>
       document.addEventListener("DOMContentLoaded", function() {
      var animatedRoom = document.getElementById("animatedRoom");

      window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;
        var windowHeight = window.innerHeight;
        var imagePosition = animatedRoom.offsetTop;

        if (scrollPosition > imagePosition - windowHeight / 2) {
          animatedRoom.style.opacity = 1;
          animatedRoom.style.transform = "translateY(0)";
        }
      });
    });
    </script>
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
    <div class="hero-img"id="accomadationhero-img">
<h1 class="accomadation-h1">Accomadation</h1>
  </div>
          
   


   <!--room-->
   <section id="section1">
      <div class="container-gallery py-5">
        <div class="text-center">
          <h2 class="section-title">Richwin Hotel</h2>
          <h1 class="mb-3"style="color:#0076A3;">Our Room</h1>
        </div>
</section>

   <div class="container p-5"id="our-room">
    <div class="row g-4">
       
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
        <img src="img/room1.jpg" class="card-img-top" alt="">
    <div class="card-body">
    <h5>Single</h5>
    <!--<h6 class="mb-4">₹ 1,435</h6>-->
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Double Bed
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Free Wi-Fi
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Interconnected Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Room Service
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Study Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Mineral Water
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Housekeeping
    </span>
</div>
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
<small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
    </span>
</div>
<div class="d-flex ">
    <a href="#section4" class="btn btn-warning text-white custome-bg shadow-none">Book Now</a>
  </div>
  </div>
</div>
        </div>
   



   <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
        <img src="img/room.jpg" class="card-img-top" alt="">
    <div class="card-body">
    <h5>Double</h5>
    <!--<h6 class="mb-4">₹ 1,435</h6>-->
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Double Bed
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Free Wi-Fi
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Interconnected Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Room Service
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Study Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Mineral Water
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Housekeeping
    </span>
</div>
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
<small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
    </span>
</div>
<div class="d-flex ">
    <a href="#section4" class="btn btn-warning text-white custome-bg shadow-none">Book Now</a>
  </div>
  </div>
</div>
        </div>

        

        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
        <img src="img/room3.jpg" class="card-img-top" alt="">
    <div class="card-body">
    <h5>Thrible</h5>
    <!--<h6 class="mb-4">₹ 1,435</h6>-->
    <div class="facilities mb-4">
     <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Double Bed
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Free Wi-Fi
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Interconnected Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Room Service
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Study Room
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Mineral Water
    </span>
    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
    Housekeeping
    </span>
</div>
<div class="rating mb-4">
<h6 class="mb-1">Rating</h6>
<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
<small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
          <small class="fa fa-star"style="color:#FFD700"></small>
    </span>
</div>
<div class="d-flex ">
    <a href="#section4" class="btn btn-warning text-white custome-bg shadow-none">Book Now</a>
  </div>
  </div>
</div>
        </div>
    </div>
   </div>
</section>



<!--Room booking-->

<section id="section4">
      <div class="container-room py-5 room-book">
        <div class="text-center">
          <h1 class="mb-5"style="color:#0076A3;">Book Now</h1>
        </div>

      <div class="container-book py-5">
        <div class="container">
          <div class="contact p-3">
            <div class="row g-5 align-item-center">
              <div class="col-md-6 text-white">
                <h1 class="text-white mb-4">Online Booking From Mail</h1>
                <h6 class="text-white mb-3">Welcome to The Richwin Hotel, Kurunegala your five-star haven in the heart of the city.</h6>
                <p class="mb-3">Phone: +94-37-226-3110</p>
                <p class="mb-4">Email:info.hotelrichwin@gmail.com</p>
               </div>
    <div class="col-md-6">
  <h1 class="text-white mb-4">Book Now</h1>
  <form action="connect.php" method="post">
    <div class="row g-3">

      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control bg-transparent"style="color:#ffffff" id="name" placeholder="Your Name" name="name">
          <label for="name">Your Name</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control bg-transparent"style="color:#ffffff" id="email" placeholder="Your Email" name="mail">
          <label for="email">Your Email</label>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-floating">
          <input type="text" class="form-control bg-transparent"style="color:#ffffff" id="nic" placeholder="Your NIC" name="nic">
          <label for="nic">Your NIC</label>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating">
          <input type="date" class="form-control bg-transparent"style="color:#ffffff" id="time" name="check_date">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating">
          <input type="date" class="form-control bg-transparent"style="color:#ffffff" id="time" name="check_out">
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating">
          <select name="Room_category" id="select" class="form-select bg-transparent"style="color:#ffffff">
            <option value="Room category"style="color:#5e6c79">Room category</option>
            <option value="Single"style="color:#5e6c79">Single</option>
            <option value="Double"style="color:#5e6c79">Double</option>
            <option value="Thriple"style="color:#5e6c79">Thriple</option>
          </select>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control bg-transparent"style="color:#ffffff" id="phone" placeholder="Phone Number" name="phone">
          <label for="phone">Phone Number</label>
        </div>
      </div>

      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control bg-transparent"style="color:#ffffff" placeholder="Write your message here" id="message" style="height:100px" name="message"></textarea>
          <label for="message">Write your message here</label>
        </div>
      </div>

      <div class="col-12">
        <button class="btn btn-outline-light w-100 py-3" type="submit">Submit Now</button>
      </div>

    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>


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