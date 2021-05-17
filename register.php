<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(!empty($username) && !empty($password) && !is_numeric($username))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,username,password) values ('$user_id','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/slider-radio.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/plyr.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/alerts.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="../icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="../icon/favicon-32x32.png">

	<meta name="description" content="HYVER completely ad-free movie streaming!">
	<meta name="keywords" content="HYVER,movie,movies,film,films,cinema,online movies,online films,watch movies online,watch films online,anonmovies,anonymous movies,anonfilms,anonymous films,movie streaming,film streaming,movie streaming online,film streaming online,watch free films,watch free movies,watch free films online,watch free movies online,movies online free,films online free,movies online free 2021, films online free 2021,free movies no ads,free films no ads,movies online no ads,films online no ads,ad free movies,ad free films">
	<title>HYVER &dash; Sign Up</title>

</head>
<body>
	<!-- sign in -->
	<div class="sign section--full-bg" data-bg="../img/anonbackground.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form method="POST" action="register.php" class="sign__form">
													<a href="index.php" class="sign__logo">
								<h1><font color="white">HYV</font>ER</h1>
							</a>

							<div class="sign__group">
								<input required name="username" type="text" class="sign__input" placeholder="username">
							</div>



							<div class="sign__group">
								<input required name="password" type="password" class="sign__input" placeholder="Password">
							</div>







							<button name="signup" class="sign__btn" type="submit">Sign up</button>

							<span class="sign__text">Already have an account? <a href="login.php">Sign in!</a></span>
							<span class="sign__text">Need a token? <a href="https://rocketr.net/buy/cd1b9e8fa7d3">Purchase here</a></span>						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

	<!-- JS -->
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/slider-radio.js"></script>
	<script src="../js/select2.min.js"></script>
	<script src="../js/smooth-scrollbar.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/plyr.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>
