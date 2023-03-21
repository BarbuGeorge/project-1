<?php
/* Template Name: Page Preturi */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-preturi bg-section-a">
		<?php get_template_part('template-parts/page-title-header');?>
		<?php get_template_part('template-parts/page-preturi/tabel-preturi');?>
	</main>

	<?php get_footer();?>

</body>

</html>