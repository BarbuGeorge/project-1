<?php
/* Template Name: Page Before&After */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-before-after">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-before-after/before-after-cards-list');?>
	</main>

	<?php get_footer();?>

</body>

</html>