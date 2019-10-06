// 搜索优化,放置提示
$(document).ready(function(){
   $("#s").attr({
	   "placeholder":"请输入并回车",
	   "text-size":"20px",
   });
});
$(document).ready(function(){
   $("#s").css({
	   "color":"rgb(140,180,222)",
	   "margin-top":"10px",
   });
});
$(document).ready(function(){
   $("#s").css({
	   "width":"100%",
	   "height":"20px",
   });
});
// 删除搜索标签和搜索按钮,同时增加搜索div
$(document).ready(function(){
   $(".screen-reader-text").remove();
   $("#searchsubmit").remove();
});
$(document).ready(function(){
	var x ="<h3>搜索</h3>";
	$("#s").before(x);
});
//标签字体变大
$(document).ready(function(){
	$(".tagcloud a").attr(
	{
		"style":"font-size:14px;",
	});
});
//光标移动到菜单时背景颜色改变
$(document).ready(function(){
	$("#header_right ul li").mouseover(function(){
		$(this).css({
			"background-color":"#f6f6f6",
		});
	});
	$("#header_right ul li").mouseout(function(){
		$(this).css({
			"background-color":"#ffffff",
		});
	});
});
// 改变标签————html()方法
$(document).ready(function(){
	// 获取旧标签的内容
	var content = $('.post-categories').html();
	//创造新标签并加入旧标签的内容
	var news = '<span class="post-categories-2">'+content+'</span>';
	//添加新标签
	$('.post_list_comment').before(news);
	//移除旧标签
	$('.post_list_category').remove();
	$('.post-categories-2 li').css({
		'display':'inline',
		'list-style-type':'none',
	});
});

// 改变评论（一级评论）
	//头像放左边
$(document).ready(function(){
	var content = $(".avatar").attr("src");
	var news = "<img class='avatar_cys' width=40 height=40 src='"+content+"'<img>";
	$(".avatar").before(news);
	$(".avatar").remove();	
	
});
	//用户名称、发布时期、发布内容、回复按钮放右边
	$(document).ready(function(){
		//删除“说道”
		$(".says").remove();

	
	
		//发布时期放第一行
		
		$("div.comment-meta.commentmetadata").remove();
		// 回复按钮放第一行
		var reply = $(".reply").html();
		// alert(reply);
		var news = "<span class='reply_cys'>"+reply+"</span>";
		$('.fn').after(news);
		$(".reply").remove();
		$(".reply_cys").css({
			'display':'inline-block',
			'float':'right',
		});
		
		//发布内容放第二行
		
	});
//次级评论,消除浮动
$(document).ready(function(){
	$(".comment").after("<div class='clear'></div>");
});

// 评论信息
$(document).ready(function(){
	//
	$("#commentform p").css({
		'margin':'10px',
	});
	// 移除提示
	$(".comment-notes").remove();
	//评论
	$(".comment-form-comment label").remove();
	$(".comment-form-comment textarea").attr({
		'placeholder':'请在此发表你的评论',
	});
	$(".comment-form-comment textarea").css({
		'style':'none',
		'width':'100%',
		'height':'100px',
	});
	//姓名
	$(".comment-form-author label").remove();
	$(".comment-form-author input").attr({
		'placeholder':'姓名，必填哦',
	});
	//邮箱
	$(".comment-form-email label").remove();
	$(".comment-form-email input").attr({
		 "placeholder":"邮箱，必填哦",
	});
	//个人站点
	$(".comment-form-url label").remove();
	$(".comment-form-url input").attr({
		'placeholder':'个人站点，选填～',
	});
	//cookie
	$(".comment-form-cookies-consent").remove();
	//发表评论
	$("#submit").css({
		'background-color':'#475669',
		'color':'white',
		'padding':'3px',
	});
	//回复评论
	$("#reply-title").css({
		'font-size':'1rem',
	});
	$(".comment-reply-title small").css({
		'dispaly':'inline-block',
		'float':'right',
	});
	$(".comment-reply-title small").after("<div class='clear'></div>")
});

// 左列表点击出现菜单
$(document).ready(function(){
	$("#list_left").click(function(){
		$("#header_right").slideToggle("slow");
	});
});
// 右列表点击出现信息
$(document).ready(function(){
	$("#list_right").click(function(){
		// alert("aada");
		$("#sidebar").animate({
		width:"toggle",
		dispaly:"block",
		});
	});
});
