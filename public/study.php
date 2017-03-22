<!DOCTYPE html>
<html>
<head>
	<title>Studyguide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<!-- <link rel="stylesheet" media="screen and (max-width: 10000000px)" href="general.css"> -->
	<link rel="stylesheet" type="text/css" href="general.css">
	<link rel="stylesheet" type="text/css" href="study.css">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open Sans:300" rel="stylesheet">
	<script src="https://use.fontawesome.com/6d6b522626.js"></script>

	<!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script> -->
</head>
<body><div>
	<div class="preferences-wizard">

	</div>

	<div class="nav-drawer nav-drawer-hidden">
		<h1>Menu</h1>
		<a href="#">Link</a>
		<a href="#">Link</a>
		<a href="#">Link</a>
		<a href="#">Link</a>
		<a href="#">Link</a>
	</div>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="nav-drawer-selector">
				<i class="fa fa-bars" aria-hidden="true"></i>
				<i class="fa fa-times nav-drawer-selector-hide" aria-hidden="true"></i>
			</div>
			<div class="product none">Studyguide</div>
			<div class="brand">TU/e</div>
			<div class="preferences">
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
                <i class="fa fa-flag-o" aria-hidden="true">
                <!-- <div class="flag"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEX///+uHCghRouqABAAOYWzO2ReAAABB0lEQVR4nO3QuRGAAAzAsPDsPzN9XFJAIU3g8xxs83XAD3lSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKe1FxsAwAAAAAAAAAAAAAAAAAAAMB7N9ucbJ6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Ul5Up6UJ+VJeVKelCflSXlSnpQn5Uk9Q6/I4nGDdNoAAAAASUVORK5CYII="></div> --></i>
                <i class="fa fa-user-o" aria-hidden="true"></i>
			</div>
		</div>
	</div>
	<div style="margin-top: 65px"></div>

	<div class="page">
		<div class="card card-full">
			<img src="https://www.tue.nl/fileadmin/_processed_/0/6/csm__WH33865_purple_gradient_a3138296f6.png">
		</div>
	</div>

	<div class="page card-holder">
		<div class="card">
			<div class="main-content">
				<h1>Psychology & Technology <span class="small">/ major</span></h1>
				<h2>Goal</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
				<p class="bold">Result</p>
				<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.
				</p>
			</div>
			<div class="card-group	">
				<div class="js-card-holder">
					<div class="card card-gray">
						<h1>Contact</h1>
						<div class="card-content none">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</div>
					</div>
				</div>
				<div class="js-card-holder">
					<div class="card card-gray">
						<h1>Zie ook</h1>
						<div class="card-content none">Hoi</div>
					</div>
				</div>
				<div class="js-card-holder">
					<div class="card card-gray">
						<h1>Gerelateerd</h1>
						<div class="card-content none">Hoi</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
<script type="text/javascript">
	$(".nav-drawer-selector").click(function() {
		$(this).children("i").each(function() {
			$(this).toggleClass("nav-drawer-selector-hide");
		})
		$(".nav-drawer").toggleClass("nav-drawer-hidden");
	});

	$(".card-gray").click(function() {
		cardClicked = $(this);
		$(".card-group").find(".card").each(function() {
			if ($(this)[0] == cardClicked[0]) {
				console.log("hoi");
				toggleCard($(this));
			}else if ($(this).hasClass("card-show")) {
				toggleCard($(this));
			}
		});
	});
	function toggleCard(card) {
		card.toggleClass("card-show");
		card.find("h1").toggleClass("header-show");
		if (card.find(".card-content").hasClass("none")) {
			setTimeout(function() {
				card.find(".card-content").toggleClass("none");
			}, 1000);
		} else {
			card.find(".card-content").toggleClass("none");
		}
	}
</script>
