<?php
/* Template Name: Page Servicii */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-servicii">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-servicii/page-servicii-categories-list');?>
	</main>

	<?php get_footer(null ,['hide' => true] ); ?>

</body>

</html>