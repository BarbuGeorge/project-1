<?php

// Enque styles
function enqueue_styles()
{
	wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/fontawesome-free-6.1.2-web/css/all.min.css', array());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

// Enque scripts
function enqueue_scripts()
{
	// Jquery Script
	wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js');

	// Bootstrap Script
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap-5.2.3/dist/js/bootstrap.min.js', array());

	// Toggle class active languages
	wp_enqueue_script('toggleclass', get_template_directory_uri() . '/assets/js/toggle-class-active-languages.js', array());

	wp_enqueue_script('textarearesize', get_template_directory_uri() . '/assets/js/textarea-auto-resize.js', array());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// Menus
function wpb_custom_new_menu()
{
	register_nav_menu('my-custom-menu', __('My Custom Menu'));
}
add_action('init', 'wpb_custom_new_menu');

register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'top-menu-mobile' => 'Top Menu Mobile',
		'footer-menu' => 'Footer Menu Location',
	)
);
add_theme_support('menus');
add_theme_support(
	'custom-logo',
	array(
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	)
);

// Add Thumbnails
add_theme_support('post-thumbnails');

// Toggle class active for menu items


add_action('wp_head', 'toggle_class');

function toggle_class()
{  ?>

	<script>
		jQuery(document).ready(function($) {
			$('.menu-item-has-children').click(function() {
				$(this).toggleClass('active-menu-item');
				$(this).find(".sub-menu").toggleClass('active-sub-menu');
			});
		});
	</script>

<?php }

// Color label when input is completed
add_action('wp_head', 'label_color');

function label_color()
{  ?>

	<script>
		jQuery(document).ready(function($) {
			const input = document.querySelectorAll('.form-control');

			input.forEach(function(el) {
				el.addEventListener('input', function(e) {
					if (e.target.value == "") {
						e.target.parentNode.classList.remove('input-completed')
					} else {
						e.target.parentNode.classList.add('input-completed')
					}

				});
			});
		});
	</script>

<?php }

// CPT Studii de caz
function before_and_after()
{
	$labels = array(
		'name'                => __('Before&After', 'Post Type General Name', 'Cosmpolitan'),
		'singular_name'       => __('Before&After', 'Post Type Singular Name', 'Cosmpolitan'),
		'menu_name'           => __('Before&After', 'Cosmpolitan'),
		'parent_item_colon'   => __('Parent Before&After', 'Cosmpolitan'),
		'all_items'           => __('Toate Before&After', 'Cosmpolitan'),
		'view_item'           => __('Vezi Before&After', 'Cosmpolitan'),
		'add_new_item'        => __('Adauga Before&After', 'Cosmpolitan'),
		'add_new'             => __('Adauga', 'Cosmpolitan'),
		'edit_item'           => __('Editeaza Before&After', 'Cosmpolitan'),
		'update_item'         => __('Actualizeaza Before&After', 'Cosmpolitan'),
		'search_items'        => __('Search Before&After', 'Cosmpolitan'),
		'not_found'           => __('Not Found', 'Cosmpolitan'),
		'not_found_in_trash'  => __('Not found in Trash', 'Cosmpolitan'),
	);

	$args = array(
		'label'               => __('Before&After', 'Cosmpolitan'),
		'description'         => __('Before&After', 'Cosmpolitan'),
		'labels'              => $labels,

		'supports'            => array('title', 'editor', 'author', 'revisions', 'tags', 'thumbnail'),

		'taxonomies'          => array('before-after-category'),
		'hierarchical'        => false,
		'public'              => true,
		'menu_icon'         => 'dashicons-archive',
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'before-after',
		'capability_type'     => 'post',
		'show_in_rest' => true,
	);
	register_post_type('before-after', $args);
}
add_action('init', 'before_and_after', 0);

