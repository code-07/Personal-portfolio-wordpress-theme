<?php

function portfolio_master_theme_support (){
	add_theme_support('title-tag');
	register_nav_menus(array(
		'primery_menu' => 'Primery Menu',
		'blog_menu' => 'Blog Menu',
	));
	add_theme_support('post-thumbnails');
	add_image_size('portfolio-img', 315, 210, true);
	add_image_size('blog-img', 630, 400, true);
}
add_action('after_setup_theme','portfolio_master_theme_support');

function portfolio_master_css_js (){
  wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', null, 'v1.0', 'all');
  wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css', null, 'v1.0', 'all');
  wp_enqueue_style('animate-heading',get_template_directory_uri().'/assets/css/animate-heading.css', null, 'v1.0', 'all');
  wp_enqueue_style('owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css', null, 'v1.0', 'all');
  wp_enqueue_style('owl-theme',get_template_directory_uri().'/assets/css/owl.theme.default.css', null, 'v1.0', 'all');
  wp_enqueue_style('animate-wow',get_template_directory_uri().'/assets/css/animate.css', null, 'v1.0', 'all');
  wp_enqueue_style('theme-style',get_template_directory_uri().'/assets/css/style.css', null, 'v1.0', 'all');
  wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css', null, 'v1.0', 'all');
  wp_enqueue_style('main-style',get_stylesheet_uri());



  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', 'jquery', null, true);
  wp_enqueue_script('isotope',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', 'jquery', null, true);
  wp_enqueue_script('animate-heading',get_template_directory_uri().'/assets/js/animate-heading.js', 'jquery', null, true);
  wp_enqueue_script('owl-carousel',get_template_directory_uri().'/assets/js/owl.carousel.min.js', 'jquery', null, true);
  wp_enqueue_script('wow',get_template_directory_uri().'/assets/js/wow.min.js', 'jquery', null, true);
  
  wp_enqueue_script('hans',get_template_directory_uri().'/assets/js/custom.js', 'jquery', null, true);
}
add_action('wp_enqueue_scripts','portfolio_master_css_js');


function portfolio_master_fallback_menu (){ ?>
	<ul class="nav navbar-nav navbar-menu navbar-right wow fadeInLeft">
	  <li class="active-item"><a href="#home">Home</a></li>
	  <li><a href="#service">Services</a></li>
	  <li><a href="#process">Process</a></li>
	  <li><a href="#contact">Contact</a></li>
	  <li><a href="#portfolio">Portfolio</a></li>
	  <li><a href="#testimonial">Testimonials</a></li>
	  <li><a href="#blog" class="last">Blog</a></li>
	</ul>
<?php }


function portfolio_master_custom_post (){ 
	register_post_type('about',array(
		'labels' => array (
			'name' => 'About Area',
			'menu_name' => 'About Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Process',
			'add_new_item' => 'Add New Process Item',
		),
		'public' => true,
		'supports' => array (
			'title','editor', 'revisions', 'page-attributes'
		)
	));

	register_post_type('counter',array(
		'labels' => array (
			'name' => 'Status',
			'menu_name' => 'Status Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Status',
			'add_new_item' => 'Add New Status Item',
		),
		'public' => true,
		'supports' => array (
			'title', 'revisions', 'page-attributes'
		)
	));

	register_post_type('services',array(
		'labels' => array (
			'name' => 'Services',
			'menu_name' => 'Services Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Services',
			'add_new_item' => 'Add New Services Item',
		),
		'public' => true,
		'supports' => array (
			'title', 'editor', 'revisions', 'page-attributes'
		)
	));


	register_post_type('works',array(
		'labels' => array (
			'name' => 'Portfolio',
			'menu_name' => 'Portfolio Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Portfolio',
			'add_new_item' => 'Add New Portfolio Item',
		),
		'public' => true,
		'supports' => array (
			'title', 'revisions', 'thumbnail', 'page-attributes'
		)
	));
	register_taxonomy(
		'works_category',
		'works',
		array(
			'labels' => array(
				'name' => 'Works Category',
				'add_new_item' => 'Add New Category'
			),
			'hierarchical' => true,
			'show_admin_colums' => true
		)
	);


	register_post_type('testimonial',array(
		'labels' => array (
			'name' => 'Testimonial',
			'menu_name' => 'Testimonial Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Testimonial',
			'add_new_item' => 'Add New Testimonial Item',
		),
		'public' => true,
		'supports' => array (
			'title', 'editor', 'thumbnail', 'revisions', 'page-attributes'
		)
	));


	register_post_type('slider',array(
		'labels' => array (
			'name' => 'Slider',
			'menu_name' => 'Slider Menu',
			'all_items' => 'All Item',
			'add_new' => 'Add New Slider',
			'add_new_item' => 'Add New Slider Item',
		),
		'public' => true,
		'supports' => array (
			'title', 'editor', 'thumbnail', 'revisions', 'page-attributes'
		)
	));


}
add_action('init','portfolio_master_custom_post');


function our_widgets(){
	register_sidebar(array(
		'name' 				=> 'Latest Albums',
		'description'     	=> 'Add your album',
		'id'				=> 'latest-album',
		'before_widget'		=> '<div class="widget-area">',
		'before_title'		=> '<div class="wid-header"><h4>',
		'after_title'		=> '</h4></div><div class="widget-area">',
		'after_widget'		=> '</div></div>'
	));

}
add_action('widgets_init','our_widgets');
function get_posts_page_url() {
  if( 'page' == get_option( 'show_on_front' ) ) {
    $posts_page_id = get_option( 'page_for_posts' );
    $posts_page = get_page( $posts_page_id );
    $posts_page_url = site_url( get_page_uri( $posts_page_id ) );
  }
  else {
    $posts_page_url = site_url();
  }
  return $posts_page_url;
}

require_once('inc/cmb2-custom-field.php');
require_once('inc/redux-framework-master/redux-framework.php');
require_once('inc/portfolio-master-the-option.php');


	