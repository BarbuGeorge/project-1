<?php
/* Template Name: Page Despre */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-despre">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-despre/content');?>
	</main>

	<?php get_footer(); ?>

</body>

</html>