// CPT Servicii
function custom_post_type_serviciu()
{
	$labels = array(
		'name'                => __('Serviciu', 'Post Type General Name', 'Cosmpolitan'),
		'singular_name'       => __('Serviciu', 'Post Type Singular Name', 'Cosmpolitan'),
		'menu_name'           => __('Servicii', 'Cosmpolitan'),
		'parent_item_colon'   => __('Parent Serviciu', 'Cosmpolitan'),
		'all_items'           => __('Toate Serviciile', 'Cosmpolitan'),
		'view_item'           => __('Vezi Serviciu', 'Cosmpolitan'),
		'add_new_item'        => __('Adauga un serviciu nou', 'Cosmpolitan'),
		'add_new'             => __('Adauga ', 'Cosmpolitan'),
		'edit_item'           => __('Editeaza Serviciu', 'Cosmpolitan'),
		'update_item'         => __('Update Serviciu', 'Cosmpolitan'),
		'search_items'        => __('Cauta Serviciu', 'Cosmpolitan'),
		'not_found'           => __('Not Found', 'Cosmpolitan'),
		'not_found_in_trash'  => __('Not found in Trash', 'Cosmpolitan'),
	);

	$args = array(
		'label'               => __('Servicii', 'Cosmpolitan'),
		'description'         => __('Servicii', 'Cosmpolitan'),
		'labels'              => $labels,

		'supports'            => array('title', 'editor', 'author', 'revisions', 'tags', 'thumbnail'),

		'taxonomies'          => array('serviciu','categorii-servicii'),

		'has_archive' 		  => true,
		'hierarchical'        => true,
		'public'              => true,
		'menu_icon'        	  => 'dashicons-heart',
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest ' => 		true,
		'menu_position'       => 5,
		'can_export'          => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		'description'  =>  false

	);

	// Registering your Custom Post Type
	register_post_type('serviciu', $args);
}
add_action('init', 'custom_post_type_serviciu', 0);

//Register taxonomy for servicii
function servicii_taxonomy() {

    register_taxonomy(
        'categorii-servicii',
        'serviciu',
        array(
            'label' => __( 'Categorii' ),
            'rewrite' => array( 'slug' => 'categorii-servicii' ),
			'has_archive'   => 		true,
            'hierarchical'  => 		true,
			'show_in_rest'  => 		true ,
			'show_ui'       => 		true,
			'show_tagcloud' => 		false,
			'show_admin_column' => 	true,
			'public'            => 	true,
			'query_var' 	=> true,
			'update_count_callback' => '_update_post_term_count',
        )
    );

}
add_action( 'init', 'servicii_taxonomy' );


