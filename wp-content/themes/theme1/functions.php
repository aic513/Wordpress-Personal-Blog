<?php

/*
 * загружаемые скрипты и стили
 */
function load_style_script() {
	wp_enqueue_script( 'jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js' );
	wp_enqueue_script( 'jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
}

/*
 * загружаем скрипты и стили
 */
add_action( 'wp_enqueue_scripts', 'load_style_script' );


/*
 * поддержка миниатюр
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(180,180);

/*
 * добавляем виджеты
 */
register_sidebar( array(   //зарегистрировали виджет меню
	'name'          => 'Меню',
	'id'            => 'menu_header',
	'before_widget' => '',   //чтобы не было точек от <li>
	'after_widget'  => ''
) );

register_sidebar(array(  //зарегистрировали виджет сайдбар
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'before_widget' => '<div class="sidebar-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'));