//添加阅读更多按钮
$(document).ready(function(){
	//改变文章content的css属性，隐藏过多内容
	$(".post_list_content").css({
		'width':'100%', 
		'height':'300px',
		'overflow': 'hidden',
	});
	// 获取当前文章a标签中的href属性,注意通过each()函数和this来调用不同文章的a链接
	$('.post_list_title a').each(function(){
		var content =  $(this).attr('href');
		// 创建新标签
		var news = "<div class='read_more'>"+"<a href='"+ content +"'>阅读更多</a>"+'</div>';
		$(this).parent().parent().find('.post_list_content').after(news);
	});
	
	
	$('.read_more a').css({
		'color':'#475669',
		'padding':'10px',
		'text-decoration':'underline',
	});
	$('.read_more').css({
		'margin':'10px',
		'text-align':'center',
	});
});