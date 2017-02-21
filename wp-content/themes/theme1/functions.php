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
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 180, 180 );

/*
 * добавляем виджеты
 */
register_sidebar( array(   //зарегистрировали виджет меню
	'name'          => 'Меню',
	'id'            => 'menu_header',
	'before_widget' => '',   //чтобы не было точек от <li>
	'after_widget'  => ''
) );

register_sidebar( array(  //зарегистрировали виджет сайдбар
	'name'          => 'Sidebar',
	'id'            => 'sidebar',
	'before_widget' => '<div class="sidebar-widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
) );

register_sidebar( array(  //зарегистрировали виджет футер
	'name'          => 'Footer',
	'id'            => 'footer',
	'before_widget' => '<div class="footer-info %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
) );

/*
 * комментарии
 */
if ( ! function_exists( 'twentyten_comment' ) ) :
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own twentyten_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Twenty Ten 1.0
	 */
	function twentyten_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case '' :
				?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, 40 ); ?>
						<?php printf( __( '%s<span class="says"></span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
					</div><!-- .comment-author .vcard -->
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em>
						<br/>
					<?php endif; ?>

					<div class="comment-meta commentmetadata"><a
							href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
							<?php
							/* translators: 1: date, 2: time */
							printf( __( '%1$s в %2$s', 'twentyten' ), get_comment_date(), get_comment_time() ); ?></a><?php edit_comment_link( __( '(Редактировать)', 'twentyten' ), ' ' );
						?>
					</div><!-- .comment-meta .commentmetadata -->

					<div class="comment-body"><?php comment_text(); ?></div>

					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth'     => $depth,
						                                                     'max_depth' => $args['max_depth']
						) ) ); ?>
					</div><!-- .reply -->
				</div><!-- #comment-##  -->

				<?php
				break;
			case 'pingback'  :
			case 'trackback' :
				?>
				<li class="post pingback">
				<p><?php _e( 'Pingback:', 'twentyten' ); ?><?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?></p>
				<?php
				break;
		endswitch;
	}
endif;

/**
 * баннер
 */
function banner_posts(){
	$labels = array(
		'name' => 'Баннеры', // Основное название типа записи
		'singular_name' => 'Баннер', // отдельное название записи типа Банер
		'add_new' => 'Добавить новый',
		'add_new_item' => 'Добавить новый баннер',
		'edit_item' => 'Редактировать баннер',
		'new_item' => 'Новый баннер',
		'view_item' => 'Посмотреть баннер',
		'search_items' => 'Найти баннер',
		'not_found' =>  'Баннер не найден',
		'not_found_in_trash' => 'В корзине баннера не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Баннеры'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	);
	register_post_type('banner', $args);
}
add_action('init', 'banner_posts');

/**
 * слайдер
 */
function slider_posts(){
	$labels = array(
		'name' => 'Слайдеры', // Основное название типа записи
		'singular_name' => 'Слайдер', // отдельное название записи типа Слайдер
		'add_new' => 'Добавить новый',
		'add_new_item' => 'Добавить новый слайдер',
		'edit_item' => 'Редактировать слайдер',
		'new_item' => 'Новый слайдер',
		'view_item' => 'Посмотреть слайдер',
		'search_items' => 'Найти слайдер',
		'not_found' =>  'Слайдер не найден',
		'not_found_in_trash' => 'В корзине слайдера не найдено',
		'parent_item_colon' => '',
		'menu_name' => 'Слайдеры'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail')
	);
	register_post_type('slider', $args);
}
add_action('init', 'slider_posts');