<?php
/* Template Name: Page Contact */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-contact">
		<?php get_template_part('template-parts/page-contact/section-form');?>
		<?php get_template_part('template-parts/page-contact/section-contact-info');?>
	</main>

	<?php get_footer(); ?>

</body>

</html>