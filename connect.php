

<?php
/*
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $nic = $_POST['nic'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $Room_category = $_POST['Room_category'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];

    $conn = new mysqli('localhost', 'root', '', 'final_project');

  // Validate room availability
$available_rooms_query = "SELECT room_id FROM room_table
WHERE room_id NOT IN (
   SELECT room_id FROM room_reservation_table
   WHERE check_in <= '$check_out'
   AND check_out >= '$check_in'
)";

$result = $conn->query($available_rooms_query);

if ($result->num_rows > 0) {

    // Room available, proceed with booking
    $row = $result->fetch_assoc();
    $booked_room = $row['room_id'];

    $guest_check_query = "SELECT guest_id FROM customer_table WHERE NIC = '$nic'";
    $guest_result = $conn->query($guest_check_query);

       if ($guest_result->num_rows > 0) {
            $guest_row = $guest_result->fetch_assoc();
            $guest_id = $guest_row['guest_id'];
        } else {
            $insert_guest_query = "INSERT INTO customer_table (Name, Email, NIC, Phone)
            VALUES ('$name', '$email', '$nic', '$phone')";

            if ($conn->query($insert_guest_query) === TRUE) {
            $guest_id = $conn->insert_id; 
            } else {
            echo "Error: " . $insert_guest_query . "<br>" . $conn->error;
            exit;
            }

        }
       
    // Insert booking data into the database
    $insert_booking_query = "INSERT INTO room_reservation_table (guest_id, room_id, check_in, check_out)
                            VALUES ('$guest_id', '$booked_room' , '$check_in' , '$check_out' )";
    
    if ($conn->query($insert_booking_query) === TRUE) {
        echo "<script>alert('Request sent successfully! \\n We will inform you through an email as soon');</script>"; 
    } else {
        echo "Error: " . $insert_booking_query . "<br>" . $conn->error;
    }
} else {
    // No available rooms for the selected dates
    echo "<script>alert('Sorry, no rooms available for the selected dates.');</script>"; 
}
$conn->close();

}
*/


$name = $_POST['name'];
$mail = $_POST['mail'];
$nic = $_POST['nic'];
$check_date = $_POST['check_date'];
$out_date = $_POST['check_out'];
$Room_category = $_POST['Room_category'];
$phone = $_POST['phone'];

$conn = new mysqli('localhost', 'root', '', 'richwin');

if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO web (Name, Room_type, Email, NIC, Check_in, Check_out, Phone) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssiii", $name, $Room_category, $mail, $nic, $check_date, $out_date, $phone);
  $stmt->execute();
  echo "Booking Successfully...";
  $stmt->close();
  $conn->close();
}

?>