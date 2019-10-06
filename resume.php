<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<style type="text/css">
		body{line-height: 1.5em;}
		
        .clear{ /* :after伪对象选择符---在这个对象被浏览器渲染后添加一定的内容*/
            content:"."; /*content属性：添加的内容即为这个属性的值。这个属性是专门与伪对象搭配使用的*/
            display: block; /*将添加进去的内容转换为块状元素*/
            visibility: hidden; /*visibility：可视化属性，控制元素是否可见，但无论是否隐藏都保留物理空间。{与display:none的比较}*/
            height: 0;/*将添加进去的内容高度设置为0，消除其占位*/
            clear: both;/*将添加进去的内容作为清除浮动的对象，实现外围容器中有内容存在，因此可以自动判定高度，解决塌陷*/
        }

		.left{float: left;}
		.center{
			float: center;}
		.right{float: right;
				vertical-align: bottom;
				}
		#resume
		#info{border: 3px solid darkgray;margin: 10px 10%; border-radius: 30px;box-shadow:1px 1px 5px #888888; ;}
			#t0{border-radius: 50px 50px 0px 0px; padding-left: 10px;}
			#c0{border-top: 3px solid darkgray;}
			#c01{ margin-left : 10px ;float:left;line-height: 3em;}
			#c02{ margin-right : 20px ;float:right;text-align:right;}
			#t4{border-bottom: 3px solid darkgray;}
		.titles{font-weight:bold ;color:white;background-color: black;}
		.details{border: 3px solid darkgray;margin: 10px 10%; border-radius: 0px;line-height: 2em;box-shadow:1px 1px 5px #888888;  }
			.ocupation{font-weight:bold ;text-align: center;border-top: 3px solid darkgray;color:black}
			.content{color: black;}
		</style>
		<title>my resume</title>
	</head>
	<body>
		<div id="resume">
			<div id ="info" class="info">
				<div id = "t0" class="titles" >个人信息</div>
				<div id = "c0" class="content">
					<div id = "c01" class = "c0" height=100px>
						姓名：陈永森<br/>
						求职意向：产品实习生<br/>
						电话：15819426963<br/>
						邮箱：798683987@qq.com
					</div>
					<div id = "c02" class = "c0">
						<img src="<?echo get_template_directory_uri().'/avatar.jpeg'; ?>" width=150px height=200px " alt="陈永森简历头像" >
					</div>
					<div class="clear" ></div>
				</div>
			</div>
			
			<div id ="d1" class="details">
				<div id = "t1" class="titles" >教育背景</div>
				
				<div id = "o1" class="ocupation">
					<span class="left">2015.09 - 2019.09 </span><span class="center">暨南大学(本科)</span><span class="right">国际经济与贸易</span>
				</div>
				<div id ="c1.1" class="content">
					<ul><li>主修课程：计量经济学、国际金融、国际结算、货币银行学、会计学、统计学等</ul></li>
				</div>
				<div id = "o1" class="ocupation">
					<span class="left">2019.09 - 2021.09</span><span class="center">浙江大学(硕士)</span><span class="right">全球数字贸易</span>
				</div>
				<div id ="c1.2" class="content">
					<ul><li>主修课程：国际贸易理论与政策、博弈论、金融研究方法、截面和面板数据分析、python等</ul></li>
				</div>
			</div>
			
			<div id ="d2" class="details">
				<div id = "t2" class="titles" >实习经历</div>
					<div id = "o1.1" class="ocupation">
						<span class="left">2017.07 - 2017.09</span><span class="center">携程旅行网深圳分公司</span><span class="right">市场助理</span>
					</div>
					<div id ="c2.1" class="content">
						<ul>
							<li>任职期间学习到地推技巧，通过线上线下结合宣传的方式增加了订单量，最终达到一个月121的订单量，深圳范围内排名前10。</li>
							<li>团队合作开辟新市场，进一步推广了携程专车服务的知名度。</li>
						</ul>
					</div>
			</div>		
			
			<div id ="d3" class="details">
				<div id = "t3" class="titles" >项目经历</div>
					<div id = "o2.1" class="ocupation">
						<span class="left">2016.10 - 2017.06</span><span class="center">校级组织外联部</span><span class="right">部长</span>
					</div>
					<div id ="c3.1" class="content">
						<ul>
							<li>任职期间个人累计拉赞数额达6450元，主导策划并落实了校园电影活动《暨影随行之“你的名字”》，获得了校区学生的热捧。</li>
							<li>任职期间带领部门创建自营订阅号“万籁聚暨”，通过线上线下多种宣传途径将用户数从0增长到1002，基本实现了对暨大珠区的线上宣传覆盖。 </li>
						</ul>
					</div>
				
					<div id = "o2.2" class="ocupation">
						<span class="left">2017,03-2018，03</span><span class="center">挑战杯竞赛创业类项目</span><span class="right">队长</span>
					</div>
					<div id ="c3.1" class="content">
						<ul>
							<li>习之轩——以服务号为载体的学习资料共享和导购社区，担任产品经理角色，负责人产品流程图和产品原型的制作，完成相关PRD、MRD.</li>
							<li>带领跨3院的9人队伍实现社区的建立和推广工作，最后获得校级成果。 </li>
						</ul>
						
					</div>
				
					<div id = "o2.3" class="ocupation">
						<span class="left">2016,09-2018，3</span><span class="center">暨大珠区生活服务平台</span><span class="right">创始人</span>
					</div>
					<div id ="c3.1" class="content">
						<ul>
							<li>创建以公众号“暨珠生活服务部”为载体的生活用品供应平台，发展数十人的营销团队。</li>
							<li>连续两年在暨大珠区进行学生生活用品的销售，总营业额达10万，平均利润率达40%。</li>
						</ul>
					</div>
			</div>		
			
			<div id ="d4" class="details">
				<div id = "t4" class="titles" >技能证书</div>
				
				<div id = "c4" class="content">
					<ul>
						<li>语言：英语四级六级证书；基本掌握python语言，熟练selenium＋webdriver的爬虫方法，了解numpy数据分析方法 </li>
						<li>软件：计算机二级证书；熟练掌握Office办公软件；掌握processon、Xmind、axure、亿图制作</li>
						<li>文体：熟悉公众号推文写作方法</li>
						<li>证书：校级奖学金；yy产品分析报告优秀证书</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