// Include the possibility to user to add image to category
if( ! class_exists( 'Showcase_Taxonomy_Images' ) ) {
	class Showcase_Taxonomy_Images {

	  public function __construct() {
	   //
	  }

	   public function init() {
	   // Image actions
	   add_action( 'categorii-servicii_add_form_fields', array( $this, 'add_category_image' ), 10, 2 );
	   add_action( 'created_categorii-servicii', array( $this, 'save_category_image' ), 10, 2 );
	   add_action( 'categorii-servicii_edit_form_fields', array( $this, 'update_category_image' ), 10, 2 );
	   add_action( 'edited_categorii-servicii', array( $this, 'updated_category_image' ), 10, 2 );
	   add_action( 'admin_enqueue_scripts', array( $this, 'load_media' ) );
	   add_action( 'admin_footer', array( $this, 'add_script' ) );
	 }

	 public function load_media() {
	   if( ! isset( $_GET['taxonomy'] ) || $_GET['taxonomy'] != 'categorii-servicii' ) {
		 return;
	   }
	   wp_enqueue_media();
	 }

	 public function add_category_image( $taxonomy ) { ?>
	   <div class="form-field term-group">
		 <label for="showcase-taxonomy-image-id"><?php _e( 'Image', 'showcase' ); ?></label>
		 <input type="hidden" id="showcase-taxonomy-image-id" name="showcase-taxonomy-image-id" class="custom_media_url" value="">
		 <div id="category-image-wrapper"></div>
		 <p>
		   <input type="button" class="button button-secondary showcase_tax_media_button" id="showcase_tax_media_button" name="showcase_tax_media_button" value="<?php _e( 'Add Image', 'showcase' ); ?>" />
		   <input type="button" class="button button-secondary showcase_tax_media_remove" id="showcase_tax_media_remove" name="showcase_tax_media_remove" value="<?php _e( 'Remove Image', 'showcase' ); ?>" />
		 </p>
	   </div>
	 <?php }

	 public function save_category_image( $term_id, $tt_id ) {
	   if( isset( $_POST['showcase-taxonomy-image-id'] ) && '' !== $_POST['showcase-taxonomy-image-id'] ){
		 add_term_meta( $term_id, 'showcase-taxonomy-image-id', absint( $_POST['showcase-taxonomy-image-id'] ), true );
	   }
	  }

	  public function update_category_image( $term, $taxonomy ) { ?>
		<tr class="form-field term-group-wrap">
		  <th scope="row">
			<label for="showcase-taxonomy-image-id"><?php _e( 'Image', 'showcase' ); ?></label>
		  </th>
		  <td>
			<?php $image_id = get_term_meta( $term->term_id, 'showcase-taxonomy-image-id', true ); ?>
			<input type="hidden" id="showcase-taxonomy-image-id" name="showcase-taxonomy-image-id" value="<?php echo esc_attr( $image_id ); ?>">
			<div id="category-image-wrapper">
			  <?php if( $image_id ) { ?>
				<?php echo wp_get_attachment_image( $image_id, 'thumbnail' ); ?>
			  <?php } ?>
			</div>
			<p>
			  <input type="button" class="button button-secondary showcase_tax_media_button" id="showcase_tax_media_button" name="showcase_tax_media_button" value="<?php _e( 'Adauga imagine', 'showcase' ); ?>" />
			  <input type="button" class="button button-secondary showcase_tax_media_remove" id="showcase_tax_media_remove" name="showcase_tax_media_remove" value="<?php _e( 'Sterge imagine', 'showcase' ); ?>" />
			</p>
		  </td>
		</tr>
	 <?php }

	 public function updated_category_image( $term_id, $tt_id ) {
	   if( isset( $_POST['showcase-taxonomy-image-id'] ) && '' !== $_POST['showcase-taxonomy-image-id'] ){
		 update_term_meta( $term_id, 'showcase-taxonomy-image-id', absint( $_POST['showcase-taxonomy-image-id'] ) );
	   } else {
		 update_term_meta( $term_id, 'showcase-taxonomy-image-id', '' );
	   }
	 }

	 public function add_script() {
	   if( ! isset( $_GET['taxonomy'] ) || $_GET['taxonomy'] != 'categorii-servicii' ) {
		 return;
	   } ?>
	   <script> jQuery(document).ready( function($) {
		 _wpMediaViewsL10n.insertIntoPost = '<?php _e( "Insert", "showcase" ); ?>';
		 function ct_media_upload(button_class) {
		   var _custom_media = true, _orig_send_attachment = wp.media.editor.send.attachment;
		   $('body').on('click', button_class, function(e) {
			 var button_id = '#'+$(this).attr('id');
			 var send_attachment_bkp = wp.media.editor.send.attachment;
			 var button = $(button_id);
			 _custom_media = true;
			 wp.media.editor.send.attachment = function(props, attachment){
			   if( _custom_media ) {
				 $('#showcase-taxonomy-image-id').val(attachment.id);
				 $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
				 $( '#category-image-wrapper .custom_media_image' ).attr( 'src',attachment.url ).css( 'display','block' );
			   } else {
				 return _orig_send_attachment.apply( button_id, [props, attachment] );
			   }
			 }
			 wp.media.editor.open(button); return false;
		   });
		 }
		 ct_media_upload('.showcase_tax_media_button.button');
		 $('body').on('click','.showcase_tax_media_remove',function(){
		   $('#showcase-taxonomy-image-id').val('');
		   $('#category-image-wrapper').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
		 });

		 $(document).ajaxComplete(function(event, xhr, settings) {
		   var queryStringArr = settings.data.split('&');
		   if( $.inArray('action=add-tag', queryStringArr) !== -1 ){
			 var xml = xhr.responseXML;
			 $response = $(xml).find('term_id').text();
			 if($response!=""){
			   $('#category-image-wrapper').html('');
			 }
			}
		  });
		});
	  </script>
	 <?php }
	}
  $Showcase_Taxonomy_Images = new Showcase_Taxonomy_Images();
  $Showcase_Taxonomy_Images->init(); }


  // CPT Textnodes
