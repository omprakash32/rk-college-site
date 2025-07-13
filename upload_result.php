
<?php
$conn = new mysqli("localhost", "root", "", "rk_college");
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); }

$roll = $_POST['roll'];
$name = $_POST['name'];
$course = $_POST['course'];
$marks = $_POST['marks'];

$sql = "INSERT INTO results (roll, name, course, marks) VALUES ('$roll', '$name', '$course', '$marks')";
if ($conn->query($sql) === TRUE) {
  echo "Result uploaded successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
