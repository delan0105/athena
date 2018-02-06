<?
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];


require('connection.php');

$query = "SELECT * FROM users where username='$EMAIL' AND password='$PASSWORD'";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['emailaddress'] = $EMAIL;
    header("location: /athena/loginpage.php");
} else {
      header("location: /athena/index.php?login=false");
}
mysqli_close($mysqli);
?>
