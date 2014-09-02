//此处将navlist放在hiddenPart，对于Profile和Members页面，即使navlist因为找不到左侧导航栏不能执行，也不会影响hiddenPart的执行
window.onload = function(){currentPageColor();  hiddenPart(); navlist(); showEditLink(); showCommentDeleteLink(); showEditOrAdd(); currentList(); tagFontSize();messagenum(); slideShow();};


//页面上显示的消息条数
var messagenum = function (){
	var num=document.getElementById("num");

	if(num){
		num = num.value;
		var myself = document.getElementById("myself").value;
		if(null == myself || "" == myself || num<1){
			document.getElementById("message-num").style.display="none";
		}
		 else 
			{document.getElementById("message-num").style.display="block";}
		}
	}
	

//消息提醒
 function showmessage()
{
	document.getElementById("message-detail").style.display="block";
}


var currentPageColor = function() 
{

//导航菜单中随当前页面变化而改变Tag的颜色
	var currentPage = document.getElementById("currentPage").value;
	var currentTag = document.getElementById(currentPage); 
	currentTag.style.background = "#FF7F00";

}

var navlist = function(){

//左侧导航菜单动态显示效果
	var navRoot = document.getElementById("mynav");//找到菜单根目录
	
	if(null != navRoot && '' != navRoot){
		for (i=0; i<navRoot.childNodes.length; i++) 
		{
			node = navRoot.childNodes[i];
			if (node.nodeName=="LI") {
				node.onmouseover=function() {
				this.className = "over"; }
				 node.onmouseout=function() {
				this.className=this.className.replace("over", ""); }
			}
		 }
	}
		
}

var hiddenPart = function(){
	var myself = document.getElementById("myself").value;
	var partLogout = document.getElementById("part-logout");
	var partLogin = document.getElementById("part-login");

	if(null == myself || "" == myself){
		partLogout.style.display = "none";
		partLogin.style.display = "block";
	}
	else{
		partLogout.style.display = "block";
		partLogin.style.display = "none";
	}
}

window.onscroll = function(){
	var t = document.documentElement.scrollTop || document.body.scrollTop;
	var back2top = document.getElementById("back2top");
	t > 300 ? back2top.style.display = "block" : back2top.style.display = "none";	
}

var clearText = function(obj){
	var keyword = obj.value;
	keyword = keyword.trim();
	if("输入行业、岗位、作者名、关键词试试" == keyword){
		obj.value = "";
	}
	
}

var showText = function(obj){
	var keyword = obj.value;
	keyword = keyword.trim();
	if("" == keyword){
		obj.value = "输入行业、岗位、作者名、关键词试试";
	}
	
}


var showEditLink = function(){
	
	var editLinks = document.getElementsByName("edit");
	
	try{
		var author = document.getElementById("author").value;
	}
	catch(err){
		author = '';
	}
	

	var myself = document.getElementById("myself").value;

	if(null != myself && '' != myself && null != author && '' != author && myself == author){
		for(var i = 0; i < editLinks.length; i++){
			editLinks[i].style.display = "block";
		}
	}

}

var showCommentDeleteLink = function(){
	var deleteLinks = document.getElementsByName('delete');
	var commentsAuthors = document.getElementsByName('commentauthor');
	var myself = document.getElementById('myself').value;

	for(var i = 0; i < deleteLinks.length; i++){
		if(null != myself && '' != myself && null != commentsAuthors[i].value && '' != commentsAuthors[i].value && myself == commentsAuthors[i].value){
			deleteLinks[i].style.display = "inline";
		}
	}

}

