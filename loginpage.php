<?
$EMAIL = $_POST['email'];
$PASSWORD = $_POST['password'];


require('backend/connection.php');

$query = "SELECT * FROM users where username='$EMAIL' AND password='$PASSWORD'";
$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0) {
} else {
      header("location: /index.php?login=false");
}
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Athena</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
					<h1>Welcome registered user!</h1>

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
	<script type="text/javascript">
		$('.js-tilt').tilt({
			scale: 1.1
		})

		// $(document).ready(function() {
		// 	var email = $.urlParam('email');
		// 	var password = $.urlParam('pass');
		// 	console.log(1, email, password);
		// 	if(email === 'testuser%40gmail.com' && password === 'password123') {
		// 		console.log(123123);
		// 	} else {
		// 		window.location = 'index.php';
		// 	}
		// });
		// $.urlParam = function(name){
		// 	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
		// 	return results[1] || 0;
		// }

	</script>
<!--===============================================================================================-->
	<script src="athena_js/main.js"></script>

</body>
</html>
