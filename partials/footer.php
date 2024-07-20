<?php require_once "lib/config.php";?>
	<!-- Footer Section Start -->
	<footer id="footer" class="py-3 text-center text-light">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="display-5 mb-0 text-light">Imtiyaz Khan</h2>
					<div class="d-flex flex-row flex-wrap justify-content-center p-md-3 p-1">
						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="http://talks.imtiyaazkhan.com" target="_blank" class="icon-link" title="Lets Talk">
								<span class="custom-icon"></span>
							</a>
						</div>

						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://www.linkedin.com/in/imtiyaazkhan" target="_blank" title="Linkedin">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>

						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://www.facebook.com/imtiyaz83" target="_blank" title="Facebook">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
						
						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://www.youtube.com/@imtiyaz-khan" target="_blank" title="YouTube">
								<i class="fab fa-youtube"></i>
							</a>
						</div>

						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://www.instagram.com/imtiyazkhan10x" target="_blank" title="Instagram">
								<i class="fab fa-instagram"></i>
							</a>
						</div>

						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://x.com/imtiyaazkhan" target="_blank" title="Twitter or X">
								<i class="fab fa-twitter"></i>
							</a>
						</div>

						<div class="px-md-2 px-2 my-2 my-md-0">
							<a href="https://medium.com/@imtiyaazkhan" target="_blank" title="Medium">
								<i class="fab fa-medium"></i>
							</a>
						</div>	
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					imtiyaazkhan.com © 2024 All Rights Reserved
				</div>
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="<?php echo DOCUMENT_ROOT;?>js/jquery-slim.min.js"></script>
	<script type="text/javascript" src="<?php echo DOCUMENT_ROOT;?>js/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo DOCUMENT_ROOT;?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo DOCUMENT_ROOT;?>js/uikit.min.js"></script>
	<script type="text/javascript" src="<?php echo DOCUMENT_ROOT;?>js/uikit-icons.min.js"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		// Get all elements with class '.clickable-card'
		const clickableCards = document.querySelectorAll('.clickable-card');
		// Loop through each clickable card
		clickableCards.forEach(function(card) {
			// Add click event listener to each card
			card.addEventListener('click', function() {
				// Define URLs or paths for each card (replace with your actual URLs)
				let url;
				if (card.classList.contains('web-dev')) {
					url = 'web-development-mastery-program.php?code=WDMP-001';
				} else if (card.classList.contains('bg-danger')) {
					url = 'system-design-mastery-program.php?code=SDMP-002'; // Replace with actual URL for Startups Success Program
				} else if (card.classList.contains('bg-primary')) {
					url = 'devops-mastery-program.php?code=DMP-003'; // Replace with actual URL for Startups Success Program
				} else if (card.classList.contains('bg-info')) {
					url = 'college-to-corporate-program.php?code=C@C-004'; // Replace with actual URL for Startups Success Program
				} else if (card.classList.contains('bg-success')) {
					url = 'startups-success-program.php?code=SSP-005'; // Replace with actual URL for Startups Success Program
				} else {
					url = 'entrepreneurship-program.php?code=EP-006'; // Replace with actual URL for Entrepreneurship Program
				}
				// Redirect to the defined URL
				window.location.href = url;
			});
		});

		const clickableCards2 = document.querySelectorAll('.clickable-card2');

		clickableCards2.forEach(function(card2) {
			card2.addEventListener('click', function() {
				let url;
				if (card2.classList.contains('system-design')) {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>System-Design-Tools-and-Technologies-for-Software-Development.pdf';
				} else if (card2.classList.contains('fundamentals')) {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>Fundamentals-and-Essential-Principles-for-Software-Product-Development.pdf';
				} else if (card2.classList.contains('modern-techniques')) {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>FREE-Guide-Modern-Techniques-to-Get-Hired-Imtiyaz.pdf';
				} else if (card2.classList.contains('c@c-program')) {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>Free-College-to-Corporate-Blueprint-Imtiyaz.pdf';
				} else if (card2.classList.contains('10-factors')) {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>FREE eBook - 10 Factors to Build an Unstoppable Mindset and Unbreakable Personality-Imtiyaz.pdf';
				} else {
					url = '<?php echo EBOOK_DOWNLOAD_PATH;?>Building-Digital-Warriors-A-Journey-with-the-20-Days-Summer-Web-Warriors-Program-Imtiyaz-Khan.pdf';
				}
				window.location.href = url;
			});
		});
});

</script>

</body>
</html>