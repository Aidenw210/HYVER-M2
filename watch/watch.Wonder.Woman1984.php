<?php

if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:login.php');
    exit;
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/slider-radio.css">
	<link rel="stylesheet" href="../css/select2.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/plyr.css">
	<link rel="stylesheet" href="../css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

  <meta name="description" content="HYVER completely ad-free movie streaming!">
	<meta name="keywords" content=",movie,movies,film,films,cinema,online movies,online films,watch movies online,watch films online,anonmovies,anonymous movies,anonfilms,anonymous films,movie streaming,film streaming,movie streaming online,film streaming online,watch free films,watch free movies,watch free films online,watch free movies online,movies online free,films online free,movies online free 2021, films online free 2021,free movies no ads,free films no ads,movies online no ads,films online no ads,ad free movies,ad free films">
	<title>HYVER add free movie streaming</title>


	<style>
	video {
	/* override other styles to make responsive */
	width: 100%    !important;
	height: auto   !important;
	}
	</style>

	<script>
	function AddFavourite(id){
		alert("Added film ID #" + id + " to your favourites");
	}
	</script>
</head>

<body>
	<!-- header (hidden style) -->
  <header class="header header--static">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="header__content">
						<button class="header__menu" type="button">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<a href="" style="display:block;margin-left:35px;height:auto;">
							<h2 style="vertical-align:middle;margin-top:5px;"><font color="white">HYV</font>ER</h2>
						</a>

						<ul class="header__nav">
							<li class="header__nav-item">
								<a class="header__nav-link" href="index.php">Home</a>
							</li>




							<li class="header__nav-item">
	<a class="header__nav-link" href="request.php" onClick="NoPerms()" >Request Movie</a>
</li>


<li class="header__nav-item">
	<a class="header__nav-link" href="contact.php">Contact Us</a>
</li>








							<a href="login/login.php" class="header__user">
								<span>Sign in</span>
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/></svg>
							</a>
													</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->

	<!-- details -->
	<section class="section section--head section--head-fixed section--gradient section--details-bg">
		<div class="container">
			<!-- article -->
			<div class="article">
				<div class="row">
					<div class="col-12 col-xl-8">
											<!-- trailer -->

						<!-- end trailer -->

						<!-- article content -->
						<div class="article__content">
							<h1>Wonder Woman 1984</h1>

							<ul class="list">

								<li></li>
								<li>2020</li>
								<li>2h 31min</li>

							</ul>


						</div>
						<!-- end article content -->
					</div>

					<!-- video player -->
					<div class="col-12 col-xl-8">

						<br>
						<video controls preload="none" controlsList="nodownload" oncontextmenu="return false;">
						<source src="../videos/Wonder.Woman.1984.2020.mp4" type="video/mp4">
						</video>
												<div class="stats" style="margin-bottom:10px;">
    				    	<span>Movie won't load? Refresh the page.</span>
				        </div>
					</div>
					<!-- end video player -->

					<div class="col-12 col-xl-8">
						<!-- categories -->

						<!-- end categories -->
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-xl-8">
						<!-- comments and reviews -->

							<!-- end tabs nav -->

							<!-- tabs -->

								<!-- end comments -->

								<!-- reviews -->

								<!-- end reviews -->
							</div>
							<!-- end tabs -->
						</div>
						<!-- end comments and reviews -->
					</div>


				</div>
			</div>
			<!-- end article -->
		</div>
	</section>
	<!-- end details -->

	<!-- similar -->

	<!-- end similar -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1">
					<div class="footer__flixtv">
						<h2><font color="white">HYV</font><font color="#2f80ed">ER</font></h2>
					</div>
					<p class="footer__tagline">We are the #1 provider for completely ad-free online movie streaming.</p>
					<div class="footer__social">
					    <a href="https://discord.com/invite/zBuKMkApM3" target="_blank"><svg width="256px" height="293px" viewBox="0 0 256 293" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M226.011429,0 L29.9885714,0 C13.4582857,0 0,13.4582857 0,30.1348571 L0,227.913143 C0,244.589714 13.4582857,258.048 29.9885714,258.048 L195.876571,258.048 L188.123429,230.985143 L206.848,248.393143 L224.548571,264.777143 L256,292.571429 L256,30.1348571 C256,13.4582857 242.541714,0 226.011429,0 Z M169.545143,191.049143 C169.545143,191.049143 164.278857,184.758857 159.890286,179.2 C179.053714,173.787429 186.368,161.792 186.368,161.792 C180.370286,165.741714 174.665143,168.521143 169.545143,170.422857 C162.230857,173.494857 155.209143,175.542857 148.333714,176.713143 C134.290286,179.346286 121.417143,178.614857 110.445714,176.566857 C102.107429,174.957714 94.9394286,172.617143 88.9417143,170.276571 C85.5771429,168.96 81.92,167.350857 78.2628571,165.302857 C77.824,165.010286 77.3851429,164.864 76.9462857,164.571429 C76.6537143,164.425143 76.5074286,164.278857 76.3611429,164.132571 C73.728,162.669714 72.2651429,161.645714 72.2651429,161.645714 C72.2651429,161.645714 79.2868571,173.348571 97.8651429,178.907429 C93.4765714,184.466286 88.064,191.049143 88.064,191.049143 C55.7348571,190.025143 43.4468571,168.813714 43.4468571,168.813714 C43.4468571,121.709714 64.512,83.5291429 64.512,83.5291429 C85.5771429,67.7302857 105.618286,68.1691429 105.618286,68.1691429 L107.081143,69.9245714 C80.7497143,77.5314286 68.608,89.088 68.608,89.088 C68.608,89.088 71.8262857,87.3325714 77.2388571,84.8457143 C92.8914286,77.9702857 105.325714,76.0685714 110.445714,75.6297143 C111.323429,75.4834286 112.054857,75.3371429 112.932571,75.3371429 C121.856,74.1668571 131.949714,73.8742857 142.482286,75.0445714 C156.379429,76.6537143 171.300571,80.7497143 186.514286,89.088 C186.514286,89.088 174.957714,78.1165714 150.089143,70.5097143 L152.137143,68.1691429 C152.137143,68.1691429 172.178286,67.7302857 193.243429,83.5291429 C193.243429,83.5291429 214.308571,121.709714 214.308571,168.813714 C214.308571,168.813714 201.874286,190.025143 169.545143,191.049143 Z M101.522286,122.733714 C93.184,122.733714 86.6011429,130.048 86.6011429,138.971429 C86.6011429,147.894857 93.3302857,155.209143 101.522286,155.209143 C109.860571,155.209143 116.443429,147.894857 116.443429,138.971429 C116.589714,130.048 109.860571,122.733714 101.522286,122.733714 M154.916571,122.733714 C146.578286,122.733714 139.995429,130.048 139.995429,138.971429 C139.995429,147.894857 146.724571,155.209143 154.916571,155.209143 C163.254857,155.209143 169.837714,147.894857 169.837714,138.971429 C169.837714,130.048 163.254857,122.733714 154.916571,122.733714" fill="#7289DA"></path></g></svg></a>
						<a href="contact.php" target="_blank"><svg enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#039be5" r="12"/><path d="m5.491 11.74 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z" fill="#fff"/></svg></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="footer__content">

						<small class="footer__copyright">© HYVER, 2021</small>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->











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
  <!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/60899a4562662a09efc30909/1f4co58it';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>
</html>
