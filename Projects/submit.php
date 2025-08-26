<?php
// Database connection
$servername = "localhost";
$username = "root"; // default in XAMPP
$password = ""; // default is empty
$dbname = "trip";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Get form values
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert query
$sql = "INSERT INTO submissions (name, email, phone, subject, message) 
        VALUES ('$name', '$email', '$phone', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('✅ Successfully Submitted!');
            window.location.href = 'form.html';
          </script>";
} else {
    echo "❌ Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
