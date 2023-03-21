<!DOCTYPE html>
<html lang="en">

<head>
	<!--=== HEAD ===-->
	<?php wp_head(); ?>

	<!--=== META TAGS ===-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--=== LINK TAGS ===-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script src="<?php echo get_template_directory_uri() . '/assets/js/owl.carousel.min.js'; ?>" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/owl.carousel.min.css'; ?>" ></link>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/owl.theme.default.min.css'; ?>" ></link>
	<!--=== TITLE ===-->
	<title><?php echo get_the_title(); ?></title>

	<style>
		html{
			margin-top:0!important;
		}
	</style>

</head>