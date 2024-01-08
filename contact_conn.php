<?php
/*$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['sub'];

$massage = $_POST['massage'];

$conn = new mysqli('localhost', 'root', '', 'richwin');

if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO user_queries (name, mail, subject, massage) 
    VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name,$mail, $subject, $massage);
  $stmt->execute();
  echo "Request Successfully...";
  $stmt->close();
  $conn->close();
}
*/


$uname = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['sub'];  // Assuming 'sub' is the correct key in your form
 // Corrected the variable name

$conn = new mysqli('localhost', 'root', '', 'richwin');

if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO user_queries (name, email, subject) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $uname , $mail, $subject);  // Corrected the variable name
  $stmt->execute();
  echo "Request Successfully...";
  $stmt->close();
  $conn->close();
}
?>
