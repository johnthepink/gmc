<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body id="home2" <?php body_class(); ?>>

		<header class="navbar navbar-inverse white" role="banner">
  		<div class="container">
    		<div class="navbar-header">
	      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	      	</button>
    			<a href="<?php echo home_url(); ?>" class="navbar-brand">
    				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
    			</a>
    		</div>

    		<!-- nav -->
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
  		</div>
		</header>

		<div id="hero">
			<a class="slide-nav prev" href="#">Prev</a>
			<a class="slide-nav next" href="#">Next</a>
			<nav>
				<a class="active" href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav>
			<div class="slides">
				<div class="slide first active">
					<div class="bg"></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-6 info">
								<h1 class="hero-text">
									Make it awesome.
								</h1>
								<p>
									React is the best way to get a great design out of the box with lots of options for customization.
								</p>
								<div class="cta">
									<a href="features.html" class="button-outline">
										TRY IT FREE
										<i class="fa fa-chevron-right"></i>
									</a>
								</div>
							</div>
							<div class="col-sm-6 hidden-xs mobiles">
								<!-- <img src="images/static-hero.png" class="animated fadeInLeft" alt="devices" /> -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/devices3.png" class="animated fadeInLeft img-responsive" alt="devices" />
							</div>
						</div>
					</div>
				</div>
				<div class="slide second">
					<div class="bg"></div>
					<div class="container">
						<h1 class="hero-text">Get the best technology videos online for free.</h1>
						<p class="sub-text">
							Using simple HTML markup, get a complete existing website with great design up and running in no time.
						</p>
						<div class="video-wrapper">
							<div class="video animated fadeInUp">
								<img src="<?php echo get_template_directory_uri(); ?>/img/player.png" id="demo-player" alt="videoplayer" />
							</div>
						</div>
					</div>
				</div>
				<div class="slide third">
					<div class="bg"></div>
					<div class="container">
						<h1 class="hero-text animated fadeInLeft">
							Track any data point in your app in real time.
						</h1>
						<p class="sub-text animated fadeInLeft">
							Try our 30 day trial so you can check out all the features that we offer, no contracts
							or credit card required.
						</p>
						<div class="cta animated fadeInRight">
							<a href="features.html" class="button-outline">See the tour</a>
							<a href="signup.html" class="button">Sign up free</a>
						</div>
					</div>
				</div>
			</div>

			<div class="video-modal">
				<div class="wrap">
					<iframe src="http://player.vimeo.com/video/22439234" width="620" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>
