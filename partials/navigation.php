<?php
	$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") + 1);
    $activeClassHome = $activeClassAbout = $activeClassServices = $activeClassContact = $activeClassFreeBooks = '';
	if ($curPageName == 'index.php') {
        $activeClassHome = 'active';
    } else if ($curPageName == 'about.php') {
		$activeClassAbout = 'active';
    } else if ($curPageName == 'imtiyaz-services.php') {
		$activeClassServices = 'active';
    } else if ($curPageName == 'download-free-ebooks.php') {
		$activeClassFreeBooks = 'active';
    } else if ($curPageName == 'contact.php') {
		$activeClassContact = 'active';
    } else {
		$activeClassHome = 'active';
	}
?>
<nav class="navbar navbar-dark navbar-expand-lg"  uk-sticky="top:100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
		<div class="container" style="max-width:1315px;">
			<a href="index.php" class="navbar-brand">
				<!--<img src="img/imtiyaz-khan-logo.png" class="img-fluid p-0" style="width: 35%; filter: brightness(0) invert(1);">-->
				<div class="ml-2 p-0 d-inline webT">Imtiyaz Khan</div>
			</a>
			<button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navBar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navBar">
				<ul class="navbar-nav  ml-auto ">

					<li class="nav-item <?php echo $activeClassHome;?>">
						<a class="nav-link " href="index.php">Home</a>
					</li>
					<li class="nav-item <?php echo $activeClassAbout;?>">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item <?php echo $activeClassServices;?>">
						<a class="nav-link" href="imtiyaz-services.php">Services</a>
					</li>
					<li class="nav-item <?php echo $activeClassFreeBooks;?>">
						<a class="nav-link" href="download-free-ebooks.php">FREE eBooks</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://talks.imtiyaazkhan.com/" target="_blank">Blog</a>
					</li>
					<li class="nav-item <?php echo $activeClassContact;?>">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
			<div style="text-align:right; padding-left:100px;"><a href="free-call-with-imtiyaz.php" class="btn btn-primary btn-block">Book a FREE Discovery Call</a></div>
		</div>
	</nav>