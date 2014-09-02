<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>编辑文章 - 以梦为马</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/articleAdd.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/index.css"/>

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
					<h2>编辑文章</h2><br/>
					<form name = "articleForm" method="post" action="__URL__/articleEdit?essayno=<?php echo ($essay["id"]); ?>">
						<!---->
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
						<span class="headline">文章摘要：</span>
						<div ><textarea id="essay-abstract" name="summary" ><?php echo ($essay["summary"]); ?></textarea></div>
						<span class="headline">文章正文：</span>
						<textarea id="essay-content" name="content" style="width:100%; height:700px;"><?php echo ($essay["content"]); ?></textarea>
						
						<input class="btn-submit" type="submit" value="提交"/>
						<br class="clear"/>
					</form>
				</div>
			</div>
		</div>
	</div>