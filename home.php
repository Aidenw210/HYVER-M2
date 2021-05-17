<<?php





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

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="images\website.icon.jpg" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="HYVER completely ad-free movie streaming!">
	<meta name="keywords" content="HYVER,movie,movies,film,films,cinema,online movies,online films,watch movies online,watch films online,anonmovies,anonymous movies,anonfilms,anonymous films,movie streaming,film streaming,movie streaming online,film streaming online,watch free films,watch free movies,watch free films online,watch free movies online,movies online free,films online free,movies online free 2021, films online free 2021,free movies no ads,free films no ads,movies online no ads,films online no ads,ad free movies,ad free films">
	<meta property="og:url" content="https://anonmovies.vip">
	<link rel="canonical" href="https://anonmovies.vip/">
	<meta name="author" content="Aiden">
	<title>HYVER &dash; ad-free movie streaming. </title>


	<style>
    .banner {
    vertical-align: middle;
    border-style: none;
    width: 100%;
    height: 60px;
    margin-top: 10px;
    }
    .search-box {
    height: 40px;
    border-radius: 16px;
    background-color: #151f30;
    font-size: 16px;
    border: none;
    color: #fff;
    border: 1px solid white;
    padding: 10px;
    width: 100%;
    }
	</style>

  <script>
    function disableClick(){
      document.onclick=function(event){
        if (event.button == 2) {
          alert('Right Click Message');
          return false;
        }
      }
    }
  </script>


	<script>
	function AddFavourite(id){
		$.post("api/favourite.php?type=add", {
            movieid: id
		}, function(data) {
			alert(data);
	  	});
	}

	function NoPerms(){
	    alert("You must be logged in as a premium user to request movies!");
	}
	</script>
</head>

<body>
	<!-- header (relative style) -->
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
								<a class="header__nav-link" href="home.php">Home</a>
							</li>







<li class="header__nav-item">
	<a class="header__nav-link" href="contact.php">Contact Us</a>
