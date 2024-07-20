<!-- Navbar Section Start -->
	<?php require_once "partials/header.php"?>

	<!-- Navbar Section Start -->
	<?php require_once "partials/navigation.php"?>
	<!-- Nav Section End -->

	<!-- Contact Section Start -->
	<section id="contact" class="text-center py-5 text-light">
		<div class="inner-overlay">
			<div class="container">
				<div class="row">
					<div class="col pt-lg-4 pt-2">
						<h1 class="text-light">Contact us</h1 >
						<p class="lead">
							We are here to help you with career development, startup success, simplifying the college-to-corporate journey, building an unstoppable mindset and unbreakable personality, or any technical programs like web development, system design, DevOps, career switching, growth, and career counseling.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact Section End -->

	<!-- Contact Main Section Start -->
	<section class="py-5" id="contact-main">
		<div class="container">
			<div class="row"> 
				 <div class="col-lg-8">
				 	<div class="card">
				 		<div class="card-body">
						 <?php if (!empty($_SESSION['sessErrorMsg'])) {?><p class="error-message"><?php echo $_SESSION['sessErrorMsg'];$_SESSION['sessErrorMsg']='';?></p><?php }?>
						 <?php if (!empty($_SESSION['sessSuccessMsg'])) {?><p class="success-message"><?php echo $_SESSION['sessSuccessMsg'];$_SESSION['sessSuccessMsg']='';?></p><?php }?>
					
				 			<form class="form-group" method="post" action="connect.php">
				 				<h3 class="text-center">Please fill out this form to contact us</h3>
				 				<div class="form-inline">
				 					<input type="text" name="first_name" placeholder="First Name" class="form-control form-control-lg p-2 m-2" required>
				 					<input type="text" name="last_name" placeholder="Last Name" class="form-control form-control-lg p-2 m-2" required>
				 				</div>
				 				<div class="form-inline">
				 					<input type="email" name="email" placeholder="Email" class="form-control form-control-lg p-2 m-2" required>
				 					<input type="text" name="mobile" placeholder="Phone" class="form-control form-control-lg p-2 m-2" required>
				 				</div>
				 				<div>
				 					<textarea rows="3" name="query" placeholder="Message" class="form-control form-control-lg p-2 m-2" required>
				 					</textarea>
				 					<input type="submit" value="Submit" class="btn btn-dark btn-block ">
				 				</div>
				 			</form>
				 		</div>
				 	</div>
				 </div>
				 <div class="col-lg-4">
				 	<div class="card">
				 		<div class="card-body">
				 			<h3 class="card-title m-0">Get In Touch</h3>
				 			<p class="m-0 mb-2">
				 			 	You can write us on the following given email, phone or connect us on social media. Your queries will be answered within 24 hours.
				 			 </p>
							 <br />
				 			 <h3 class="card-title m-0">Email</h3>
				 			 <p class="m-0 mb-2">
				 			 	support@imtiyaazkhan.com
				 			 </p>
				 			 <h3 class="card-title m-0">Phone</h3>
				 			 <p class="m-0 mb-2">
				 			 	+91 920 580 1748
				 			 </p>
							 <p>&nbsp;</p>                                  
				 		</div>
				 	</div>
				 </div>				 
			</div>
		</div>
	</section>
	<!-- Contact Main Section End -->
     
    <?php require_once "partials/footer.php"?>

	