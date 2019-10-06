<?php
// 解决css修改不显示问题
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles_1', PHP_INT_MAX);
function enqueue_child_theme_styles_1() {
    wp_enqueue_style( 'parent-style_1', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'child-style_1', get_stylesheet_uri(), NULL, filemtime( get_stylesheet_directory() . '/style.css' ) );
};

// add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles_2', PHP_INT_MAX);
function enqueue_child_theme_styles_2() {
    wp_enqueue_style( 'parent-style_2', get_template_directory_uri().'/css/page.css' );
    wp_enqueue_style( 'child-style_2', get_template_directory_uri().'/css/page.css', NULL, filemtime( get_stylesheet_directory() . '/css/page.css' ) );
};


	<!-- 不同页面不同css模版 -->
		<!-- 如果是主页 -->
		<?php if ( is_home() ) { ?>
		<link rel="stylesheet" href="<? bloginfo('stylesheet_url');?>" type="text/css" />   
		<!-- 如果是文章内页 -->
		<?php } elseif( is_single() ) { echo "dsandkj";echo get_template_directory_uri()."/css/page.css" ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/page.css '?>" type="text/css" />   
		<!-- 如果是搜索页面 -->
		<?php } elseif( is_archive() || is_search() ) { ?> 
		<link rel="stylesheet" href="<? bloginfo('stylesheet_url');?>" type="text/css" />   
		<!-- 如果是ID为resume的页面 -->
		<?php } elseif( is_page("resume") ) { ?>
		<link rel="stylesheet" href="/Applications/XAMPP/xamppfiles/htdocs/wordpress/wp-content/themes/johnson/css/page.css" type="text/css" />   
		<!-- 如果是ID为1314的分类 -->
		<?php } elseif( is_category() ) { ?>
		<link rel="stylesheet" href="<? bloginfo('stylesheet_url');?>" type="text/css" />   
		<!-- 其余的页面 -->
		<?php } else { ?>
		<link rel="stylesheet" href="<? bloginfo('stylesheet_url');?>" type="text/css" />   
		<? } ;?>
?>


			<script type="text/javascript"  src="http://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/base.js"></script>
			<? if(!is_single()){?>
			<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/readmore.js"></script>
			<?};?>
			<!-- 加载web端css文件 -->
			<link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" />