<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	
	<!-- 基本信息（编码、名称、描述） -->
	<meta  http-equiv="content-type" content="text/text/html; charset="<?php echo get_bloginfo('charset');?>"/>
	<meta  name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php bloginfo("name");?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>"/>
	
	<!-- 判断是否mobile -->
	<? if( is_mobile() ){ ?>
			<!-- 加载mobile端js -->
			<script type="text/javascript"  src="https://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript" src=" https://pm-notes.cn/wordpress/wp-content/themes/johnson/base_mobile.js"></script>
			<? if(!is_single()){?>
			<script type="text/javascript" src="https://pm-notes.cn/wordpress/wp-content/themes/johnson/readmore.js"></script>
			<?};?>
			<!-- 加载mobile端css -->
			<link href="https://pm-notes.cn/wordpress/wp-content/themes/johnson/css/style_moblie.css" type="text/css" rel="stylesheet" />
		<?}
		else {?>
			<!-- 加载web端js -->
			<script type="text/javascript"  src="https://code.jquery.com/jquery-latest.js"></script>
			<script type="text/javascript" src="https://pm-notes.cn/wordpress/wp-content/themes/johnson/base.js"></script>
			<? if(!is_single()){?>
			<script type="text/javascript" src="https://pm-notes.cn/wordpress/wp-content/themes/johnson/readmore.js"></script>
			<?};?>
			<!-- 加载web端css文件 -->
			<link href="https://pm-notes.cn/wordpress/wp-content/themes/johnson/style.css" type="text/css" rel="stylesheet" />
	<? } ?>
	<!-- 加载动作钩子 -->
	<?php wp_head(); ?>
</head>

<body>
	<div id="header">
		<div id="list_left"><img src="<? echo get_template_directory_uri().'/images/list.jpg'?>" width="40px"  /></div>
		<div id="header_left" class="header">
			<a href="<? bloginfo("url"); ?>">
			<div id="blog_icon" >PM-NOTES.cn</div>
			<div id="blog_name"> <? bloginfo('name'); ?></div>
			</a>
		</div>
		<div id="list_right"><img src="<? echo get_template_directory_uri().'/images/info.jpg'?>" width="30px"  /></div>
		<div class="clear"></div>
		<div id="header_right" class="header" name="nav_menu">
			<? wp_nav_menu(); ?>
		</div>
	</div>
