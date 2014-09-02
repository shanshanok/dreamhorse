<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>编辑作品 - 以梦为马</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/articleAdd.css"/>

 <!-- Place inside the <head> of your HTML -->
		<script type="text/javascript" src="__PUBLIC__/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		tinymce.init({
			selector: "#essay-abstract",
			relative_urls: false,
			theme: "modern",

			plugins: [
				"jbimages, advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor"
			],
			toolbar1: "insertfile undo redo bold italic link preview media forecolor backcolor | jbimages",
			image_advtab: true, 
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		
		tinymce.init({
			selector: "#essay-content",
			theme: "modern",
			relative_urls: false,
			plugins: [
				"jbimages, advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor"
			],
			toolbar1: "insertfile undo redo bold italic alignleft aligncenter alignright alignjustify bullist numlist outdent indent link preview media forecolor backcolor |  jbimages",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		
	</script>
</head>

	<body>
	<div id="web">
			<div id="bghead">
				
				<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
				
				<div id="header">
					<div id="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo.png"></a></div>
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
			<div id="container">
		<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
		<div id="container-wrap">
			<div id="container-ariticle-add">
				<div id="content-article-add">
					<h2>编辑作品</h2><br/>
					<form name = "articleForm" method="post" action="__URL__/WorkEdit?id=<?php echo ($essay["id"]); ?>">
						<span class="headline">标题：</span><input name="title" class="essay-title" type="text" value="<?php echo ($essay["title"]); ?>"/><br/>
						<span class="headline">行业：</span><select name="industry">
								<option value="divcss">IT/互联网/通信/电子</option>
								<option value="javascript">金融/投资/财会</option>
								<option value="productanalysis">广告/媒体/出版/艺术</option>
								<option value="industryobservation">市场/销售/客服</option>
								<option value="demandanalysis">人事/行政/管理</option>
								<option value="javascript">建筑/房产/物业</option>
								<option value="productanalysis">消费品/贸易/物业</option>
								<option value="industryobservation">咨询/法律/认证</option>
								<option value="demandanalysis">生产/制造/营运/采购</option>
								<option value="demandanalysis">生物/制药/医疗/护理</option>
								<option value="javascript">教育/培训/翻译</option>
								<option value="productanalysis">科研/环保/休闲/其他</option>
								
							</select><br/>
						<span class="headline">作品摘要：</span>
						<div ><textarea id="essay-abstract" name="summary" ><?php echo ($essay["summary"]); ?></textarea></div><br/>
						<span class="headline">作品链接：</span>
						<input name="attachment" class="essay-title" type="text" value="<?php echo ($essay["attachment"]); ?>"/><br/>
						
						<input class="btn-submit" type="submit" value="提交"/>
						<br class="clear"/>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
				<div id="footer-bg">
					<div id="footer-inner">
						
							<div class="inner-block">
								<p>关于我们</p>
								<div class="footer-content">
								有待编辑。。。记录你的求职准备之路，分享你的成长经历！。。。
								</div>
							</div>
							<div class="inner-block">
								<p>我们的团队</p>
								<div class="footer-content">
									<a class="pic-link-small" href="__APP__/Profile?member=xiaowenjie"><img src="__ROOT__/Home/Uploads/xiaowenjie_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=zbin"><img src="__ROOT__/Home/Uploads/zbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Doris"><img src="__ROOT__/Home/Uploads/Doris_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=korbin"><img src="__ROOT__/Home/Uploads/korbin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Baby"><img src="__ROOT__/Home/Uploads/Baby_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=Pork.zhao"><img src="__ROOT__/Home/Uploads/Pork.zhao_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=shanshan"><img src="__ROOT__/Home/Uploads/shanshan_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=minmin"><img src="__ROOT__/Home/Uploads/minmin_large.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile?member=雨天"><img src="__ROOT__/Home/Uploads/雨天_large.png"/></a>
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								<div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								    <div class="col">
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
									<a href="#">前端设计</a>
								    <a href="#">前端设计</a>
									<a href="#">前端设计</a>
									</div>
								
								</div>
								
								
							</div>
							<div class="inner-block">
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="#"><img src="__TMPL__/resource/images/korbinzhao.png"/></a>
									<a class="right white" href="#">联系站长：Korbin Zhao</a>
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="copyright">Copyright © 2013 “以梦为马 Dream Catcher”团队</p>
				</div>
				
				<div id="back2top">
					<a href="#"></a>
				</div>
				
	</div>
	
</div>


	<script type="text/javascript" src="__TMPL__/resource/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
	
</body>
</html>