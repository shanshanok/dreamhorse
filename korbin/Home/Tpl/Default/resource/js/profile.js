$(document).ready(function(){
    
	//FloatDetermine();
	addfocus();
	currentProfilePage();
	//alert('HELLO WORLD!');
	hideTimelineAdd();

	hiddenPart();

	changeHref();

	$('#timeline-inner').masonry({itemSelector : '.timeline-content'});
	ArrowPoints();
	

});

function changeHref(){
	var currentMember = document.getElementById("currentMember").value;
	var myself = document.getElementById("myself").value;
	var aPotrait = document.getElementById("a-potrait");

	if(  null != aPotrait && (!(null != myself && "" != myself) || currentMember != myself )){
		aPotrait.href = "";//修改a标签href的方法
	}
}

//时间轴中线上的箭头效果
function ArrowPoints(){
	var timelineContent = $("#timeline").find(".inner");
	
	//alert(timelineContent);
	
	$.each(timelineContent, function(){
		var leftPos = $(this).parent(".timeline-content").css("left");

		//alert(leftPos);
		//alert(value);

		if(leftPos == "0px"){
			html = "<span class='rightCorner'></span>";
			$(this).prepend(html);
		}
		else{
			html = "<span class='leftCorner'></span>";
			$(this).prepend(html);
		}
	});

	
}

function showEdit(obj){
	var edit = obj.getElementsByClassName("edit")[0];
	var currentMember = document.getElementById("currentMember").value;
	var myself = document.getElementById("myself").value;

	if(currentMember == myself){
		edit.style.display = "block";
	}
	

}

function hideEdit(obj){
	var edit = obj.getElementsByClassName("edit")[0];
	var currentMember = document.getElementById("currentMember").value;
	var myself = document.getElementById("myself").value;

	if(currentMember == myself){
		edit.style.display = "none";
	}
}

//判断浏览当前Profile页面的人是否是本人，如果不是本人则隐藏“添加时间轴内容”的功能
function hideTimelineAdd(){
	var timelineAdd = document.getElementById("add-timeline");
	var currentMember = document.getElementById("currentMember").value;
	var myself = document.getElementById("myself").value;


	if(currentMember != myself && null != timelineAdd){
		timelineAdd.style.display = "none";
	}
	else if(currentMember != myself && null != timelineAdd){
		timelineAdd.style.display = "block";
	}
}
// 添加
function addfocus(){
	var currentMember = document.getElementById("currentMember").value;
	var myself = document.getElementById("myself").value;
	var focusButton=document.getElementsByClassName('addfocus')[0];
	if(currentMember!=myself){
		focusButton.style.display="block";
	}else{
		focusButton.style.display="none";
	}
	var relatedMember=document.getElementById('relatedMember').value;
	if(relatedMember==currentMember){
		focusButton.innerHTML="已关注";
		focusButton.style.background='#999999';
	}
	focusButton.onclick=function(){
		if(myself==null||myself==""){
			var tip=document.getElementById('tip');
			// alert(tip);
			tip.innerHTML="<font color=red>亲，登录后才能加关注哦！</font>"
		}else{
			  this.innerHTML="已关注";
			  focusButton.style.background='#999999';
			  var xmlhttp;
			  if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
			     xmlhttp=new XMLHttpRequest();
			  }else{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function(){
			    if (xmlhttp.readyState==4 && xmlhttp.status==200){
					var response=eval(xmlhttp.responseText);
					
					/*for(var i=0;i<response.length;i++){
					alert(response);
					var membersfocus=document.getElementById('membersfocus');
					    response.forEach(function(item,index,array){
						 console.log(item);
						var focusname=item[focusname];
						var div=document.createElement('div');
						div.className='focusmember';
						var a=document.createElement('a');
						a.href="__APP__/Profile?member="+focusname;
						a.target="blank";
						var img=document.createElement('img');
						img.title=focusname;
						img.src="__ROOT__/Home/Uploads/"+focusname+"_middle.png";
						var span=document.createElement('span');
						span.title=focusname;
						span.appendChild(document.createTextNode(focusname));
						a.appendChild(img);
						a.appendChild(span);
						div.appendChild(a);
						membersfocus.insertBefore(div,membersfocus.firstChild);

					 });*/
					var focushead=document.getElementById('focushead');
					focushead.innerHTML="我的关注("+xmlhttp.responseText+")";
			    }
		      }; 
			xmlhttp.open("GET","./Profile/addFocusMembers?targetname="+currentMember,true);//"./"表示当前目录，“../”表示上一目录
			xmlhttp.send(null);
		}
	};
	if(!myself){
		var focushead=document.getElementById('focushead');
		focushead.onclick=function(event){
			var event=event||window.event;
			event.preventDefault()||event.returnValue==false;
			this.innerHTML="<font color='red'>亲，登录后才能查看关注哦！</font>"
		};
	}
		
}

function editContent(obj){
	
	var cardInfo = obj.parentNode;
	var editContent = cardInfo.getElementsByClassName("edit-content")[0];
	
	
	editContent.contentEditable = !editContent.isContentEditable;
	
	if(editContent.isContentEditable == true){
		obj.getElementsByClassName("edit-inner")[1].innerHTML = "完成";
		//obj.getElementsByClassName("edit-inner")[0].style.background-position = "bottom"; //为什么会显示ReferenceError: invalid assignment left-hand side？？？
		editContent.style.border = "1px solid rgb(204, 204, 204)";
		editContent.style.background = "white";
	}
	else{
		obj.getElementsByClassName("edit-inner")[1].innerHTML = "修改";
		//obj.getElementsByClassName("edit-inner")[0].className = "edit-inner .img-edit-inner";	
		editContent.style.border = "0px";
		editContent.style.background = "none";
		
		modifyInfo(editContent);		
	}
}

function modifyInfo(editContent)
{ 
	var info = editContent.innerHTML;
	var name = editContent.id;
	// alert(info);
	//alert(name);
	
	var xmlhttp;
	
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			editContent.innerHTML=xmlhttp.responseText;
		}
	  } 
	xmlhttp.open("GET","./Profile/modifyInfo?name=" + name + "&info=" + info,true);//"./"表示当前目录，“../”表示上一目录
	xmlhttp.send(null);
}
		


function currentProfilePage(){
	try{
		var currentProfilePage = document.getElementById("currentProfilePage").value;
		var currentProfileNav = document.getElementById(currentProfilePage);
	}
	catch(err){
		currentProfileNav = '';
	}

	//alert(currentProfileNav.style);
	if('' != currentProfileNav && null != currentProfileNav){
		currentProfileNav.style.background = "rgb(51, 51, 51)";
		currentProfileNav.style.color = "#FFFFFF";
	}
	
}


