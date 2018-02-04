<?php
$EMAIL = $_POST['email'];
$user='';

require('backend/connection.php');

$query = "SELECT * FROM users where username='$EMAIL'";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$user = $row["password"];
} else {
	//TODO: REDIRECT
    header("location: /forgot.php?user=false");
}
mysqli_close($mysqli);

//TODO:redirect to login page
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Athena</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				Your password is: <?= $user ?>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="athena/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="athena/bootstrap/js/popper.js"></script>
	<script src="athena/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="athena/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="athena/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="athena_js/main.js"></script>

</body>
</html>
