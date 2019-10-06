<? get_header(); ?>
	<!-- 页中 -->
	<div id='container'>
		<!-- 页中之文章列表 -->
		<div id="post">
			<!-- 页中之文章列表之文章 -->
			<div id="post_list">
			<?
				if (have_posts())
				{
					while (have_posts()){
						the_post();
						require("postlist.php");
					}
				}else
				{?>
					<div class='lost'>没有日志显示,也许可以搜索一下你想找的内容或回到
					<a href='<?bloginfo(url);?>'>主页</a>
					</div>
					<?}
			?>
			</div>
			<!-- 页中之文章列表之切换 -->
			<? 
			if (have_posts()){?>
				<div id="post_switch">
					<? posts_nav_link();?>
				</div>
				<?}
			else{
				echo null;
			}
			?>
			<div class="clear"></div>
		</div>
		<!-- 页中之侧边栏，加载sidebar.php -->
		<div id="sidebar">
			<div id="wp_info">
				<div id="title"> 关于我</div>
				<div id="name">姓名：陈永森</div>
				<div id="sex">性别：男</div>
				<div id="education">教育背景：暨大本->浙大硕</div>
				<div id="introduction">站点介绍：产品小白升级打怪之路，
				希望各位有志于互联网产品/运营岗位的小伙伴能在这里找到自己需要的资料。</div>
			</div>
			<? get_sidebar(); ?>
		</div>
		<div class='clear'></div>
	</div>

<!-- 加载footer.php文件 -->
<? get_footer(); ?>
