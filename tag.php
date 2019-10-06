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
				{
					echo '没有日志可以显示';
					}
			?>
			</div>
			<!-- 页中之文章列表之切换 -->
			<div id="post_switch">
				<? posts_nav_link();?>
			</div>
		</div>
		<!-- 页中之侧边栏，加载sidebar.php -->
		<div id="sidebar">
			<? get_sidebar(); ?>
		</div>
		<div class='clear'></div>
	</div>

<!-- 加载footer.php文件 -->
<? get_footer(); ?>