function custom_post_type_textnode()
{
	$labels = array(
		'name'                => __('TextNode', 'Post Type General Name', 'Cosmpolitan'),
		'singular_name'       => __('Textnode', 'Post Type Singular Name', 'Cosmpolitan'),
		'menu_name'           => __('TextNode', 'Cosmpolitan'),
		'parent_item_colon'   => __('Parent TextNode', 'Cosmpolitan'),
		'all_items'           => __('All TextNode', 'Cosmpolitan'),
		'view_item'           => __('View Textnode', 'Cosmpolitan'),
		'add_new_item'        => __('Add New Textnode', 'Cosmpolitan'),
		'add_new'             => __('Add New', 'Cosmpolitan'),
		'edit_item'           => __('Edit Textnode', 'Cosmpolitan'),
		'update_item'         => __('Update Textnode', 'Cosmpolitan'),
		'search_items'        => __('Search Textnode', 'Cosmpolitan'),
		'not_found'           => __('Not Found', 'Cosmpolitan'),
		'not_found_in_trash'  => __('Not found in Trash', 'Cosmpolitan'),
	);

	// Set other options for Custom Post Type
	register_taxonomy('Categorii servicii', 'post name',array("hierarchical" => true,"label" => "categorii servicii","singular_label" => "categorii servicii",'update_count_callback' => '_update_post_term_count','query_var' => true,'rewrite' => array( 'slug' => 'categorii-sr', 'with_front' => false ),'public' => true,'show_ui' => true,'show_tagcloud' => true,'_builtin' => false,'show_in_nav_menus' => false));
	$args = array(
		'label'               => __('TextNodes', 'Cosmpolitan'),
		'description'         => __('TextNode', 'Cosmpolitan'),
		'labels'              => $labels,

		// 'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
		'supports'            => array('title', 'editor', 'author', 'revisions', 'tags', 'thumbnail'),

		'taxonomies'          => array('textnode-category'),

		'hierarchical'        => false,
		'public'              => true,
		'menu_icon'         => 'dashicons-edit',
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type('textnode', $args);
}
add_action('init', 'custom_post_type_textnode', 0);

// Change "Posts" to "Articles"
function change_post_menu_label()
{
	global $menu;
	global $submenu;
	$menu[5][0] = 'Articles';
	$submenu['edit.php'][5][0] = 'All Articles';
	$submenu['edit.php'][10][0] = 'Add News Article';
	$submenu['edit.php'][16][0] = 'Tags';
	echo '';
}
add_action('admin_menu', 'change_post_menu_label');

function change_post_object_label()
{
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'Articles';
	$labels->singular_name = 'Article';
	$labels->add_new = 'Add New Article';
	$labels->add_new_item = 'Add New Article';
	$labels->edit_item = 'Edit Article';
	$labels->new_item = 'New Article';
	$labels->view_item = 'View Article';
	$labels->search_items = 'Search Articles';
	$labels->not_found = 'No Articles found';
	$labels->not_found_in_trash = 'No Articles found in Trash';
}
add_action('init', 'change_post_object_label');


// Remove comments from wp-dashboard
function remove_comments()
{
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'remove_comments');
//


// Breadcrumb
function the_breadcrumb() {
	global $post;
	$term = get_queried_object();
	$current = $post->ID;
	$parent = $post->post_parent;
	$grandparent_get = get_post($parent);
	$grandparent = $grandparent_get->post_parent;
	// If Is Single-Default-Page
    if ( is_single() && 'post' == get_post_type() ) {
		echo '<a class="me-2 text-decoration-none text-muted" href="'.home_url().'" rel="nofollow"><span class="me-2">Home</span>/</a>'." ";
		echo '<a class="me-2 text-decoration-none text-muted" href="'.get_permalink( get_page_by_path( '/home/articole')).'" rel="nofollow"><span class="me-2">Articole</span>/</a>'." ";
		echo  '<span class="me-2">'.get_the_title( $post->post_parent ) ."".'</span>';
    }else{
		echo "";
	};

	// If Is Single-Page of CPT Before-After
	if ( is_singular('before-after')) {
		echo '<a class="me-2 text-decoration-none text-muted" href="'.home_url().'" rel="nofollow"><span class="me-2">Home</span>/</a>'." ";
		echo '<a class="me-2 text-decoration-none text-muted" href="'.get_permalink( get_page_by_path( '/home/before-after')).'" rel="nofollow"><span class="me-2">Before-After</span>/</a>'." ";
		echo  '<span class="me-2">'.get_the_title( $post->post_parent ) ."".'</span>';
    }else{
		echo "";
	};

	// If Is Single-Page of CPT Serviciu
	if ( is_singular('serviciu')) {
		$terms = get_the_terms($post->ID, 'categorii-servicii' );
		foreach ($terms as $term) {
			$tslugs_arr[] = $term->slug;
			$term_link = get_term_link($term->term_id);
		}
		$terms_slug_str = join( " ", $tslugs_arr);
		echo '<a class="me-2 text-decoration-none text-muted" href="'.home_url().'" rel="nofollow"><span class="me-2">Home</span>/</a>'." ";
		echo '<a class="me-2 text-decoration-none text-muted" href="'. get_permalink( get_page_by_path( '/home/servicii' )).'" rel="nofollow"><span class="me-2">Servicii</span>/</a>';
		echo '<a href="'.$term_link.'"><span class="text-capitalize me-2">'.$terms_slug_str.'</span></a>'." / ";
		echo '<span class="mx-2">'.get_the_title($current).'</span>';
    }else{
		echo "";
	};

	// If Is Page
	if (is_page() && !empty($grandparent) ) {
        echo  '<a href="'.get_the_permalink( $grandparent ).'"><span class="grand-parent mx-2">'. get_the_title($grandparent) .'</span></a>'." / ".'<a href="'.get_the_permalink( $parent ).'"><span class="parent mx-2">'. get_the_title( $parent ) .'</span></a>' . " / " . '<span class="current mx-2">'. get_the_title($current) .'</span>';

    }elseif(is_page() && !empty($parent)){
		echo '<a href="'.get_the_permalink( $parent ).'"><span class="dd mx-2">'.get_the_title( $parent ).'</span></a>'.' / '.'<span class="mx-2">'.get_the_title($current).'</span>';

	}elseif(is_page() && empty($parent) && empty($grandparent)){
		echo get_the_title($current);
	}

	// If Is Taxonomy
	if (is_tax()) {
		echo '<a class="mx-2 text-decoration-none text-muted" href="'.home_url().'" rel="nofollow"><span class="">Home</span></a>'." / ";
		echo '<a class="mx-2 text-decoration-none text-muted" href="'. get_permalink( get_page_by_path( '/home/servicii' )).'" rel="nofollow"><span class="">Servicii</span></a>'." / ";
		echo '<span class="mx-2">'.$term -> name.'</span>';
    }else{
		echo "";
	}
}
//

// Get textnode by name
function textnode($post_name) {
	$query = new WP_Query(array(
		'post_type' => 'textnode',
		'post_status' => 'publish',
		'name' => $post_name
	));

	if (!$query->have_posts()) {
		return null;
	}

	$query->the_post();

	$content = get_the_content();
	wp_reset_postdata();

	return $content;
}

// Get featured image of textnode by name
function textnodeimg($post_name) {
	$query = new WP_Query(array(
		'post_type' => 'textnode',
		'post_status' => 'publish',
		'name' => $post_name
	));

	if (!$query->have_posts()) {
		return null;
	}

	$query->the_post();

	$image = get_the_post_thumbnail( get_the_ID(), 'large' );;
	wp_reset_postdata();

	return $image;
}

// Remove "Comments" from admin dashboard menu
add_action( 'admin_init', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

// Add "Specializari meta box" for Medic Profil Page
add_action('add_meta_boxes', 'add_product_meta');
function add_product_meta()
{
    global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'templates/page-profil-medic-template.php' )
        {
        global $post;
        add_meta_box('specializare', 'Specializare Medic', 'display_specializare_medic', 'page','normal', 'high');
        }
    }
}