</li>








							<a href="login.php" class="header__user">
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

	<!-- home -->
	<div class="home home--static"></div>
	<!-- end home -->

	<!-- catalog -->
	<div class="catalog">
		<div class="container">
			<div class="row">
				<div class="col-12">




				    <br>

				    <div class="stats" style="margin-top:0px !important;margin-bottom:10px;">

					</div>

				    <br>

				    <div class="stats" style="margin-top:0px !important;margin-bottom:10px;">
    					<span>Welcome to HYV<font color="#007bff">ER</font></span>
    					<p>We provide the latest high-quality free movies. Unlike our competitors, we are completely AD free and have dedicated lightning-fast streaming servers.<br>
    					<br><br>
    					<br>
    					<code>

    					<br>

    					</code>
    					<br><br>
    					if you cant find a movie you want to watch you can request one through our <a href="request.a.movie" target="_blank">request a movie</a> page
    				    <br><br>

    					<br><br>
    					Freemode Status: <font color="red">DISABLED</font>    					</p>
    					<br>

    					<svg id="bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m21 18h-1.028c-.061-.249-.241-.457-.493-.537-1.922-.613-4.035-.613-5.957 0-.252.08-.432.288-.493.537h-2.057c-.061-.249-.241-.457-.493-.537-1.922-.613-4.035-.613-5.957 0-.253.08-.432.288-.493.537h-1.029c-.553 0-1 .448-1 1s.447 1 1 1h1v.201c0 1.233.91 2.272 2.164 2.473l1.833.292c.141.023.282.034.423.034.623 0 1.227-.219 1.703-.625.558-.476.877-1.161.877-1.881v-.494h2v.494c0 .72.319 1.405.877 1.881.477.406 1.08.625 1.703.625.141 0 .282-.011.423-.034l1.833-.292c1.254-.2 2.164-1.24 2.164-2.473v-.201h1c.553 0 1-.448 1-1s-.447-1-1-1z"/><path d="m17 7.367v-1.432c0-.953-.48-1.824-1.285-2.332-.806-.508-1.797-.565-2.655-.152l-.31.089c0-.849-.69-1.54-1.538-1.54h-1.462c-1.517 0-2.75 1.236-2.75 2.755v2.612c-4.128.633-7 2.019-7 3.633 0 2.209 5.373 4 12 4s12-1.791 12-4c0-1.614-2.872-3-7-3.633z"/></svg>


          </div>
    </div>
    </div>
    		    	<br>





	<!-- end catalog -->


	<!-- videos -->

	<!-- end videos -->

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1">
					<div class="footer__flixtv">
						<h2><font color="white">HYV</font><font color="#2f80ed">ER</font></h2>
					</div>


					<p class="footer__tagline">completely ad-free online movie streaming.</p>
					<div class="footer__social">
					    <a href="https://discord.gg/dDu678k3np" target="_blank"><svg width="256px" height="293px" viewBox="0 0 256 293" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"><g><path d="M226.011429,0 L29.9885714,0 C13.4582857,0 0,13.4582857 0,30.1348571 L0,227.913143 C0,244.589714 13.4582857,258.048 29.9885714,258.048 L195.876571,258.048 L188.123429,230.985143 L206.848,248.393143 L224.548571,264.777143 L256,292.571429 L256,30.1348571 C256,13.4582857 242.541714,0 226.011429,0 Z M169.545143,191.049143 C169.545143,191.049143 164.278857,184.758857 159.890286,179.2 C179.053714,173.787429 186.368,161.792 186.368,161.792 C180.370286,165.741714 174.665143,168.521143 169.545143,170.422857 C162.230857,173.494857 155.209143,175.542857 148.333714,176.713143 C134.290286,179.346286 121.417143,178.614857 110.445714,176.566857 C102.107429,174.957714 94.9394286,172.617143 88.9417143,170.276571 C85.5771429,168.96 81.92,167.350857 78.2628571,165.302857 C77.824,165.010286 77.3851429,164.864 76.9462857,164.571429 C76.6537143,164.425143 76.5074286,164.278857 76.3611429,164.132571 C73.728,162.669714 72.2651429,161.645714 72.2651429,161.645714 C72.2651429,161.645714 79.2868571,173.348571 97.8651429,178.907429 C93.4765714,184.466286 88.064,191.049143 88.064,191.049143 C55.7348571,190.025143 43.4468571,168.813714 43.4468571,168.813714 C43.4468571,121.709714 64.512,83.5291429 64.512,83.5291429 C85.5771429,67.7302857 105.618286,68.1691429 105.618286,68.1691429 L107.081143,69.9245714 C80.7497143,77.5314286 68.608,89.088 68.608,89.088 C68.608,89.088 71.8262857,87.3325714 77.2388571,84.8457143 C92.8914286,77.9702857 105.325714,76.0685714 110.445714,75.6297143 C111.323429,75.4834286 112.054857,75.3371429 112.932571,75.3371429 C121.856,74.1668571 131.949714,73.8742857 142.482286,75.0445714 C156.379429,76.6537143 171.300571,80.7497143 186.514286,89.088 C186.514286,89.088 174.957714,78.1165714 150.089143,70.5097143 L152.137143,68.1691429 C152.137143,68.1691429 172.178286,67.7302857 193.243429,83.5291429 C193.243429,83.5291429 214.308571,121.709714 214.308571,168.813714 C214.308571,168.813714 201.874286,190.025143 169.545143,191.049143 Z M101.522286,122.733714 C93.184,122.733714 86.6011429,130.048 86.6011429,138.971429 C86.6011429,147.894857 93.3302857,155.209143 101.522286,155.209143 C109.860571,155.209143 116.443429,147.894857 116.443429,138.971429 C116.589714,130.048 109.860571,122.733714 101.522286,122.733714 M154.916571,122.733714 C146.578286,122.733714 139.995429,130.048 139.995429,138.971429 C139.995429,147.894857 146.724571,155.209143 154.916571,155.209143 C163.254857,155.209143 169.837714,147.894857 169.837714,138.971429 C169.837714,130.048 163.254857,122.733714 154.916571,122.733714" fill="#7289DA"></path></g></svg></a>
						<a href="contact.php" target="_blank"><svg enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" fill="#039be5" r="12"/><path d="m5.491 11.74 11.57-4.461c.537-.194 1.006.131.832.943l.001-.001-1.97 9.281c-.146.658-.537.818-1.084.508l-3-2.211-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.121l-6.871 4.326-2.962-.924c-.643-.204-.657-.643.136-.953z" fill="#fff"/></svg></a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="footer__content">
						<div class="footer__links">
							<a href="privacy.php"></a>
							<a href="tos.php"></a>
						</div>
						<small class="footer__copyright">© HYVER, 2021</small>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="js/jquery/jquery.min.js"></script>
	<script src="js/jquery.easing/jquery.easing.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/slider-radio.js"></script>
	<script src="js/select2.min.js"></script>
	<script src="js/smooth-scrollbar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript"></script>
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
