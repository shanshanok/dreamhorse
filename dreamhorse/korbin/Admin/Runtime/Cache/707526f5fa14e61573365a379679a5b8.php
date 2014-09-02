<?php if (!defined('THINK_PATH')) exit();?> <div id="essay-list">
			   
			  	 <div id="essay-list-title">
			   <p class="essayno">编号</p>
			   <p class="essaytitle">标题</a></p>
			   <p class="essayindustry">行业</p>
			   <p class="essaypostname">职位</p>
			   <p class="essayauthor">作者</p>
			   <p class="essaytime">时间</p>
			   <p  class="checked" >状态</p>
			   <p class="do"> 操作</a></p>
			
			   </div>
			 
			  <?php if(is_array($essays2)): $i = 0; $__LIST__ = $essays2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$essay2): $mod = ($i % 2 );++$i;?><div id="essay-list-content">
			  <p class="essayno"><?php echo ($essay2["userno"]); ?></p>
			   <p class="essaytitle"><a href="__APP__/EssayDisplay?essayno=<?php echo ($essay2["id"]); ?>"><?php echo ($essay2["username"]); ?></a></p>
			   <p class="essayindustry"><?php echo ($essay2["email"]); ?></p>
			   <p class="essaypostname"><?php echo ($essay2["password"]); ?></p>
			   <p class="essayauthor"><?php echo ($essay2["motto"]); ?></p>
			   <p class="essaytime"><?php echo ($essay2["organization"]); ?></p>
			   <p  class="checked" ><?php echo ($essay2["authority"]); ?></p>
               <p class="docheck"> <a href=" __APP__/UserM/userDelete?id=<?php echo ($essay2["id"]); ?> & username=<?php echo ($essay2["username"]); ?>" >删除</a></p>
			   
			
			   </div><?php endforeach; endif; else: echo "" ;endif; ?>
			  
			  </div>