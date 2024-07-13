<?php require_once "partials/header.php"?>

	<!-- Navbar Section Start -->
	<?php require_once "partials/navigation.php"?>
	<!-- Nav Section End -->

	<!-- Slider Section Start -->
	<?php require_once "partials/slider.php"?>
	<!-- Slider Section End -->

	<!-- Showcase Section Start -->
	<section id="showcase">
		<div class="container">
			<div class="row py-5 text-center">
				<div class="col-lg-4 col-md-4">
					<i class="fa-sharp fa-solid fa-hand-holding-heart" style="font-size: 35px;"></i>
					<h3>Empowering Fresh Graduates</h3>
					<p class="lead mt-2">Launching new professionals with essential skills and knowledge to excel in their careers and beyond.</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<i class="fa-solid fa-hand-holding-hand" style="font-size: 35px;"></i>
					<h3>Assisting Mid-career Professionals</h3>
					<p class="lead mt-2">Enhancing skill sets for accelerated career growth and success to thrive.</p>
				</div>
				<div class="col-lg-4 col-md-4">
					<i class="fas fa-cart-plus mb-3" style="font-size: 35px;"></i>
					<h3>Empowering Startups</h3>
					<p class="lead mt-2">Guiding and Training in Process Setup, Strategic Development, and Product Building, Upgrading, and Maintenance.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Showcase Section End -->

	<!-- Get Started Section Start -->
	<section id="get-started"   class="text-center py-5 text-light">
		<div class="inner-overlay">
			<div class="container">
				<div class="row">
					<div class="col mt-5 pt-4 gC">
						<h3 class="text-light">Are You Ready To Get Started?</h3>
						<p class="lead">
							Whether you're a fresh graduate, mid-career professional, or startup entrepreneur, we're here to empower you. Gain essential skills, accelerate your career growth, and build successful strategies for product development and maintenance. Let's embark on this journey together!
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Get Started Section End -->

	<!-- Info Section Start -->
	<section id="info" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 justify-content-center text-left infoS">
					<h3 >Lets simplify the college-to-corporate journey together!</h3>
					<p class="lead">
						To address the faults in our education system, our aim is to foster collaboration between colleges and universities by offering various training and mentoring programs. Our current system often emphasizes theoretical knowledge over practical skills, failing to adequately prepare students for the corporate world.

We assist colleges and universities with corporate training, mentoring, and coaching programs tailored to their specific needs on a quarterly and customized basis. Our C@C program benefits both institutions and individual students, providing lifelong guidance and enhancing job prospects.
					</p>
					<a href="college-to-corporate-program.php" class="btn btn-outline-dark">Read More</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
					<img src="img/info.jpg" class="img-fluid">
				</div>
			</div>
		</div>
	</section>
	<!-- Info Section End -->

	<!-- Video Section Start -->
	<section id="video" class="text-center text-light">
		<div class="video-overlay">
			<div class="container">
				<div class="row">
					<div class="col mt-5 pt-4">
						<div uk-lightbox>
							<a href="https://www.youtube.com/watch?v=pGGMY6WhoSM&t=308s" target="_blank">
								<i class="fas fa-play"></i>
							</a>
						</div>
						<h2 class=" mt-5 text-light">Who Am I? Want to Know More About Me...</h2>
						<p class="lead">Click Play Button To See</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Video Section End -->

	<!-- Gallery Section Start -->
	<?php require_once "partials/what-i-do.php"?>
	<!-- Gellery Section End -->

	<!-- Subscribe Section Start -->
	<section id="subscribe" class="text-center py-5 bg-dark text-light">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="text-light">Why You Should Signup for the Newsletter?</h2>
					<p class="lead">
						I am an author and writer. I write about career and life development, corporate topics, startups, and entrepreneurship. If you subscribe to this newsletter, you will receive updates whenever I post content related to these topics. You will definitely gain valuable insights and knowledge to keep you informed and updated.		
					</p>
					<?php if (!empty($_SESSION['sessErrorMsg'])) {?><p class="error-message"><?php echo $_SESSION['sessErrorMsg'];$_SESSION['sessErrorMsg']='';?></p><?php }?>
					<?php if (!empty($_SESSION['sessSuccessMsg'])) {?><p class="success-message"><?php echo $_SESSION['sessSuccessMsg'];$_SESSION['sessSuccessMsg']='';?></p><?php }?>
					<form class="form-inline justify-content-center" method="post" action="subscribe.php">
						<input type="text" name="name" placeholder="Enter name" class="form-control m-2" required>
						<input type="email" name="email" placeholder="Enter email" class="form-control m-2" required>
						<input type="submit" value="Subscribe" class=" btn btn-primary m-2">
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Subcribe Section End -->

    <?php require_once "partials/footer.php"?>