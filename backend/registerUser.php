<?php
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];

printf($EMAIL . $PASSWORD);

require('connection.php');

$query = "INSERT into users VALUES(null, '$EMAIL', '$PASSWORD')";
$result = mysqli_query($mysqli, $query);
mysqli_close($mysqli);

//TODO:redirect to login page
  header("location: /index.php?register=true");
?>
