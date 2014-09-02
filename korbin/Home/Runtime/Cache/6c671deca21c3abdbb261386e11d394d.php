<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>
<html>
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >

</head>
	
	<body>
	<div id="web">
			<div id="bghead">
				
				<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
				
				<div id="header">
					<div id="logo"><a href="__APP__"></a></div>
					<div id="nav" class="nav">
						<ul>
							<li><a id="home_page" href="__APP__">首页</a></li>
							<li><a id="careerwiki_page" href="__APP__/CareerWiki">职场维基</a></li>
							<!--
							<li><a id="careerbaike_page" href="__APP__/CareerWiki">职场百科</a></li>
							-->
							<li><a id="member_page" href="__APP__/Members">追梦者</a></li>
							<li><a id="aboutus_page" href="__APP__/AboutUs">关于我们</a></li>
							
							
						</ul>
					</div>
					<div id="contribute">
						<ul>
							<li>
								<a href="">投稿</a>
								<ul>
									<li><a id="article-add" href="__APP__/EssayAdd">发表文章</a></li>
									<li><a id="work-add" href="__APP__/WorkAdd">上传作品</a></li>
									<li><a id="experience-add" href="__APP__/ExperienceAdd">添加经历</a></li>
									
								</ul>
							</li>
						</ul>
					</div>
					<div id="login">
						<ul>
							<div id="part-logout">
								<li><a href="__ROOT__/index.php/Profile"><?php echo ($myself["username"]); ?></a></li>
								<li><a href="__ROOT__/index.php/Login/logout">退出</a></li>
							</div>
							<div id="part-login">
								<li><a href="__ROOT__/index.php/Register">注册</a></li>
								<li><a href="__ROOT__/index.php/Login">登录</a></li>
							</div>
						</ul>
						<!--使用hidden标签来获取用户登录信息，用于js获取div #login中part-login和part-logout的显示与否-->
						<input type="hidden" id="myself" value="<?php echo ($myself["username"]); ?>"/>
					</div>
					
				</div>
				

			</div>
			<div class="wrap">
				<div id="search-wrap">
				<form method="post" action="__APP__/Search">
					<div id="search">
							<input name="keyword" id="search-input" class="input" onFocus="clearText(this);"  onBlur="showText(this);" type="text" value="输入行业、岗位、作者名、关键词试试"/>
							<input type="submit" class="search-btn" value=""/>
						
					</div>
					</form>
				</div>
			</div>
			<div id="container">
			
	<div id="container-wrap">
		<h2 class="title-about">"以梦为马"职业生涯网站</h2>
		<p class="aboutus">
			<b>简介：</b><br/>
			“以梦为马”职业生涯网站是一个以职业生涯记录与分享、求职准备、职业生涯规划为主题的网站。<br/>
			为职场人士、在校学生等用户群提供了一个记录和分享自己职业生涯、了解各行业职位、规划职业生涯、为求职做相关准备的平台。<br/><br/>
			
			<b>以梦为马&nbsp;&nbsp;驰骋职涯</b><br/>
			信念盈心，荆棘满径。求职的生活，惊乱相依，迷茫相随。<br/>
			
			如果你已身在职场，你的工作是否是你曾经的梦想，你的分分秒秒是否正滴灌着梦想的幼苗。你的心灵，思想和职业产生了怎样的碰撞，你是否愿意分享你的经历，展现你的作品，创作自己的职场时间轴，串联职业的辉煌。<br/>
			
			如果你仍然蹒跚在求职的路上，你是否因杂乱的行业职位迷失了方向。是否想像风一样可以肆无忌惮，游刃有余的穿过行业间的荆棘和篱笆墙。是否觉得缺少展现自己长处的舞台，也没有真正了解行业、职位的途径。<br/>
			
			如果是<br/>
			
			“以梦为马”职业生涯网站，为你搭建了华丽的职业梦想舞台，我们手捧鲜花青藤，等待着你的加入。<br/>
			
			在这里，你能够了解各个行业，各个职位的状况，能够看到别人关于某行业、某职位的经历和想法，可以充分碰触梦想中职场的模样。<br/>
			
			在这里，你也能创建自己的职业空间，与别人分享自己的职业旅程上的风光与偶尔的失意迷茫。可以和同行交流自己的关于职业的感想，可能得到同行人的关注和慰藉。<br/>
			
			在这里，你能够及时发现你所关心的行业的兴衰走向，认识此行业的顶尖牛人，为自己的职业生涯添砖加瓦。<br/>
			
			当然，你也可以对相关行业或相关职业的相关内容作补充更正。你可以在“以梦为马”网站“寻您所需，创您所有”。<br/>
			
			“以梦为马”期待您的加入，书写自己职业生涯的辉煌篇章。<br/>
			
			最后，我们的网站还处于建设的初级阶段，有很多的不足，还请您批评指正。<br/>
			我们是追梦者：<br/>
			
			<p class="center-about">
			以职比擂堪承让<br/>
			梦游行海盲徜徉<br/>
			为解君欲从何事<br/>
			马驼才俊向捷疆<br/>
			</p>

		
		</p>
		<h2 class="title-about">"以梦为马"团队</h2>
		<p class="aboutus">
			我们是“以梦为马”团队，团队始建于2014年2月份，由最初的1人发展到目前一共8人。<br/>
			我们因“以梦为马”职业生涯网站的设计、开发、运维以及不断优化完善而汇集在一起；<br/>
			我们拥有共同的目标：找到一份自己心中的理想工作，拥有一段精彩的职业生涯；
			我们是一群对互联网怀着无限的热情的学生，我们的团队成员有马上就要在2014.9月踏上追寻理想工作和人生目标的“找工之路”的2015年应届毕业生，也有正在为求职做着精心准备，
			将于2016年之后毕业的小朋友们！<br/>
			我们怀着一颗虔诚的心，向着心中理想不断进发。<br/>
			“以梦为马”就是我们最好的见证~<br/><br/>
			
			<b>团队成员：</b><br/>
			<b>前端开发：</b><a class="inline" href="__APP__/Profile?member=korbinzhao">赵彬</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=poryzhao">赵鹏</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=Doris">彭姝琳</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=shanshan">李珊珊</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=minmin">潘洪敏</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=wangran">王然</a>（大连理工）<br/>
			<b>产品运维：</b><a class="inline" href="__APP__/Profile?member=zhanyuqiong">战宇琼</a>（大连理工）、<a class="inline" href="__APP__/Profile?member=tinker">张国忠</a>（大连理工）<br/><br/>
			<b>招贤令：</b><br/>
			亲，无论你是技术大牛、产品设计、运维、推广达人还是地地道道一个小白，只要你对互联网充满无限热爱，亦或是你对于某个行业某个职位有着充分的理解，认识各种职场大牛，正为自己
			心仪已久的工作做着精心的准备。。<br/>
			欢迎加入“以梦为马”团队，在这里你将遇到与你志同道合的小伙伴们，共同参与一个真刀真枪的互联网产品实战项目，为你的求职准备之路添上华丽丽的一笔，
			并且提升你的技术、领导力、沟通能力、团队合作能力。。<br/>
			爱上一匹野马，这里就是草原。。<br/>
			<b>联系站长：</b><a class="inline" href="__APP__/Profile?member=korbinzhao">Korbin Zhao</a><br/>
			<b>Email:</b>&nbsp;&nbsp;1031700027@qq.com
			
			
	
		</p>
	
	</div>

