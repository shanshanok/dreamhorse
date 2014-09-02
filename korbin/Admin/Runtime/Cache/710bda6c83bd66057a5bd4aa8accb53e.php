<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>后台管理 - 文章管理</title>
		<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/index.css"/>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/page.css" / >
		<link rel="shortcut icon" type="image/x-icon" href="__TMPL__/resource/images/dreamcatcher.ico" />
		<link rel="stylesheet" type="text/css" href="__TMPL__/resource/css/jquery.datetimepicker.css"/ >
        <script src="__TMPL__/resource/js/jquery.js"></script>
        <script src="__TMPL__/resource/js/jquery.datetimepicker.js"></script>
	</head>
	<body>
	<div id="web">
		
		<div style="background: #333333; width:100%; height:100px; color:#CCCCCC; text-align:center; line-height:100px;font-size:2em"> 后台管理</div>
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
                    <select id="select-indus" name="selecttext" onChange="selectpost()">
					<?php if(is_array($essays)): $i = 0; $__LIST__ = $essays;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay): $mod = ($i % 2 );++$i;?><option  > <?php echo ($essay["industry"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select> 
					
					 <select id="select-post" name="selecttext1" onChange="selectdouble()">
					<?php if(is_array($essays1)): $i = 0; $__LIST__ = $essays1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay1): $mod = ($i % 2 );++$i;?><option  > <?php echo ($essay1["postname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
					
						<span>
							<i >时间</i>
					<!--<input name="date" type="text" id="date" onfocus="setday(this)">-->
					
					<input id="datetimepicker" type="text" >
			              <i id="zhi">至</i>
			         <input id="datetimepicker1" type="text" ontextchanging="selecttime(); ">  
			         <input class="button" type="button" value="搜索" onclick="selecttime();">    
						</span>
						<span>
							<input id="searchtitle" type="text" name="searchtext">
							<input class="button" id="searchbu" type="button" value="搜索" onclick="searchtitle()"> 
						</span>
			  </div>
			             <div id="essay-list">
			  <table  border="1" id="essay-table">  
			  	<div id="essay-list-title">
			 <tr class="table-head">
			   <th class="essayno">编号</th>
			   <th class="essaytitle">标题</th>
			   <th class="essayindustry">行业</th>
			   <th class="essaypostname">职位</th>
			   <th class="essayauthor">作者</th>
			   <th class="essaytime">时间</th>
			   <th  class="checked" >状态</th>
			   <th class="do"> 操作</th>
			 </tr>
			   </div>
			 
			  <?php if(is_array($essays2)): $i = 0; $__LIST__ = $essays2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay2): $mod = ($i % 2 );++$i;?><div id="essay-list-content">
			   	<tr class="table-unit">
			  <td class="essayno"><?php echo ($essay2["id"]); ?></td>
			   <td class="essaytitle"><a href="__APP__/EssayDisplay?essayno=<?php echo ($essay2["id"]); ?>"><?php echo ($essay2["title"]); ?></a></td>
			   <td class="essayindustry"><?php echo ($essay2["industry"]); ?></td>
			   <td class="essaypostname"><?php echo ($essay2["postname"]); ?></td>
			   <td class="essayauthor"><?php echo ($essay2["author"]); ?></td>
			   <td class="essaytime"><?php echo ($essay2["addtime"]); ?></td>
			   <td  class="checked" ><?php echo ($essay2["checked"]); ?></td>
			   <td class="docheck"> <a href=" __APP__/Essay?id=<?php echo ($essay2["id"]); ?>" >审核</a></td>
               <td class="docheck"> <a href=" __APP__/EssayEdit?essayno=<?php echo ($essay2["id"]); ?>" >编辑</a></td>
               <td class="docheck"> <a href=" __APP__/EssayEdit/essayDelete?id=<?php echo ($essay2["id"]); ?>" >删除</a></td>
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