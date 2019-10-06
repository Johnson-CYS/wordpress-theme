<div id="comments">
	<div id="comments_box">
	<? if (!comments_open()){ ?>
		<div class="comments_close">评论功能已关闭</div>
	<?}else if(!have_comments()){ ?>
		 <div class="comments_encourage"> 目前还没有评论,快来抢第一个沙发吧 </div>
	<?}else {
		echo"<div class='comment_title'>评论</div>";
		wp_list_comments();
		echo "<div class='clear'></div>" ;}?>
	<div class="clear"></div>
	</div>
	
	<div id="respond_box">
		<? comment_form(); ?>
	</div>
</div>