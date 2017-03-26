<!DOCTYPE html>
<html>
<head>
	<title>Studyguide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="general.css">
	<link rel="stylesheet" media="screen and (min-width: 700px)" href="general_desktop.css">
	<link rel="stylesheet" type="text/css" href="index.css">


	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open Sans:300" rel="stylesheet">
	<script src="https://use.fontawesome.com/6d6b522626.js"></script>
	<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />-->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!--<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
	<script src="js/jquery.mobile.custom.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/fadeHeader.js"></script>
	<script src="js/listHandler.js"></script>
	<script src="js/navigationDrawer.js"></script>
	<script src="js/preferencesWizard.js"></script>
</head>
<body>
	<div class="card preferences-wizard width-limit js-carousel" id="preferences-wizard" align-property="top" align-value="-100%">
		<div class="wizard-top">
			<div class="wizard-close js-navigation-drawer-button" drawer-id="preferences-wizard">
				<i class="fa fa-times"></i>
			</div>
			<div class="wizard-progress js-carousel-menu">
				<div class="active">Language selection</div>
				<div>User selection</div>
				<div>Department selection</div>
			</div>
		</div>
		<div class="wizard-main js-carousel-slide hor-scroll">
			<div class="js-carousel-inner col-3-a-parent">
				<div class="wizard-option col-3">
					<h1>Language selection</h1>
					<p>Choose your desired language</p>
					<div class="option-cards" pref-type="lang">
						<div class="option-card js-option" pref-val="nl">
							<div class="option-icon">
								<img src="flags/dutch-flag.svg">
							</div>
							<div class="option-name">Dutch</div>
						</div>
						<div class="option-card js-option" pref-val="en">
							<div class="option-icon">
								<img src="flags/uk-flag.svg">
							</div>
							<div class="option-name">English</div>
						</div>
					</div>
				</div>
				<div class="wizard-option col-3">
					<h1>User selection</h1>
					<p>Choose one of the following</p>
					<div class="option-cards" pref-type="user">
						<div class="option-card js-option" pref-val="pre-student">
							<div class="option-icon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<div class="option-name">Pre-Student</div>
						</div>
						<div class="option-card js-option" pref-val="bachelor">
							<div class="option-icon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<div class="option-name">Bachelor</div>
						</div>
						<div class="option-card js-option" pref-val="master">
							<div class="option-icon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<div class="option-name">Master</div>
						</div>
					</div>
				</div>
				<div class="wizard-option col-3">
					<h1>Department selection</h1>
					<p>Choose your department</p>
					<ul class="option-list" pref-type="department">
						<li>Mathematics and Computer Science</li>
						<li>Industrial Engineering & Innovation Sciences</li>
						<li>Mechanical Engineering</li>
						<li>etc..</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="wizard-bottom">
			<div class="wizard-skip">Skip</div>
		</div>
	</div>
	<div class="navigation-drawer-bg"></div>
	<div class="navbar js-navbar">
		<div class="navbar-inner width-limit">
			<div class="product js-product">Studyguide</div>
			<div class="brand js-brand">TU<span class="accent">/</span>e</div>
			<div class="preferences">
				<div><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
        <div><i class="fa fa-flag-o" aria-hidden="true"></i></div>
        <div class="js-navigation-drawer-button" drawer-id="preferences-wizard"><i class="fa fa-user-o" aria-hidden="true"></i></div>
			</div>
		</div>
	</div>
	<div class="navbar-spacing"></div>

		<header class="top-header width-limit js-header">
			<div class="header-image js-header-image">
				<img src="https://virtualvisit.tue.nl/media/hotspot-data/science-park-1.jpg">
			</div>
			<div class="product js-product"><div>Studyguide</div></div>
		</header>

		<div class="card card-full visible width-limit">
			<nav class="study-selector js-carousel" clickable-menu="true">
				<div class="study-menu js-carousel-menu">
					<div class="study-menu-item active">Bachelor</div>
					<div class="study-menu-item">Pre-Master</div>
					<div class="study-menu-item">Master</div>
				</div>
				<div class="study-list js-expandable-list-body" closed-height="200px">
					<div class="js-carousel-slide hor-scroll">
						<div class="js-carousel-inner col-3-parent">
							<div class="study-list-item col-3">
								<h2>Bachelor</h2>
								<p>Some information about bachelor studies...</p>
								<!--Hier komt de lijst voor de bachelor studies-->
								<ul>
									<li><a href="#">Computer Science and Engineering</a></li>
									<li><a href="#">Psychology and Technology</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
								</ul>
							</div>
							<div class="study-list-item col-3">
								<h2>Pre-Master</h2>
								<p>Some information about pre-master studies...</p>
								<!--Hier komt de lijst voor de Pre-Master studies-->
								<ul>
									<li><a href="#">Computer Science and Engineering</a></li>
									<li><a href="#">Psychology and Technology</a></li>
									<li><a href="#">Data Science</a></li>
								</ul>
							</div>
							<div class="study-list-item col-3">
								<h2>Master</h2>
								<p>Some information about master studies...</p>
								<!--Hier komt de lijst voor de Master studies-->
								<ul>
									<li><a href="#">Computer Science and Engineering</a></li>
									<li><a href="#">Psychology and Technology</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
									<li><a href="#">Data Science</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="study-list-expand js-expandable-list-bar">
					<div class="js-expandable-list-button"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
				</div>
			</nav>
		</div>

		<div class="card card-blue card-full js-carousel" menu-animation="true">
			<div class="width-limit js-carousel-slide hor-scroll">
				<div class="js-carousel-inner col-3-parent">
					<div class="col-3">
						<header>
							<h1><i class="fa fa-book" aria-hidden="true"></i>De studyguide</h1>
						</header>
						<section>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor
								ut ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
							<a href="#">Lees meer</a>
						</section>
					</div>
					<div class="col-3">
						<header>
							<h1><i class="fa fa-user" aria-hidden="true"></i>Profielen</h1>
						</header>
						<section>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor
								ut ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
							<a href="#">Lees meer</a>
						</section>
					</div>
					<div class="col-3">
						<header>
							<h1><i class="fa fa-graduation-cap" aria-hidden="true"></i>TU/e</h1>
						</header>
						<section>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor
								ut ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
							<a href="#">Lees meer</a>
						</section>
					</div>
				</div>
			</div>
			<div class="card-blue carousel-menu js-carousel-menu">
				<div class="carousel-circle active"><div></div></div>
				<div class="carousel-circle"><div></div></div>
				<div class="carousel-circle"><div></div></div>
			</div>
		</div>

		<div class="card-cols width-limit">
		<main class="col-3-double">
			<div class="card">
				<header>
					<h1>Studyguide</h1>
				</header>
				<time>21-2-2017 | 18:00</time>
				<section>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor ut
						ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
				</section>
			</div>

			<div class="card">
				<header>
					<h1>TU/e news</h1>
				</header>
				<time>21-2-2017 | 18:00</time>
				<section>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur cursus sem sed faucibus malesuada. Nullam gravida interdum aliquet. Nam dignissim gravida leo, vitae bibendum erat bibendum in. Pellentesque eget mauris urna. Proin dictum tortor ut
						ex posuere, et laoreet urna eleifend. Vivamus aliquam tempus turpis sit amet lobortis. Quisque bibendum velit id dui scelerisque, quis lobortis mi sollicitudin.</p>
				</section>
			</div>
		</main>

		<aside class="card col-3">
			<div class="card card-gray">
				<header>
					<h1>Contact</h1>
				</header>
				<section>
					<p>contact info</p>
				</section>
			</div>
			<div class="card card-gray">
				<header>
					<h1>Contact</h1>
				</header>
				<section>
					<p>contact info</p>
				</section>
			</div>
			<div class="card card-gray">
				<header>
					<h1>Contact</h1>
				</header>
				<section>
					<p>contact info</p>
				</section>
			</div>
			<div class="card card-gray">
				<header>
					<h1>Contact</h1>
				</header>
				<section>
					<p>contact info</p>
				</section>
			</div>
		</aside>
		</div>

		<div class="card card-blue">
			<footer class="width-limit">
				<div class="col-4">
					<div class="bold">About</div>
					<p>
						This website is designed by students for students in order to structure the information in a better way.
					</p>
				</div>
				<div class="col-4 footer-social">
					<div class="bold">Social media</div>
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-twitter-square"></i></a>
					<a href="#"><i class="fa fa-youtube-square"></i></a>
				</div>
				<div class="col-4">
					<div class="bold">Address</div>
					<div>Straatnaam 12</div>
					<div>1234 AB</div>
					<div>Eindhoven</div>
				</div>
				<div class="col-4">
					<div class="bold">Contact</div>
					<div>emailaddress@tue.nl</div>
					<div>040 123456</div>
				</div>
				<div class="footer-bottom">
					<div>Copyright 2017</div>
					<div class="language">Language: <span>English</span></div>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>
