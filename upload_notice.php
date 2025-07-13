
<?php
$conn = new mysqli("localhost", "root", "", "rk_college");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$notice = $_POST['notice'];
$sql = "INSERT INTO notices (content) VALUES ('$notice')";
if ($conn->query($sql) === TRUE) {
  echo "Notice uploaded successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
