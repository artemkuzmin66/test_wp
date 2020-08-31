
<?php


function my_scripts_method() {
   wp_enqueue_style('main', get_stylesheet_uri());
   wp_enqueue_script('jquery-core', get_template_directory_uri() . '/src/js/jquery-3.5.1.min.js');
   wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/main.js', array('jquery'), true);
   wp_deregister_script('jquery-core');
   wp_register_script('jquery-core', get_template_directory_uri() . '/src/js/jquery-3.5.1.min.js');
   wp_enqueue_script('jquery');
 

}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

// post type




add_action('init', 'wash_custom_post_type');
function wash_custom_post_type(){
	register_post_type('wash', array(
		'labels'             => array(
			'name'               => 'Мойка', // Основное название типа записи
			'singular_name'      => 'Мойки', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую мойку',
			'edit_item'          => 'Редактировать мойку',
			'new_item'           => 'Новая мойка',
			'view_item'          => 'Посмотреть мойку',
			'search_items'       => 'Найти мойку',
			'not_found'          =>  'Мойка не найдена',
			'not_found_in_trash' => 'В корзине моек не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'washing'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
      'menu_position'      => null,
      'menu_icon'          => 'dashicons-cart',
		'supports'           => array('title','editor')
	) );
}

// post type


?>