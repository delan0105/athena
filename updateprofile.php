<? require('backend/session.php');
  require('backend/connection.php');
  $email = $_SESSION['emailaddress'];
  $query = "SELECT *  FROM users WHERE username = '$email'";
  $result = mysqli_query($mysqli, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

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
    <link rel="stylesheet" type="text/css" href="athena/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/authenticated.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="#">Athena</a>
			    </div>
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Dashboard</a></li>
						<li class="active"><a href="userprofile.php">User Profile</a></li>
			    </ul>
			  </div>
			</nav>
		</header>
		<div class="container video">
			<h1>User Profile</h1>
      <form class="margin-top-50 form-inline" action="backend/updateprofile.php" method="post">
        <div class="profile-field">
          <span class="profile-label">Email Address:</span>
        </span class="profile-desc"><input type="email" name="email" class="form-control" value="<?= $row['username'];?>"></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">First Name:</span>
        </span class="profile-desc"><input type="text" name="fname" class="form-control" value="<?= $row['fname'];?>"></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Last Name:</span>
        </span class="profile-desc"><input type="text" name="lname" class="form-control" value="<?= $row['lname'];?>"></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Address:</span>
        </span class="profile-desc"><input type="text" name="address" class="form-control" value="<?= $row['address'];?>"></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Mobile Number:</span>
        </span class="profile-desc"><input type="number" name="mobile" class="form-control" value="<?= $row['mobile'];?>"></span>
        </div>
        <div class="profile-field">
          <input type="submit" value="submit" class="btn-primary">
        </div>
      </form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