function display_specializare_medic()
{  global $post;
    ?>
        <div id="field1_container">
            <input type="text" id="field1" name="field1" value="<?php echo get_post_meta($post->ID, 'field1', true) ?>" size="25" />
        </div>
    <?php
}

add_action( 'save_post', 'post_save' );
function post_save($post_id)
{
    // Check permissions
    if (isset ($_POST['post_type']) && 'specializare' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ))
    {
        return;
    }

    if (isset($_POST['field1'])) {
        $subtitle = $_POST['field1'];
        update_post_meta($post_id, 'field1', $subtitle);
    }
}

// Get term parents list edit
function get_term_parent_list( $term_id, $taxonomy, $args = array() ) {
	$list = '';
	$term = get_term( $term_id, $taxonomy );

	if ( is_wp_error( $term ) ) {
		return $term;
	}

	if ( ! $term ) {
		return $list;
	}

	$term_id = $term->term_id;

	$defaults = array(
		'format'    => 'name',
		'separator' => ' ',
		'link'      => false,
		'inclusive' => true,
	);

	$args = wp_parse_args( $args, $defaults );

	foreach ( array( 'link', 'inclusive' ) as $bool ) {
		$args[ $bool ] = wp_validate_boolean( $args[ $bool ] );
	}

	$parents = get_ancestors( $term_id, $taxonomy, 'taxonomy' );

	if ( $args['inclusive'] ) {
		array_unshift( $parents, $term_id );
	}

	foreach ( array_reverse( $parents ) as $term_id ) {
		$parent = get_term( $term_id, $taxonomy );
		$name   = ( 'slug' === $args['format'] ) ? $parent->slug : $parent->name;

		if ( $args['link'] ) {
			$list .= '<a href="' . esc_url( get_term_link( $parent->term_id, $taxonomy ) ) . '">' . $name . '</a>' . $args['separator'];
		} else {
			$list .= $name . $args['separator'];
		}
	}

	return $list;
}

// Exclude from search

add_action( 'init', 'update_my_custom_type', 99 );

function update_my_custom_type() {
    global $wp_post_types;

    if ( post_type_exists( 'textnode' ) ) {

        // exclude from search results
        $wp_post_types['textnode']->exclude_from_search = true;
		// $wp_post_types['page']->exclude_from_search = true;
    }
}
