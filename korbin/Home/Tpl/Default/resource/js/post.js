//post�ĵ���
  function postaddLike(obj)
	{   
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
		var likecount = obj.getElementsByClassName("praisecount")[0];
		likecount.innerHTML=xmlhttp.responseText;
		}
	  }
  
	var praisetype = document.getElementById("praisetype").value;
	var target =obj.getElementsByClassName("targetno")[0];
	var targetno=target.value;
	var targetauthor=document.getElementById("author").value;
	//alert(commenttext + ", " + commenttype + ", " + targetno);
	var result=document.getElementById("result");
    var myself = document.getElementById("myself").value;


    if("" == myself || null == myself){
	
	    result.innerHTML = "<font color=red>�ף���¼�󣬲�����Ŷ��</font>";
	    return false;
    }
	else if(targetauthor == myself){
		result.innerHTML = "<font color=red>�ף����ܶ��Լ�����Ŷ��</font>";
		return false;
	}
    else{
       
	    xmlhttp.open("POST","./PraiseAdd/likeAdd" ,true);//"./"��ʾ��ǰĿ¼����../����ʾ��һĿ¼
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&praisetype=" + praisetype + "&targetno=" + targetno + "&targetauthor=" + targetauthor + "&positive=" + 'true');
		setTimeout("result.style.display='none'",1500); 
		
	  }
 }
 

 
function postaddDislike(obj){
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
		var dislikecount = obj.getElementsByClassName("praisecount")[0];
		dislikecount.innerHTML=xmlhttp.responseText;
		}
	  }
  
	var praisetype =document.getElementById("praisetype").value;
	var target = obj.getElementsByClassName("targetno")[0]
		var targetno=target.value;
	var targetauthor=document.getElementById("author").value;
	//alert(commenttext + ", " + commenttype + ", " + targetno);
	
	
	var result=document.getElementById("result");
    var myself = document.getElementById("myself").value;
	

    if("" == myself || null == myself){
	
	    result.innerHTML = " <font color=red>�ף���¼�󣬲��ܲ�Ŷ��</font>";
	    return false;
    }
	else if(targetauthor == myself){
		result.innerHTML = "<font color=red>�ף����ܶ��Լ�����Ŷ��</font>";
		return false;
	}
    else{
	    xmlhttp.open("POST","./PraiseAdd/dislikeAdd" ,true);//"./"��ʾ��ǰĿ¼����../����ʾ��һĿ¼
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&praisetype=" + praisetype + "&targetno=" + targetno + "&targetauthor=" + targetauthor + "&positive=" + 'false');
		setTimeout("result.style.display='none'",1500); 
	  }
 }