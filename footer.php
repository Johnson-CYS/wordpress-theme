<div id="footer">
	<div id=""statistics">
		<span>站点统计：</span>
		<span id="pv"> 访问量：
		<?php 
			$view = get_option('view');
			update_option("view",$view+1);
			echo get_option('view');
		?>
		</span>
		<span class="internal">|</span>
		<span id="uv">发布文章数：
		<?
			$count_posts = wp_count_posts();  
			$publish_posts = $count_posts->publish;
			echo $publish_posts;
		?>	
		</span>
<!-- 		<div><? bloginfo('stylesheet_url');?></div>
		<div><? echo get_template_directory_uri()."/screenshot.jpeg"; ?></div> -->
	</div>
	<div id="copyright">
		Copyright © 2019 陈永森. All Rights Reserved.
	</div>
</div>

<!-- 消除顶部空白 -->
<?php wp_footer();?>
</body>