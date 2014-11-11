<header class="navbar navbar-inverse white" role="banner">
	<div class="container">
		<div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    	</button>
			<a href="<?php echo home_url(); ?>" class="navbar-brand">
				GMC
				<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
			</a>
		</div>

		<!-- nav -->
		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<?php html5blank_nav(); ?>
		</nav>
		<!-- /nav -->
	</div>
</header>