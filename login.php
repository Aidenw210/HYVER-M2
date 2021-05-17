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

			//read from database
			$query = "select * from users where username = '$username' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
	<title>HYVER &dash; Sign In</title>

</head>
<body>
	<!-- sign in -->
	<div class="sign section--full-bg" data-bg="">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form method="POST" action="login.php" class="sign__form">
													<a href="home\index.php" class="sign__logo">
								<h1><font color="white">HYV</font>ER</h1>
							</a>

							<div class="sign__group">
								<input required name="username" type="text" class="sign__input" placeholder="Username" value="">
							</div>

							<div class="sign__group">
								<input required name="password" type="password" class="sign__input" placeholder="Password" value="">
							</div>



							<button name="login" class="sign__btn" type="submit">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="register.php">Sign up!</a></span>
						</form>
						<!-- end authorization form -->
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
