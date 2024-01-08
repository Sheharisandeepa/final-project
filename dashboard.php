<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Richwin Hotel Admin Panel </title>

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
    <!--Stylesheet-->
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="item"><a href="room.php"><i class="fa-solid fa-bed"></i>Room </a></div>
    
    <div class="side-bar"style="background:#1d1717;">
        <header>            
        <h1>Richwin Admin Panel</h1>
    </header>
        <div class="menu">
            <div class="item"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></div>
            <div class="item"><a href="RoomRequest_Table.php"><i class="fa-solid fa-bed"></i>Room </a></div>
            <div class="item"><a href="login.php"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></div>
        </div>
</div>
       

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                   
                    <div class="card border-1 shadow-sm mb-4"style="margin-left: 20px;">
                        <div class="card-body">
                        <h3 class="mb-2"style="color:#1d1717;">Dashboard</h3>
                        </div>
                </div>
                </div>
            </div>
        </div>

       <!-- <div class="image col-lg-10 ms-auto p-0 overflow-hidden">
            <img src="image/hole.jpg"alt="">
        </div>-->


        <div class="row"style="margin-left:250px;">
             <div class="col-xl-3 col-md-6">
              <div class="card bg-primary text-white mb-4">
                <div class="card-body">View Room Request</div>
                 <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="RoomRequest_Table.php">View Details</a>
                     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                     <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Delete Room Request</div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="RoomRequest_Delete.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                     <div class="card bg-success text-white mb-4">
                         <div class="card-body">Feedback View</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                             <a class="small text-white stretched-link" href="FeedBack_Table.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                         </div>
                      </div>
                 </div>


                 <div class="col-xl-3 col-md-6">
                     <div class="card bg-danger text-white mb-4">
                        <div class="card-body">LogOut</div>
                         <div class="card-footer d-flex align-items-center justify-content-between">
                             <a class="small text-white stretched-link" href="login.php">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                         </div>
                     </div>
                 </div>
            </div>


           <!-- <div class="image col-lg-10 ms-auto p-0 overflow-hidden">
            <img src="image/hole.jpg"alt="">
        </div>-->
           

   





    <!--Java Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!--Swiper from Script-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>