//添加评论
 function addComment(){
  
   var commenttext = document.getElementById("commenttext").value;
	var commenttype = document.getElementById("commenttype").value;
	var targetno = document.getElementById("targetno").value;

	//alert(commenttext + ", " + commenttype + ", " + targetno);
	
	var result=document.getElementById("result");
    var myself = document.getElementById("myself").value;
	var commenttext = document.getElementById("commenttext").value;
    var addonecomment = document.getElementById("addonecomment");
	var display = document.getElementById("insert-new-comment");	
	//var essayno = document.getElementById("essayno").value;
	var motto = document.getElementById("motto").value;
	
    var myDate = new Date();
	//time.innerHTML=myDate;

    if("" == myself || null == myself){
	
	    result.innerHTML = " <font color=red>亲，登录后，才能发表评论哦！</font>";
	    return false;
    }
    else if("" == commenttext || null == commenttext){
        result.innerHTML = "<font color=red>您还没填写评论内容！</font>";	
		return false;
    }
    else{
        result.innerHTML="<font color=red>正在发送数据...</font>";


		

		setTimeout("result.style.display='none'",1500); 
		
		

		var existNode = document.getElementById("one-comment-display");
		var clonedNodes = existNode.cloneNode(true);
		clonedNodes.setAttribute("id" ,"new-comment");
		clonedNodes.style.display = "block";

		clonedNodes.getElementsByClassName("username")[0].innerHTML = myself;
		clonedNodes.getElementsByClassName("motto")[0].innerHTML = motto;
		//clonedNodes.getElementsByClassName("line-two")[0].innerHTML = xmlhttp.responseText;
		clonedNodes.getElementsByClassName("time")[0].innerHTML = new Date().toLocaleString();
		clonedNodes.getElementsByClassName("potrait-middlepic")[0].src = "/Korbin/Home/Uploads/" + myself + "_middle.png";

		

    }
   
   
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
		clonedNodes.getElementsByClassName("line-two")[0].innerHTML = xmlhttp.responseText;
		}
	  }
	
	xmlhttp.open("POST","./Comment/commentAdd" ,true);//"./"表示当前目录，“../”表示上一目录
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send("commenttext=" + commenttext + "&commenttype=" + commenttype + "&targetno=" + targetno);

	insertAfter(clonedNodes,display);
	setTimeout("document.getElementById('commenttext').value='' ",1500); 
	
 }

function insertAfter(newEl, targetEl)
{
    var parentEl = targetEl.parentNode;
            
     if(parentEl.lastChild == targetEl)
     {
           parentEl.appendChild(newEl);
      }else
      {
           parentEl.insertBefore(newEl,targetEl.nextSibling);
       }            
}


	function insertText(obj,str) {
		if (document.selection) {
			var sel = document.selection.createRange();
			sel.text = str;
		} 
		else if (typeof obj.selectionStart === 'number' && typeof obj.selectionEnd === 'number') {
			var startPos = obj.selectionStart,
				endPos = obj.selectionEnd,
				cursorPos = startPos,
				tmpStr = obj.value;
				obj.value = tmpStr.substring(0, startPos) + str + tmpStr.substring(endPos, tmpStr.length);
				cursorPos += str.length;
				obj.selectionStart = obj.selectionEnd = cursorPos;
		} 
		else {
			obj.value += str;
		}
	}
 
	//回复评论 
	 var recomment = function(){
		
		var commenttext = document.getElementById("commenttext");
		
		var str = document.getElementById("myself").value + "回复"+ document.getElementById("commentauthor").value+": ";
		commenttext.focus();
		commenttext.style.borderColor = "#66FFFF";
		insertText(commenttext, str);
	
     }


	 //右侧写入部分
var currentList=function(){
	var a=false;
	var b=false;
	var c=false;
	var A=document.getElementById("tab1");
	var B=document.getElementById("tab2");
	var C=document.getElementById("tab3");
	var AList=document.getElementsByClassName("new-article")[0];
	var BList=document.getElementsByClassName("new-article")[1];
	var CList=document.getElementsByClassName("new-article")[2];
	
	if(null != A && '' != A && null != B && '' != B && null != C && '' != C){
		A.onmouseover=function(){ a=true; A.className="current"; B.className=""; C.className="";AList.style.display="block";BList.style.display="none";CList.style.display="none";}
		B.onmouseover=function(){ b=true; B.className="current"; A.className=""; C.className="";AList.style.display="none";BList.style.display="block";CList.style.display="none";}
		C.onmouseover=function(){ c=true; C.className="current"; B.className=""; A.className="";AList.style.display="none";BList.style.display="none";CList.style.display="block";}
		A.onmouseout=function(){
		   a=false;
		if(b==false && c==false)
			{ A.className="current";}
		else{ A.className="";}

		}
		B.onmouseout=function(){
		b=false;
		if(a== false&&c==false)
			{ B.className="current";}
		else{ B.className="";}

		}
		C.onmouseout=function(){
		c=false;
		if(a==false && b==false)
			{ C.className="current";}
		else{ C.className="";}


	}
	
	}
	
	

		
		
}

//决定tag标签中各标签字体大小
function tagFontSize(){
	
	
	
}

