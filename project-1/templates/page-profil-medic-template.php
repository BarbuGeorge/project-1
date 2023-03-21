<?php
/* Template Name: Page Profil Medic */
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include __DIR__ . ('/../_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-profil-medic">
	<?php get_template_part('template-parts/page-profil-medic/section-content'); ?>
	</main>

	<?php get_footer(null ,['hide' => true] ); ?>

</body>

</html>