
<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "rk_college");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$roll = $_POST['roll'];
$sql = "SELECT * FROM results WHERE roll = '$roll'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["name"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";
    echo "Marks: " . $row["marks"] . "<br>";
  }
} else {
  echo "No result found for Roll No: $roll";
}
$conn->close();
?>
