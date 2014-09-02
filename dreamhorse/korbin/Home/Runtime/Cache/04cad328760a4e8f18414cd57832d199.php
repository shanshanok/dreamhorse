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
			<!--此处原来放public文件夹中的aside-left部分-->
			<div id="main">
				<div id="example">
					<img src="__TMPL__/resource/images/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon">
					<div id="slides">
					<div class="slides_container">
						<div class="slide">
							<a href="" title="/"以梦为马/"职业生涯网站内测进行中。。" target="_blank"><img src="__TMPL__/resource/images/focuspic1.png" width="670" height="270" alt="Slide 1"></a>
							<div class="caption" style="bottom:0">
								<p>"以梦为马"职业生涯网站内测进行中。。</p>
							</div>
						</div>
						<div class="slide">
							<a href="" title="圆梦2014 以梦为马" target="_blank"><img src="__TMPL__/resource/images/focuspic2.png" width="670" height="300" alt="Slide 2"></a>
							<div class="caption">
								<p>圆梦2014 以梦为马</p>
							</div>
						</div>
						<div class="slide">
							<a href="" title="我们有梦想，所以我们并不渺小" target="_blank"><img src="__TMPL__/resource/images/focuspic3.png" width="670" height="300" alt="Slide 3"></a>
							<div class="caption">
								<p>我们有梦想，所以我们并不渺小</p>
							</div>
						</div>
						<div class="slide">
							<a href="" title="人如果没有梦想，和咸鱼有什么两样" target="_blank"><img src="__TMPL__/resource/images/focuspic5.png" width="670" height="300" alt="Slide 4"></a>
							<div class="caption">
								<p>人如果没有梦想，和咸鱼有什么两样</p>
							</div>
						</div>
						<div class="slide">
							<a href="" title="Sometimes, you need to step outside, get some air, and remind yourself of who you are and who you want to be." target="_blank"><img src="__TMPL__/resource/images/focuspic4.png" width="670" height="300" alt="Slide 5"></a>
							<div class="caption">
								<p>Sometimes, you need to step outside, get some air, and remind yourself of who you are and who you want to be.</p>
							</div>
						</div>
					</div>
					<a href="#" class="prev"><img src="__TMPL__/resource/images/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
					<a href="#" class="next"><img src="__TMPL__/resource/images/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
					<img src="__TMPL__/resource/images/example-frame.png" width="739" height="341" alt="Example Frame" id="frame">
				</div>
				</div>
				<div id="content">
		
					<p class="content-title"><?php echo ($content_title); ?></p>
					
					<?php if(is_array($essays)): foreach($essays as $key=>$essay): ?><div class="essay">
							
							<div class="essay-header">
							<!--中间大标题下的小字 -->
								<h2 class="essay-title"><a href="__APP__/<?php echo ($essay["type"]); ?>?id=<?php echo ($essay["id"]); ?>"><?php echo ($essay["title"]); ?></a></h2>
								<div class="essay-metas">
								<span class="muted">
								<i class="icon-user icon12"></i>
								<a class="inline hovercolor"  href="__APP__/Profile?member=<?php echo ($essay["author"]); ?>">
									<?php echo ($essay["author"]); ?>&nbsp;&nbsp;
								</a>
								</span>
							
								<span class="muted">
								<i class="icon-time icon12"></i><?php echo ($essay["addtime"]); ?>&nbsp;&nbsp;
								</span>
								<span class="muted">
								<i class="icon-type icon12"></i><?php echo ($essay["type"]); ?>类型&nbsp;&nbsp;
								</span>
							
								<span class="muted">
								<i class="icon-eye-open icon12"></i><?php echo ($essay["visits"]); ?>&nbsp;浏览&nbsp;&nbsp;
								</span>
								<span class="muted">
								<i class="icon-comment icon12"></i><?php echo ($essay["commentscount"]); ?>&nbsp;评论&nbsp;&nbsp;
								</span>
							
								</div>
							</div>
							
							<div id="essay_<?php echo ($essay["essayno"]); ?>" class="essay-summary">
								 <?php echo ($essay["summary"]); ?>
								 
							</div>
							
						</div><?php endforeach; endif; ?>
					<div id="pages-nav" class="black2"><?php echo ($page); ?></div>
					
					
				</div>
				
				
			</div>
			<div id="aside-right">
	
	<div id="tag">
		
		<p class="content-title">
			标签
		</p>
		
		<p class="tag-cloud">
		<a href=''   title='' style=''>Front-End</a>
		<a href=''  title='' >用户体验</a> 
		<a href=''  title='' style=''>互联网</a> 
		<a href=''  title='' style=''>快消</a> 
		<a href=''  title='' style=''>供应链</a> 
		<a href=''  title='' style=''>机械制造</a> 
		<a href=''  title='' style=''>职业生涯</a> 
		<a href=''  title='' style=''>房地产</a>
		<a href=''  title='' style=''>化工</a> 
		<a href=''  title='' style=''>技术支持</a> 
		<a href=''  title='' style=''>PM</a> 
		<a href=''  title='' style=''>经验分享</a> 
		<a href=''  title='' style=''>网站设计</a> 
		<a href=''  title='' style=''>网页设计</a> 
		<a href=''  title='' style=''>职场</a> 
		<a href=''  title='' style=''>交互设计</a> 
		<a href=''  title='' style=''>产品理念</a>
		<a href=''  title='' style=''>酷站</a>
		</p>
	
	</div>
	
	 <div id="newest">
		 <div id="tabs-line">
			   <span class="current" id="tab1">
				  最新文章
			   </span>
			   <span class="" id="tab2">
				 最新作品
			   </span>
			   <span class="" style="border-right:none" id="tab3">
				最新经历
			   </span>
		   </div>
		   <ul class="new-article" style="display:block;">
				
				<!--<?php echo ($i = 1); ?>-->
			
				<?php if(is_array($essays_newest10)): foreach($essays_newest10 as $key=>$essay): ?><li class="num-<?php echo ($i); ?>">
						<b><?php echo ($i++); ?></b>
						<a href="__APP__/Essay?id=<?php echo ($essay["id"]); ?>"><?php echo ($essay["title"]); ?></a>
					</li><?php endforeach; endif; ?>
			</ul>
			<ul class="new-article" style="display:none;">
				
				<!--<?php echo ($i = 1); ?>-->
			
				<?php if(is_array($works_newest10)): foreach($works_newest10 as $key=>$work): ?><li class="num-<?php echo ($i); ?>">
						<b><?php echo ($i++); ?></b>
						<a href="__APP__/Work?id=<?php echo ($work["id"]); ?>"><?php echo ($work["title"]); ?></a>
					</li><?php endforeach; endif; ?>
			</ul>
			<ul class="new-article" style="display:none;">
				
				<!--<?php echo ($i = 1); ?>-->
			
				<?php if(is_array($exps_newest10)): foreach($exps_newest10 as $key=>$exp): ?><li class="num-<?php echo ($i); ?>">
						<b><?php echo ($i++); ?></b>
						<a href="__APP__/Experience?id=<?php echo ($exp["id"]); ?>"><?php echo ($exp["title"]); ?></a>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
		
		<div id="books-recommended">
		<p class="content-title">
			学习用书
		</p>
		<div id="bookbox">
		<ul class="content-list" id="c2">
			<li>
				<a target="blank" href="http://book.douban.com/subject/10546125/">
					<div class="book-img"><img src="__TMPL__/resource/images/JavaScript高级程序设计.jpg"/></div>
					<dl class="book-info">
						<dt>JavaScript高级程序设计</dt>
						<dd>
							<strong>推荐：</strong>
							全能前端人员必读之经典
						</dd>
					</dl>
				</a>
				<!--line-->
				
				<a target="blank" href="http://book.douban.com/subject/4736167/">
					<div class="book-img"><img src="__TMPL__/resource/images/精通CSS.jpg"/></div>
					<dl class="book-info">
						<dt>精通CSS：高级Web标准解决方案</dt>
						<dd>
							<strong>推荐：</strong>
							令人叫绝的CSS技术汇总
						</dd>
					</dl>
				</a>
			
			<!--line-->
			
				<a target="blank" href="http://book.douban.com/subject/5914587/">
					<div class="book-img"><img src="__TMPL__/resource/images/启示录.jpg"/></div>
					<dl class="book-info">
						<dt>启示录 : 打造用户喜爱的产品</dt>
						<dd>
							<strong>推荐：</strong>
							产品经理必读书籍
						</dd>
					</dl>
				</a>
			
			<!--line-->
			
				<a target="blank" href="http://book.douban.com/subject/6709783/">
					<div class="book-img"><img src="__TMPL__/resource/images/浪潮之巅.jpg"/></div>
					<dl class="book-info">
						<dt>浪潮之巅</dt>
						<dd>
							<strong>推荐：</strong>
							不仅讲述科技工业的历史，更重在揭示它的规律性
						</dd>
					</dl>
				</a>
			</li>


			<li>
				<a target="blank" href="http://book.douban.com/subject/2228378/">
					<div class="book-img"><img src="__TMPL__/resource/images/权威指南.png"/></div>
					<dl class="book-info">
						<dt>JavaScript权威指南</dt>
						<dd>
							<strong>推荐：</strong>
							全能前端人员必读之经典
						</dd>
					</dl>
				</a>
				<!--line-->
				
				<a target="blank" href="http://book.douban.com/subject/1921890/">
					<div class="book-img"><img src="__TMPL__/resource/images/DOM编程艺术.png"/></div>
					<dl class="book-info">
						<dt>Javascript DOM编程艺术</dt>
						<dd>
							<strong>推荐：</strong>
							简单易懂，案例集中
						</dd>
					</dl>
				</a>
			
			<!--line-->
			
				<a target="blank" href="http://book.douban.com/subject/1472137/">
					<div class="book-img"><img src="__TMPL__/resource/images/head first.png"/></div>
					<dl class="book-info">
						<dt>Head First HTML with CSS&XHTML</dt>
						<dd>
							<strong>推荐：</strong>
							HeadFirst系列丛书
						</dd>
					</dl>
				</a>
			
			<!--line-->
			
				<a target="blank" href="http://book.douban.com/subject/6025285/">
					<div class="book-img"><img src="__TMPL__/resource/images/HTML5与CSS3权威指南.png"/></div>
					<dl class="book-info">
						<dt>HTML5与CSS3权威指</dt>
						<dd>
							<strong>推荐：</strong>
							打造坚实基础
						</dd>
					</dl>
				</a>
			</li>
		</ul>
		</div>
		<a href=""></a>
	</div>

	

</div>
		
			<br class="clear"/><!--因为浮动元素不占据空间，所以容器元素不包围他们。添加一个进行清理的空元素可以迫使容器元素包围浮动元素-->
			
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