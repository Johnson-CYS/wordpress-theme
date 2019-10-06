<div class="post_list">
	<!-- 文章标题与链接 -->
	<div class="post_list_title">
		<a href="<? the_permalink() ?>"><? the_title(); ?></a>
	</div>
	<!-- 文章内容 -->
	<div class="post_list_content">
		<? the_content(); ?>
	</div>
	<!-- 文章信息 -->
	<div id='details'>
		<!-- 文章发布时间 -->
		<span class="post_list_time">
			<? the_time('Y-m-d'); ?>
			<!-- <? the_time('Y-m-d H:m:s'); ?> -->
		</span>
		<!-- 文章作者 -->
		<span class="post_list_author">
			<? echo"作者：";the_author(); ?>
		</span>
			<!-- 文章标签，为list格式 -->
		<span class="post_list_tag">
			<? if (has_tag()) {
			the_tags();}
			else{echo "无标签";
			}?>
		</span>
		<!-- 文章评论 -->
		<span class="post_list_comment">
			<? echo '评论数:'.zfunc_comments_users($post->ID); ?>
		</span>
		<!-- 文章分类，为list格式 -->
		<div class="post_list_category">
			<? the_category(); ?>
		</div>
	</div>
</div>