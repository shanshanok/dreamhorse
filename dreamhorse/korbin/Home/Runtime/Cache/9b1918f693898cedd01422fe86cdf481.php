<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加作品</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/articleAdd.css"/>

 <!-- Place inside the <head> of your HTML -->
		<script type="text/javascript" src="__PUBLIC__/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		tinymce.init({
			selector: "#essay-abstract",
			
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
							<li><a id="pm_page" href="__APP__/Category?essaytype=pm">原创文章</a></li>
							<li><a id="fe_page" href="__APP__/Category?essaytype=fe">个人作品</a></li>
							<li><a id="member_page" href="__APP__/Members">追梦者</a></li>
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
						<input type="hidden" id="loginValue" value="<?php echo ($myself); ?>"/>
					</div>
					
				</div>
			
			</div>
			<div id="container">
		<input type="hidden" id="currentPage" value="<?php echo ($current_page); ?>"/> 
		<div id="container-wrap">
			<div id="container-ariticle-add">
				<div id="content-article-add">
					<h2>添加作品</h2><br/>
					<form name = "articleForm" method="post" action="__URL__/Articleadd">
						<span class="headline">标题：</span><input name="essaytitle" class="essay-title" type="text"/><br/>
						<span class="headline">类型：</span><select name="essaytype">
								<option value="divcss">产品文档</option>
								<option value="javascript">产品原型</option>
								<option value="productanalysis">前端练习</option>
							</select><br/>
						<span class="headline">作品说明：</span>
						<div ><textarea id="essay-abstract" name="essayabstract" style="width:100%;height:100px;"></textarea></div>
						<span class="headline">上传作品：</span>&nbsp;&nbsp;
						<input type="file" /><br/>
						
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
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
									<a class="pic-link-small" href="__APP__/Profile"><img src="__TMPL__/resource/images/person-default-middle.png"/></a>
								</div>
							</div>
							<div class="inner-block">
								<p>大家在关注</p>
								
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


	
	<script type="text/javascript" src="__TMPL__/resource/js/index.js"></script> 
</body>
</html>