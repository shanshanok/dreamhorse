<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台管理 - 文章管理</title>
		<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >
		<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
	</head>
	<body>
	<div id="web">
		
		<div style="background: #333333; width:100%; height:100px; text-align:center; line-height:100px;font-size:2em;color:#CCCCCC"> 后台管理</div>
		<div id="container-wrap">
		
<div id="aside-left">
	<div id="nav-aside">
		<ul id="mynav">
			
					<li><a href="__APP__/EssayM?type=Essay">文章管理</a>
					</li>
					<li><a href="__APP__/EssayM?type=Work">作品管理</a>
					</li>
					<li><a href="__APP__/EssayM?type=Experience">经历管理</a>
					</li>
					<li><a href="__APP__/UserM?type=user">用户管理</a>
					</li>
				
				   
		</ul>
	</div>
	
	
</div>
			<!--<form action="__APP__/EssayM/search" method="post">-->
			<div id="main">
		      <div id="screening">  
                    <select id="select-indus" name="selecttext" onChange="selectpost1()">
					<?php if(is_array($essays)): $i = 0; $__LIST__ = $essays;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay): $mod = ($i % 2 );++$i;?><option  > <?php echo ($essay["industry"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select> 
					
					 <select id="select-post" name="selecttext1" onChange="selectdouble1()">
					<?php if(is_array($essays1)): $i = 0; $__LIST__ = $essays1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay1): $mod = ($i % 2 );++$i;?><option  > <?php echo ($essay1["postname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					
						
						<span>
							<input id="searchtitle" type="text" name="searchtext">
							<input id="searchbu" type="button" value="搜索" onclick="searchuser()"> 
						</span>
			  </div>
			   <div id="essay-list">
		<table border="1" id="essay-table"> 
			  	 <div id="essay-list-title">
			  <tr class="table-head">
			   <th class="userno">编号</th>
			   <th class="username">用户名</th>
			   <th class="email">邮箱</th>
			   
			   <th class="motto">座右铭</th>
			   <th class="organiaztion">组织</th>
			   <th class="industry">行业</th>
			   <th  class="postname" >职位</th>
			   <th class="reputation"> 好评</th>
			    <th class="vitality"> 活跃度</th>
			     <th class="doo"> 操作</th>
			</tr>
			   </div>
			 
			  <?php if(is_array($essays2)): $i = 0; $__LIST__ = $essays2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay2): $mod = ($i % 2 );++$i;?><div id="essay-list-content">
			   	<tr class="table-unit">
			  <td class="userno"><?php echo ($essay2["userno"]); ?></td>
			   <td class="username"><a href="__APP__/EssayDisplay?essayno=<?php echo ($essay2["userno"]); ?>"><?php echo ($essay2["username"]); ?></a></td>
			   <td class="email"><?php echo ($essay2["email"]); ?></td>
			  

			   <td class="motto"><?php echo ($essay2["motto"]); ?></td>
			   <td class="organiaztion"><?php echo ($essay2["organiaztion"]); ?></td>
			   <td class="industry"><?php echo ($essay2["industry"]); ?></td>
			   <td class="postname"><?php echo ($essay2["pastname"]); ?></td>
			   <td  class="reputation" ><?php echo ($essay2["reputation"]); ?></td>
			   <td  class="vitality" ><?php echo ($essay2["vitality"]); ?></td>
               <td class="docheck"> <a href=" __APP__/UserM/userDelete?id=<?php echo ($essay2["userno"]); ?> & username=<?php echo ($essay2["username"]); ?>" >删除</a></td>
			   
			</tr>
			   </div><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>	    
			  </div>
			
			</div>
			
			</form>
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
								<p>Korbin Zhao</p>
								<div class="footer-content">
									<a class="pic-link-big" href="#"></a>
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