<?
require('session.php');
$email = $_SESSION['emailaddress'];
$username = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

require('connection.php');

$query = "UPDATE users
SET username='$username', fname='$fname', lname='$lname', mobile='$mobile', address='$address'
WHERE username='$email'";
$result = mysqli_query($mysqli, $query);
mysqli_close($mysqli);

header("location: /athena/userprofile.php");

?>
