<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>发表文章</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<div id="web">
		<div id="bghead">
			<div id="header">
				<div id="logo"></div>
				<div id="nav" class="nav">
					<ul>
						<li><a href="__APP__">首页</a></li>
						<li><a href="__APP__/category?essaytype=divcss">产品 PM</a></li>
						<li><a href="__APP__/category?essaytype=javascript">前端 FE</a></li>
						<li><a href="">成员展示</a></li>
						<li><a href="">关于我们</a></li>
						
						
					</ul>
				</div>
				<div id="article_add">
					<ul>
						<li><a href="__APP__/Articleadd">发表文章</a></li>
					</ul>
				</div>
				<div id="login">
					<ul>
						<li><a href="__ROOT__/admin.php/register">注册</a></li>
						<li><a href="__ROOT__/admin.php/login">登录</a></li>
					</ul>
				</div>
				
			</div>
		</div>
		<div id="container">
			<div id="content">
				<h2>发表文章</h2><br/>
				<form name = "articleForm" method="post" action="__URL__/Articleadd">
					标题：<input name="essaytitle" class="title" type="text"/><br/>
					类型：<select name="essaytype">
							<option value="divcss">DIV+CSS</option>
							<option value="javascript">JavaScript</option>
							<option value="productanalysis">产品分析</option>
							<option value="industryobservation">行业观察</option>
							<option value="demandanalysis">需求分析</option>
						</select><br/>
					文章摘要：
					<textarea name="essayabstract" style="width:100%;height:100px;"></textarea><br/>
					文章正文：
					<textarea name="essaycontent" style="width:100%; height:700px;"></textarea>
					
					<input type="submit" value="提交"/>
				</form>
			</div>
		</div>
		
		
	</div>
</body>
</html>