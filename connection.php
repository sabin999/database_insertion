<?php $mysqli = new mysqli("localhost","root","","names");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(!mysqli_select_db($mysqli,'names'))
{
  echo 'Not Selected the Database';
}

$Name = $_POST["name"];

$sql = "INSERT INTO users (name) VALUES ('$Name')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("refresh:2; url=index1.html");
?>