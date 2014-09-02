<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加经历</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/articleAdd.css"/>

 <!-- Place inside the <head> of your HTML -->
		<script type="text/javascript" src="__PUBLIC__/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		tinymce.init({
			selector: "textarea",
			theme: "modern",

			plugins: [
				"jbimages, advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media | forecolor backcolor jbimages",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		});
		
	</script>
</head>

<body>
	<body>
	<div id="web">
			<div id="bghead">
				
				<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
				
				<div id="header">
					<div id="logo"><a href="__APP__"><img src="__TMPL__/resource/images/logo.png"></a></div>
					<div id="nav" class="nav">
						<ul>
							<li><a id="home_page" href="__APP__">首页</a></li>
							<li><a id="pm_page" href="__APP__/Category?essaytype=pm">产品 PM</a>
									<ul>
										<li><a href="__APP__/Category?essaytype=productanalysis">产品分析</a>
										</li>
										<li><a href="__APP__/Category?essaytype=industryobservation">行业观察</a>
										</li>
										<li><a href="__APP__/Category?essaytype=demandanalysis">需求分析</a>
										</li>
									</ul>
							</li>
							<li><a id="fe_page" href="__APP__/Category?essaytype=fe">前端 FE</a>
									<ul>
										<li><a href="__APP__/Category?essaytype=divcss">DIV+CSS</a>
										</li>
										<li><a href="__APP__/Category?essaytype=javascript">JavaScript</a>
										</li>
									</ul>
							</li>
							<li><a id="member_page" href="">成员展示</a>
								<ul>
									<li><a href="">Korbin</a>
									</li>
									<li><a href="">Katherine</a>
									</li>
								</ul>
							</li>
							<li><a id="aboutus_page" href="">关于我们</a></li>
							
							
						</ul>
					</div>
					<div id="article_add">
						<ul>
							<li><a href="__APP__/Articleadd">发表文章/作品</a></li>
						</ul>
					</div>
					<div id="login">
						<ul>
							<li><a href="__ROOT__/index.php/Profile"><?php echo ($user["username"]); ?></a></li>
							<li><a href="__ROOT__/index.php/Login/logout">退出</a></li>
							<li><a href="__ROOT__/index.php/Register">注册</a></li>
							<li><a href="__ROOT__/index.php/Login">登录</a></li>
						</ul>
					</div>
					
				</div>
			
			</div>
			<div id="container">
		<div id="container-ariticle-add">
			<div id="content-article-add">
				<h2>添加经历</h2><br/>
				<form name = "experienceForm" method="post" action="__URL__/Profile/addExperience">
					标题：<input name="essaytitle" class="title" type="text"/><br/>
					经历摘要：
					<textarea name="essayabstract" style="width:100%;height:100px;"></textarea><br/>
					经历正文：
					<textarea name="essaycontent" style="width:100%; height:700px;"></textarea>
					
					<input class="btn-submit" type="submit" value="提交"/>
				</form>
			</div>
		</div>
	</div>
</body>
</html>