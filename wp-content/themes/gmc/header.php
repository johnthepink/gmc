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
	<body id="home" <?php body_class(); ?>>

		<?php require_once('includes/header.php'); ?>

		<?php if(is_front_page()): ?>
			<?php require_once('includes/hero-home.php'); ?>
		<?php elseif(is_page('campaign')): ?>
			<?php require_once('includes/hero-campaign.php'); ?>
		<?php elseif(is_page('outcomes')): ?>
			<?php require_once('includes/hero-outcomes.php'); ?>
		<?php elseif(is_page('who-we-are')): ?>
			<?php require_once('includes/hero-who-we-are.php'); ?>
		<?php endif; ?>
