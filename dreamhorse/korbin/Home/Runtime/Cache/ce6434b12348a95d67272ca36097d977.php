<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>
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
			

	<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/careerWiki.css" />
	
	<div id="container-wrap">
			<div class="left" id="industry-list">
				<ul>
					<div class="list-tip">岗位列表</div>
					<li>
						<p class="industry">IT/互联网/通信/电子</p>
						<div class="detail-industry">
							<p class="list-title">IT/互联网/通信/电子<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
							<li class="namelist"><p>前端开发工程师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>测试工程师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>软件工程师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>技术支持工程师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>产品经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>用户体验</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>运营专员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>UI设计师</p><div id="edit"><a> add</a></div></li>
							</ul>
						</div>
						
					</li>
					<li>
						<p class="industry">金融/投资/财会</p>
						<div class="detail-industry">
							<p class="list-title">金融/投资/财会<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
							<li class="namelist"><p>会计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>出纳</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>软审计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>理财顾问</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>操盘手</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>财务经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>证券分析</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>信贷</p><div id="edit"><a> add</a></div></li>
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">广告/媒体/出版/艺术</p>
						<div class="detail-industry">
							<p class="list-title">广告/媒体/出版/艺术<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
							<li class="namelist"><p>公关媒介</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>会务执行</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>平面设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>记者</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>后期制作</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>包装设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>美术设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>CAD设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>创意指导</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>原画</p><div id="edit"><a> add</a></div></li>
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">市场/销售/客服</p>
						<div class="detail-industry">
							<p class="list-title">市场/销售/客服<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>市场专员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>市场策划</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>市场经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>销售代表</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>电话销售</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>区域经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>售前支持</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>客服服务</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>电话服务</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>上午专员</p><div id="edit"><a> add</a></div></li>
								
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">人事/行政/管理</p>
						<div class="detail-industry">
							<p class="list-title">人事/行政/管理<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>公关媒介</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>会务执行</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>平面设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>记者</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>后期制作</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>包装设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>美术设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>CAD设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>创意指导</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>原画</p><div id="edit"><a> add</a></div></li>
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">建筑/房产/物业</p>
						<div class="detail-industry">
							<p class="list-title">建筑/房产/物业<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>招聘经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>绩效经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>前台</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>文员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>秘书</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>行政专员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>行政经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>项目管理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>部门经理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>总监</p><div id="edit"><a> add</a></div></li>
								
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">消费品/贸易/物业</p>
						<div class="detail-industry">
							<p class="list-title">消费品/贸易/物业<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>跟单</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>外贸</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>单证</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>报关</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>物料</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>物流专员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>仓库管理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>服装设计</p><div id="edit"><a> add</a></div></li>
								
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">咨询/法律/认证</p>
						<div class="detail-industry">
							<p class="list-title">咨询/法律/认证<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>公关媒介</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>会务执行</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>平面设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>记者</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>后期制作</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>包装设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>美术设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>CAD设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>创意指导</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>原画</p><div id="edit"><a> add</a></div></li>
								
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">生产/制造/营运/采购</p>
						<div class="detail-industry">
							<p class="list-title">生产/制造/营运/采购<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
							<li class="namelist"><p>市场调研</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>咨询顾问</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>猎头顾问</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>专利代理</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>律师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>法务</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>合规</p><div id="edit"><a> add</a></div></li>
							
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">生物/制药/医疗/护理</p>
						<div class="detail-industry">
							<p class="list-title">生物/制药/医疗/护理<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>公关媒介</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>会务执行</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>平面设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>记者</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>后期制作</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>包装设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>美术设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>CAD设计</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>创意指导</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>原画</p><div id="edit"><a> add</a></div></li>
								
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">教育/培训/翻译</p>
						<div class="detail-industry">
							<p class="list-title">教育/培训/翻译<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
								<li class="namelist"><p>校长</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>教务</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>英语教师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>数学教师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>物理教师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>化学教师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>语文教师</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>幼教</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>翻译</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>课程培训</p><div id="edit"><a> add</a></div></li>
							</ul>
						</div>
					</li>
					<li>
						<p class="industry">科研/环保/休闲/其他</p>
						<div class="detail-industry">
							<p class="list-title">科研/环保/休闲/其他<a class="addPost" href="__APP__/PostAdd">添加岗位</a></p>
							<ul class="list">
							<li class="namelist"><p>科研</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p >环境工程</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>导购</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>导游</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>营业员</p><div id="edit"><a> add</a></div></li>
							<li class="namelist"><p>收银</p><div id="edit"><a> add</a></div></li>
							
								
							</ul>
						</div>
					</li>
					
				</ul>
			</div>
			
			<div id="post-info">
				<div class="post-title" id="postname"><?php echo ($postintro["postname"]); ?></div>
				<div  id="tishi">
				<label id="result" ></label>
			    </div>
				
				<div class="post-info-part">
					
					<div class="topic">
						职位简介
					 </div>
					 <div class="topic-content">
						   <div class="topic-content-details" id="introduction">
							 <?php echo ($postintro["content"]); ?>
							 </br>
							 
						   </div>
							<a href="__APP__/PostEdit?postname=<?php echo ($postintro["postname"]); ?>&type=introduction" class="edit">编辑</a>
					 </div>
		
				</div>
						<div class="box" style="float:right">
							
								
								<div class="pos-btn" id="like" onclick="postaddLike(this);">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span name="likecount"  class="praisecount"><?php echo ($likecount1); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postintro["editno"]); ?>">
								</div>		
								<div class="pos-btn" id="dislike" onclick="postaddDislike(this);">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span id="dislikecount" class="praisecount"><?php echo ($dislikecount1); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postintro["editno"]); ?>">
								</div>
							</div>
				<div class="post-info-part">
				
					<div class="topic">
					   <span>职位需求<span>
					 </div>
					 <div class="topic-content">
						   <div class="topic-content-details" id="requirement">
							 <?php echo ($postrequire["content"]); ?>
							  
						   </div>
							<a href="__APP__/PostEdit?postname=<?php echo ($postintro["postname"]); ?>&type=requirement" class="edit">编辑</a>
					 </div>
				
				</div>
				<div class="box" style="float:right">
								
								
								<div class="pos-btn" id="like" onclick="postaddLike(this)">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span name="likecount"  class="praisecount"><?php echo ($likecount2); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postrequire["editno"]); ?>">
								</div>		
								<div class="pos-btn" id="dislike" onclick="postaddDislike(this)">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span id="dislikecount" class="praisecount"><?php echo ($dislikecount2); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postrequire["editno"]); ?>">
								</div>
							</div>
				<div class="post-info-part">
				
					<div class="topic">
					   <span>个人提升<span>
					 </div>
					 <div class="topic-content">
						   <div class="topic-content-details" id="improment">
							  <?php echo ($postimpro["content"]); ?>
						   </div>
							<a href="__APP__/PostEdit?postname=<?php echo ($postintro["postname"]); ?>&type=improvement" class="edit">编辑</a>
					 </div>
				
				</div>
				<div class="box" style="float:right">
								
								
								<div class="pos-btn" id="like" onclick="postaddLike(this);">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span name="likecount"  class="praisecount"> <?php echo ($likecount3); ?> </span>
									<input type="hidden" class="targetno" value="<?php echo ($postimpro["editno"]); ?>"/>
								</div>		
								<div class="pos-btn" id="dislike" onclick="postaddDislike(this);">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span name="dislikecount" class="praisecount"><?php echo ($dislikecount3); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postimpro["editno"]); ?>"/>
								</div>
							</div>
			<div class="post-info-part">
			
				<div class="topic">
				   <span>招聘信息<span>
				 </div>
				 <div class="topic-content">
					   <div class="topic-content-details" id="employment">
						 <?php echo ($postemploy["content"]); ?>
					   </div>
						<a href="__APP__/PostEdit?postname=<?php echo ($postintro["postname"]); ?>&type=employment"  class="edit">编辑</a>
				 </div>
			
			</div>
			<div class="box" style="float:right">
								
								
								<div class="pos-btn" id="like" onclick="postaddLike(this);">
									<p id="add1" class="pos-btn">+1</p>
									<i class="icon-like icon12" title="喜欢"></i>
									<p id="add1" class="pos-btn">+1</p>
									<span name="likecount" class="praisecount"> <?php echo ($likecount4); ?> </span>
									<input type="hidden" class="targetno" value="<?php echo ($postemploy["editno"]); ?>">
								</div>		
								<div class="pos-btn" id="dislike" onclick="postaddDislike(this);">
								
									<i class="icon-dislike icon12" title="没劲"></i>
									<p id="add2" class="pos-btn">+1</p>
									<span name="dislikecount" class="praisecount"><?php echo ($dislikecount4); ?></span>
									<input type="hidden" class="targetno" value="<?php echo ($postemploy["editno"]); ?>">
								</div>
							</div>

		</div>
	
			
			<br class="clear"/><!--因为浮动元素不占据空间，所以容器元素不包围他们。添加一个进行清理的空元素可以迫使容器元素包围浮动元素-->
			
		</div>
		<?php if(is_array($names)): $i = 0; $__LIST__ = $names;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$name): $mod = ($i % 2 );++$i;?><input type="hidden" class="names" value="<?php echo ($name["postname"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
		<input type="hidden" id="author" value="<?php echo ($post["auhtor"]); ?>">
		<input type="hidden" id="praisetype" value="postpraise"/>

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