﻿
	<div class="footer">
				<div id="footer-bg">
					<div id="footer-inner">
						
							<div class="inner-block">
								<p>关于我们</p>
								<div class="footer-content">
								“以梦为马”职业生涯网站是一个以职业生涯记录与分享、求职准备、职业生涯规划为主题的网站。
为职场人士、在校学生等用户群提供了一个记录和分享自己职业生涯、了解各行业职位、规划职业生涯、为求职做相关准备的平台。
								</div>
							</div>
							<div class="inner-block">
								<p>我们的团队</p>
								<div class="footer-content">
									<a class="pic-link-small" href="__APP__/Profile?member=korbinzhao"><img title="korbinzhao" src="__ROOT__/Home/Uploads/korbinzhao_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=porkzhao"><img title="porkzhao" src="__ROOT__/Home/Uploads/poryzhao_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img title="Doris" src="__ROOT__/Home/Uploads/Doris_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img title="shanshan" src="__ROOT__/Home/Uploads/shanshan_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=水情曦鱼"><img title="minmin" src="__ROOT__/Home/Uploads/水情曦鱼_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									<a class="pic-link-small" href="__APP__/Profile?member=tinker"><img title="tinker" src="__ROOT__/Home/Uploads/minmin_large.png" onerror="this.src='__TMPL__/resource/images/person-default-large.png'" /></a>
									
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								<div>
								    <div class="col">
									<a href="http://www.whycss.com/">前端网址导航</a>
									<a href="http://ued.taobao.org/blog/">淘宝UED</a>
									<a href="http://adc.alibabatech.org/">阿里技术嘉年华</a>
								    <a href="http://www.w3.org/">W3C</a>
									
									</div>
								
								    <div class="col">
									<a href="http://www.w3cfuns.com/">w3cfuns</a>
									<a href="http://www.w3cplus.com/">w3cplus</a>
								    <a href="http://www.daqianduan.com/">大前端</a>
									<a href="http://www.uisdc.com/">优设</a>
									</div>
									
								
								</div>
								
								
							</div>
							<div class="inner-block">
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="__APP__/Profile?member=korbinzhao"><img src="__TMPL__/resource/images/korbinzhao.png"/></a>
									<a class="right white" href="__APP__/Profile?member=korbinzhao">联系站长：Korbin Zhao</a>
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">Copyright © 2014 DreamCatcher Team. All rights reserved.</p>
				</div>
				
				<div id="back2top">
					<a class="back2top" href="#"></a>
				</div>
				
	</div>
	
</div>

	
	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	<script type="text/javascript" src="__TMPL__/resource/js/bxCarousel.js"></script> 
		

</body>
</html>