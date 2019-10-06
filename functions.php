<?php

// // 正确加载css和js
// 
// function myScripts_home() {  
//         wp_enqueue_style( 'home',get_template_directory_uri().'/style.css');
// 		// wp_enqueue_script('home',get_template_directory_uri().'/JavaScript.js');
// 		// wp_enqueue_script('home',get_template_directory_uri().'/jquery.js');
//     }  
// 
// add_action( 'wp_enqueue_scripts', 'myScripts_home' );  
// 
// // 解决css修改不显示问题
// add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles_1', PHP_INT_MAX);
// function enqueue_child_theme_styles_1() {
//     wp_enqueue_style( 'parent-style_1', get_template_directory_uri().'/style.css' );
//     wp_enqueue_style( 'child-style_1', get_stylesheet_uri(), NULL, filemtime( get_stylesheet_directory() . '/style.css' ) );
// };

//无法加载ueditor
// add_filter('use_block_editor_for_post', '__return_false');
//解决http强制转https后css、js无法显示问题
add_filter('script_loader_src', 'agnostic_script_loader_src', 20,2);
function agnostic_script_loader_src($src, $handle) {
    return preg_replace('/^(http|https):/', '', $src);
};

add_filter('style_loader_src', 'agnostic_style_loader_src', 20,2);
function agnostic_style_loader_src($src, $handle) {
    return preg_replace('/^(http|https):/', '', $src);
};

//判断是否移动端
function is_mobile() {
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	$mobile_agents = Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
	$is_mobile = false;
	foreach ($mobile_agents as $device) {
		if (stristr($user_agent, $device)) {
			$is_mobile = true;
			break;
		}
	}
	return $is_mobile;
}
// 开启侧边栏sidebar及其小工具widgets,注意id必须为sidebar
register_sidebar(array(
    'name' => '侧边栏',
    'id' => 'sidebar1',
    'before_widget' => '<div class="sidebar_widget">',
	'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    )
	);

register_sidebar(array(
    'name' => '404',
    'id' => 'sidebar2',
    'before_widget' => '<div class="sidebar_widget">',
	'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
    )
	);

/* 获取文章的评论人数 by zwwooooo | zww.me */
function zfunc_comments_users($postid=0,$which=0) {
	$comments = get_comments('status=approve&type=comment&post_id='.$postid); //获取文章的所有评论
	if ($comments) {
		$i=0; $j=0; $commentusers=array();
		foreach ($comments as $comment) {
			++$i;
			if ($i==1) { $commentusers[] = $comment->comment_author_email; ++$j; }
			if ( !in_array($comment->comment_author_email, $commentusers) ) {
				$commentusers[] = $comment->comment_author_email;
				++$j;
			}
		}
		$output = array($j,$i);
		$which = ($which == 0) ? 0 : 1;
		return $output[$which]; //返回评论人数
	}
	return 0; //没有评论返回0
}


// 消除不必要的文件头
function disable_embeds_init() {
  /* @var WP $wp */
  global $wp;

  // Remove the embed query var.
  $wp->public_query_vars = array_diff( $wp->public_query_vars, array(
    'embed',
  ) );

  // Remove the REST API endpoint.
  remove_action( 'rest_api_init', 'wp_oembed_register_route' );

  // Turn off
  add_filter( 'embed_oembed_discover', '__return_false' );

  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );

  // Remove all embeds rewrite rules.
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
}
add_action( 'init', 'disable_embeds_init', 9999 );
/**
 * Removes the 'wpembed' TinyMCE plugin.
 *
 * @since 1.0.0
 *
 * @param array $plugins List of TinyMCE plugins.
 * @return array The modified list.
 */
function disable_embeds_tiny_mce_plugin( $plugins ) {
  return array_diff( $plugins, array( 'wpembed' ) );
}
/**
 * Remove all rewrite rules related to embeds.
 *
 * @since 1.2.0
 *
 * @param array $rules WordPress rewrite rules.
 * @return array Rewrite rules without embeds rules.
 */
function disable_embeds_rewrites( $rules ) {
  foreach ( $rules as $rule => $rewrite ) {
    if ( false !== strpos( $rewrite, 'embed=true' ) ) {
      unset( $rules[ $rule ] );
    }
  }

  return $rules;
}
/**
 * Remove embeds rewrite rules on plugin activation.
 *
 * @since 1.2.0
 */
function disable_embeds_remove_rewrite_rules() {
  add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'disable_embeds_remove_rewrite_rules' );

/**
 * Flush rewrite rules on plugin deactivation.
 *
 * @since 1.2.0
 */
function disable_embeds_flush_rewrite_rules() {
  remove_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'disable_embeds_flush_rewrite_rules' );
//WordPress 5.0+移除 block-library CSS
add_action( 'wp_enqueue_scripts', 'fanly_remove_block_library_css', 100 );
function fanly_remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}
//移除admin_bar
 add_filter('show_admin_bar', '__return_false');
 
 
?>