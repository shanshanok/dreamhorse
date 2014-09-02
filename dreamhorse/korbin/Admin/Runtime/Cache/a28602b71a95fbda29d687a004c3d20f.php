<?php if (!defined('THINK_PATH')) exit();?>           <div id="essay-list">
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