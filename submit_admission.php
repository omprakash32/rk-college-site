
<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "rk_college");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Collecting form data
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];

// Insert data
$sql = "INSERT INTO admissions (name, email, course) VALUES ('$name', '$email', '$course')";
if ($conn->query($sql) === TRUE) {
  echo "Admission form submitted successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
