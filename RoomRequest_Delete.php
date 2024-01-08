<?php
session_start();
require_once('db.php');
if(isset($_GET['Name'])){
    $name=$_GET['Name'];
    $query="DELETE FROM `web` WHERE 'Name'='$name'";
    $delete=mysqli_query($con,$query);
}

$query="select * from web";
$result=mysqli_query($con,$query);
?>

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
    <style>
        .btn{
    background:#fff;
    color:darkred;
    font-size: 1.0em;
    padding: 5px 30px ;
    text-decoration:none;


}
.btn:hover{
    background:darkred;
    color:#fff;
}
</style>

</head>
<body>
   <!--Side bar-->
    <div class="side-bar"style="background:#1d1717;">
        <header>
        <h1>Richwin Admin Panel</h1>
    </header>
        <div class="menu">
            <div class="item"><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></div>
            <div class="item"><a href="RoomRequest_Table.php"><i class="fa-solid fa-bed"></i>Room</a> </div>
            <div class="item"><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></div>
        </div>
</div>


       <!--Heder name-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                   
                    <div class="card border-1 shadow-sm mb-4"style="margin-left: 20px;">
                        <div class="card-body">
                        <h3 class="mb-2"style="color:#1d1717;">Customer Room Request Delete Table</h3>
                        </div>
                </div>
                </div>
            </div>
        </div>



        
   <!--Room booking tabel-->
   <div class="container-fluid">
     <div class="row">
        <div class="col-lg-10 ms-auto p-1 overflow-hidden">
    <div class="container  p-5">
    <table class="table ">
        <thead>
            <tr class="bg-dark text-white">
                <th>Name</th>
                <th>Room-Type</th>
                <th>Email</th>
                <th>NIC</th>
                <th>Check_IN</th>
                <th>Check_OUT</th>
                <th>Phone</th>
            </tr>
                <?php
                while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                <td><?php echo $row['Name'];?></td>
                <td><?php echo $row['Room_type'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['NIC'];?></td>
                <td><?php echo $row['Check_in'];?></td>
                <td><?php echo $row['Check_out'];?></td>
                <td><?php echo $row['Phone'];?></td>
                <td class='btn'>Delete</td>


                <?php
                }
                ?>
                

            
            

            </thead>
       
    </table>
</div>

