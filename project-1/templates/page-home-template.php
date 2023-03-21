<?php
/* Template Name: Page Home */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-home">
		<?php get_template_part('template-parts/page-home/hero'); ?>
		<?php get_template_part('template-parts/page-home/section-servicii'); ?>
		<?php get_template_part('template-parts/page-home/section-medici'); ?>
	</main>

	<?php
	get_footer();
	// get_footer(null,['hide'=>true]); // hide the callto actiuon
	?>

</body>

</html>