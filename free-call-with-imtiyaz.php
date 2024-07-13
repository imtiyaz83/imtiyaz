<?php require_once "partials/header.php";

	$code = !empty($_GET['code']) ? $_GET['code'] : '';
	?>

	<!-- Navbar Section Start -->
	<?php require_once "partials/navigation.php"?>
	<!-- Nav Section End -->
	
	<!-- About Section Start -->
	<section id="about"   class="text-center py-5 text-light">
		<div class="inner-overlay">
			<div class="container">
				<div class="row">
					<div class="col mt-5 pt-4">
						<h1 class="text-light">We Deeply Care Your Calls...</h1 >
						<p class="lead">
							We understand your concerns and respect the value of your time. By booking a call, you are investing your time, and we deeply respect that. Any booking calls will be answered within 24 hours without fail. Please ensure that you are available at the scheduled time. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Info Section Start -->
	<section id="about-info" class="py-5 my-5">
		<div class="container">
			<?php require_once "discovery-call-form.php";?>
		</div>
	</section>
	<!-- About Info Section End -->

<?php require_once "partials/footer.php"?>