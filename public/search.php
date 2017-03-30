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
	<div class="card preferences-wizard width-limit" id="preferences-wizard" align-property="top" align-value="-100%">
		<div class="wizard-top">
			<div class="wizard-close js-navigation-drawer-button" drawer-id="preferences-wizard">
				<i class="fa fa-times"></i>
			</div>
		</div>
		<div class="wizard-main">
			<div class="wizard-option">
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
		</div>
		<div class="wizard-save">
			<div>Save</div>
		</div>
	</div>
	<div class="navigation-drawer-bg"></div>
	<div class="navbar js-navbar">
		<div class="navbar-inner width-limit">
			<div class="product js-product">Studyguide</div>
			<div class="brand js-brand">TU<span class="accent">/</span>e</div>
			<div class="preferences">
        <div class="js-navigation-drawer-button" drawer-id="preferences-wizard"><i class="fa fa-flag-o" aria-hidden="true"></i></div>
			</div>
		</div>
	</div>
	<div class="navbar-spacing"></div>

	<div class="study-drawer width-limit" id="bachelor-drawer" align-property="top" align-value="-100%">
			<h1>Bachelor studies</h1>
			<div class="study-drawer-close js-navigation-drawer-button" drawer-id="bachelor-drawer">
				<i class="fa fa-times"></i>
			</div>
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

	<div class="study-drawer width-limit" id="pre-master-drawer" align-property="top" align-value="-100%">
		<h1>Pre-Master studies</h1>
		<div class="study-drawer-close js-navigation-drawer-button" drawer-id="pre-master-drawer">
      <i class="fa fa-times"></i>
    </div>
		<ul>
			<li><a href="#">Computer Science and Engineering</a></li>
			<li><a href="#">Psychology and Technology</a></li>
		</ul>
	</div>

	<div class="study-drawer width-limit" id="master-drawer" align-property="top" align-value="-100%">
		<h1>Master studies</h1>
		<div class="study-drawer-close js-navigation-drawer-button" drawer-id="master-drawer">
      <i class="fa fa-times"></i>
    </div>
		<ul>
			<li><a href="#">Computer Science and Engineering</a></li>
			<li><a href="#">Psychology and Technology</a></li>
		</ul>
	</div>

	<div class="subnavbar">
		<div class="width-limit">
			<span class="js-navigation-drawer-button" drawer-id="bachelor-drawer">Bachelors</span>
			<span class="js-navigation-drawer-button" drawer-id="pre-master-drawer">Pre-masters</span>
			<span class="js-navigation-drawer-button" drawer-id="master-drawer">Masters</span>
		</div>
	</div>

	<header class="top-header width-limit js-header">
		<div class="header-image js-header-image">
			<img src="https://virtualvisit.tue.nl/media/hotspot-data/science-park-1.jpg">
		</div>
		<div class="product js-product"><div>Studyguide</div></div>
	</header>

	<div class="card-cols width-limit">
		<div class="card breadcrumb">
			<a href="#">Home</a><span>/</span>
			<a href="#">Search</a>
		</div>
		<div class="search-bar">
			<form>
				<input type="text" name="search" placeholder="search...">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
		<div class="clear"></div>
		<main class="col-3-double">
			<div class="card search-card">

				<header>
		      <h1>TU/e - Studyguide</h1>
		    </header>
				<p class="search-result">Search results for <span>INPUT</span></p>
		    <ul class="search-list">
		      <li>
						<a href="#">
							<h1>Software Science</h1>
							<p>studyguide.tue.nl/bachelor/software-science</p>
						</a>
						<div class="search-tags">
							<a href="search?q=software">Software</a>
							<a href="search?q=programming">Programming</a>
						</div>
					</li>
					<li>
						<a href="#">
							<h1>Web Science</h1>
							<p>studyguide.tue.nl/bachelor/web-science</p>
						</a>
						<div class="search-tags">
							<a href="#">Web</a>
							<a href="#">Programming</a>
						</div>
					</li>
					<li>
						<a href="#">
							<h1>Data Science</h1>
							<p>studyguide.tue.nl/bachelor/data-science</p>
						</a>
						<div class="search-tags">
							<a href="#">Software</a>
							<a href="#">Databases</a>
						</div>
					</li>
		    </ul>
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
				<div class="language navigation-drawer-button js-navigation-drawer-button" drawer-id="preferences-wizard">Language: <span>English</span></div>
			</div>
		</footer>
	</div>
</body>
</html>
