<!DOCTYPE html>
<html lang="en">
<head>
	<title>Athena</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="athenad/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="athenad/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="athenad/css-athena/athena.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="athenad/select2/select2.min.css">
<!--===============================================================================================-->
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

				<form class="login100-form validate-form" action="checkUser.php" method="post">
					<? if(isset($_REQUEST["user"])) { ?>
						<div class="login--error">
							User does not exist.
						</div>
					<? } ?>
					<span class="login100-form-title">
						Forgot password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Email is required: ex@athena.com">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Forgot Password
						</button>
					</div>
				</form>
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
