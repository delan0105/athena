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
			      <!--<li class=""><a href="#">Dashboard</a></li>-->
				<li class="active"><a href="userprofile.php">User Profile</a></li>
			    </ul>
			  </div>
			</nav>
		</header>
		<div class="container video">
			<h1>User Profile</h1>
      <div class="margin-top-50">
        <div class="profile-field">
          <span class="profile-label">Email Address:</span>
          </span class="profile-desc"><?= $row['username'];?></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">First Name:</span>
        </span class="profile-desc"><?= $row['fname'];?></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Last Name:</span>
        </span class="profile-desc"><?= $row['lname'];?></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Address:</span>
        </span class="profile-desc"><?= $row['address'];?></span>
        </div>
        <div class="profile-field">
          <span class="profile-label">Mobile Number:</span>
        </span class="profile-desc"><?= $row['mobile'];?></span>
        </div>
        <div class="profile-field">
          <a href="updateprofile.php" class="btn btn-primary">Update</a>
        </div>
      </div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>
