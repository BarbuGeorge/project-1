<?php
/* Template Name: Page Medici */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-medici">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-medici/section-prezentare-medici');?>
	</main>

	<?php get_footer(null ,['hide' => true] ); ?>

</body>

</html>