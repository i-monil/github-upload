<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span>Techgeeks</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="Aboutus.php">about us</a></li>
						<li class="main_nav_item"><a href="different-events.php">different events</a></li>
						<?php
						if(isset($_SESSION["username"]) && isset($_SESSION["pass"])){

								echo'<li class="main_nav_item"><a href="logout.php"> Logout</a></li>';	
						}
						else
						{
							
							echo'<li class="main_nav_item"><a href="login.php">Login/Sign Upv</a></li>';
						}
						?>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+919757038405</span>
		</div>
		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="Aboutus.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="different-events.php">Different Events</a></li>
					<?php
						if(isset($_SESSION["username"]) && isset($_SESSION["pass"])){

								echo'<li class="main_nav_item"><a href="logout.php"> Logout</a></li>';	
						}
						else
						{
							
							echo'<li class="main_nav_item"><a href="login.php">Login/Sign Upv</a></li>';
						}
					?>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Techgeeks All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>About Us</h1>
		</div>
	</div>
	<div class="container">
	<br>
    <p style="font-size: 20px" style="color: #000000;"><b>The purpose of this website is to make the youth aware about the schemes and programmes happening in their respective villages. Also,the benefit of this will be that the young people will get to learn new things and also be able to lend a helping hand in this type of programmes.</b>
    <div>
    <h1>Vision</h1></a>
    </div>
    To work with and around highly motivated individuals who are ready to help the society by helping in whichever way possible and educating people by engaging them in various programmes and schemes.
    <br>
    <br>
    <div>
    <h1>Mission</h1>
    </div>
    To enable people to take responsibility for the situation of the deprived Indian youth and so motivate them to seek resolution through individual and collective action thereby enabling people to realise their full potential.<br><br>

    To make people discover their potential for action and change.<br><br>

    To enable peoples’ collectives and movements encompassing diverse segments, to pledge their particular strengths, working in partnership to secure, protect and honour the rights of India’s youth.
  </div>  
</div>
</p>
</div>
</div>
<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<span>Motto</span>
							</div>
						</div>

						<p class="footer_about_text">The main aim of this website is to increase student registration as volunteers. This will in turn result in higher participation among all forms of age groups of students.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.php">Home</a></li>
								<li class="footer_list_item"><a href="Aboutus.php">About Us</a></li>
								<li class="footer_list_item"><a href="different-events.php">Different Events</a></li>
								<?php
								if(isset($_SESSION["username"]) && isset($_SESSION["pass"])){

										echo'<li class="main_nav_item"><a href="logout.php"> Logout</a></li>';	
								}
								else
								{
									
									echo'<li class="main_nav_item"><a href="login.php">Login/Sign Upv</a></li>';
								}
								?>
								<li class="footer_list_item"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Usefull Links -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Usefull Links</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="#">Testimonials</a></li>
								<li class="footer_list_item"><a href="#">FAQ</a></li>
								<li class="footer_list_item"><a href="#">Media</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column - Contact -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Annexe 1, Top Floor, Kazi Road, Gangtok , Sikkim-737101
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									 03592 - 202601 / 207426
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>abc@example.com
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>