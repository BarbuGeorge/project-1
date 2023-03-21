<?php
/* Template Name: Page Articole */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-articole">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-articole/articole-cards-list');?>
	</main>

	<?php get_footer();?>

</body>

</html>