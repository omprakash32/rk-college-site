
<?php
// Simple login check
$username = $_POST['username'];
$password = $_POST['password'];

// Dummy check, replace with database lookup
if ($username == "student" && $password == "1234") {
  echo "Login successful. Welcome, $username!";
} else {
  echo "Invalid credentials. Please try again.";
}
?>