//添加顶踩
 $(function(){ 
    $("#likecount").click(function(){ 
        var add1=$("#add1");  
        add1.fadeIn(300);
        add1.animate({
		
        left:'10px',
        top:'-10px',
		opacity:0.4,
       /* height:'+=150px',*/
        /*width:'+=150px',*/
       fontSize:'3em'
        });
        add1.fadeOut(300);
        /*add1.style.display='none';*/
		
    }); 
});
 
 
 //赞，踩功能 
 $(function(){ 
    $("#dislikecount").click(function(){ 
       
        var add2=$("#add2");  
        add2.fadeIn(300);
        add2.animate({
        left:'10px',
        top:'-10px',
		opacity:0.4,
       /* height:'+=150px',*/
        /*width:'+=150px',*/
       fontSize:'3em'
        });
        add2.fadeOut(300);
        /*add1.style.display='none';*/
		
    }); 
});

 function addLike(){
       
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
		var likecount = document.getElementById("likecount");
		likecount.innerHTML=xmlhttp.responseText;
		}
	  }
  
	var praisetype = document.getElementById("praisetype").value;
	var targetno = document.getElementById("targetno").value;
	var targetauthor=document.getElementById("author").value;
	//alert(commenttext + ", " + commenttype + ", " + targetno);
	
	
	var result=document.getElementById("result");
    var myself = document.getElementById("myself").value;


    if("" == myself || null == myself){
	
	    result.innerHTML = "<font color=red>亲，登录后，才能赞哦！</font>";
	    return false;
    }
	else if(targetauthor == myself){
		result.innerHTML = "<font color=red>亲，不能对自己评价哦！</font>";
		return false;
	}
    else{
       
	    xmlhttp.open("POST","./PraiseAdd/likeAdd" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&praisetype=" + praisetype + "&targetno=" + targetno + "&targetauthor=" + targetauthor + "&positive=" + 'true');

		setTimeout("result.style.display='none'",1500); 
		
	  }
 }

 function addDislike(){
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
		var dislikecount = document.getElementById("dislikecount");
		dislikecount.innerHTML=xmlhttp.responseText;
		}
	  }
  
	var praisetype = document.getElementById("praisetype").value;
	var targetno = document.getElementById("targetno").value;
	var targetauthor=document.getElementById("author").value;
	//alert(commenttext + ", " + commenttype + ", " + targetno);
	
	
	var result=document.getElementById("result");
    var myself = document.getElementById("myself").value;
	

    if("" == myself || null == myself){
	
	    result.innerHTML = " <font color=red>亲，登录后，才能踩哦！</font>";
	    return false;
    }
	else if(targetauthor == myself){
		result.innerHTML = "<font color=red>亲，不能对自己评价哦！</font>";
		return false;
	}
    else{
       
	   xmlhttp.open("POST","./PraiseAdd/dislikeAdd" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&praisetype=" + praisetype + "&targetno=" + targetno + "&targetauthor=" + targetauthor + "&positive=" + 'false');

		setTimeout("result.style.display='none'",1500); 
		
	  }
 }
 //数组比较大小
Array.prototype.contains=function(obj){
var i=this.length;
while(i--){
if(this[i]==obj)
	{return true;
     }
}
return false;
}

//职位区别显示
function showEditOrAdd(){
		var industryList = document.getElementById("industry-list");
	if(null != industryList){
		var nameSS=new Array();
		var names=industryList.getElementsByClassName("names");

		 for ( var k=0;k<names.length ;k++ )
		 {
		   nameSS[k]=names[k].value;
		 }
		
		var lis=industryList.getElementsByTagName("p");
		for(var z=0;z<lis.length;z++)
		{   
			if(nameSS.contains(lis[z].innerHTML))
			 {   lis[z].style.color="#6699CC";
					 lis[z].title="";
			 }
			  else
			{     lis[z].title="待编辑"; }
		}

	}

var postnames=document.getElementsByClassName("namelist");
for(var i=0;i<postnames.length;i++)
{
   postnames[i].onmouseover=function()
	 {
	 this.childNodes[1].style.display="block";
	
	 if(nameSS.contains(this.childNodes[0].innerHTML))
		 {this.childNodes[0].onclick=function(){ window.location.href="./CareerWiki?postname="+this.innerHTML;}
		 this.childNodes[1].childNodes[0].innerHTML="see";
	      this.childNodes[1].childNodes[0].href="./CareerWiki?postname="+this.childNodes[0].innerHTML;
		 }
	 else
		 {      this.childNodes[1].childNodes[0].innerHTML="add";
	            this.childNodes[1].childNodes[0].href="./PostAdd?postname="+this.childNodes[0].innerHTML;     
	       }
    }
      postnames[i].onmouseout=function()
	 { this.childNodes[1].style.display="none";}

} 

}


//图书推荐动态效果
$(document).ready(function(){
	$('#c2').bxCarousel({
		display_num: 1, 
		move: 1, 
		auto: true, 
		controls: true,
		margin: 0,
		speed:300,
		auto_interval:3000,
		auto_hover: true,
        prev_text:'<',
		next_text:'>'
	});
});

/*幻灯片动态效果*/
function slideShow(){

	$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
}
