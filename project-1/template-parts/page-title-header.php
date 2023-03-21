<div class="page-title-header">
	<!--  -->
	<!--  -->
	<hr>
	<?php
		if ( is_tax('categorii-servicii') ){
			?>
				<h2>
					<?php
						$term = get_queried_object();
						$parent_id = $term->parent;
						$parent_name = get_term_parent_list( $parent_id, 'categorii-servicii', '' );
						echo $parent_name . "<span class='text-lowercase'>". str_replace('-',' ',$term->name) . '</span>';
					?>
				</h2>
				<div class="breadcrumb">
					<?php echo the_breadcrumb(); ?>
				</div>
			<?php
		}else{
			?>
				<h2><?php echo the_title();?></h2>
				<div class="breadcrumb">
					<?php the_breadcrumb(); ?>
				</div>
			<?php
		}
	;?>
	<!--  -->
</div>