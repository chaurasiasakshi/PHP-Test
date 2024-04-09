<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatgpt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Get form data
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

$set = mysqli_query( $conn , $sql );
if($set){
echo "Message sent! Thank you for your feedback."; }
else{
    echo  "Error sending the message. Please try again later.";}



}

$conn->close();
?>
