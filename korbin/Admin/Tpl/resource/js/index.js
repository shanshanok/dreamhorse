window.onload = function(){ showEditLink(); };
function selectEssays()
{    
	
	var selectlist = document.getElementById("essay-list"); 
    selectlist.style.display="block";
   

   
}
function selectpost(){
	
	var xmlhttp;
	var xmlhttp1;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  xmlhttp1=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		var select = document.getElementById("select-post");
		select.innerHTML=xmlhttp.responseText;
		//var selectdis = document.getElementById("essay-list");
		//selectdis.innerHTML=xmlhttp.responseText;
		}
	  }
	  xmlhttp1.onreadystatechange=function()
	  {
	  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var selectdis = document.getElementById("essay-list");
		selectdis.innerHTML=xmlhttp1.responseText;
		}
	  }
      var selecttext=document.getElementById("select-indus").value;
         
    //alert(selecttext);

   
	    xmlhttp.open("POST","./EssayM/selectEssays" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&selecttext=" + selecttext);
        xmlhttp1.open("POST","./EssayM/displayEssays" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp1.send("&selecttext=" + selecttext);
		setTimeout("result.style.display='none'",1500); 
		
	  
}
function selectdouble(){
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
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var selectdis = document.getElementById("essay-list");
		selectdis.innerHTML=xmlhttp.responseText;
		}
	  }
      var selecttext=document.getElementById("select-indus").value;
      var   selecttext1=document.getElementById("select-post").value;

   
	    xmlhttp.open("POST","./EssayM/displaydouble" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&selecttext=" + selecttext+"&selecttext1=" + selecttext1);
		//xmlhttp.send("&selecttext1=" + selecttext1);
		setTimeout("result.style.display='none'",1500); 
}






var showEditLink = function(){
	
	var editLinks = document.getElementsByName("edit");
	
	try{
		var author = document.getElementById("author").value;
	}
	catch(err){
		author = '';
	}
	

	

	//if(null != myself && '' != myself && null != author && '' != author && myself == author){
		for(var i = 0; i < editLinks.length; i++){
			editLinks[i].style.display = "block";
		}
	//}

}

$('#datetimepicker').datetimepicker();
$('#datetimepicker1').datetimepicker();

function searchtitle(){
	
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
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var searchlist = document.getElementById("essay-list");
		searchlist.innerHTML=xmlhttp.responseText;
		}
	  }
      var searchtext=document.getElementById("searchtitle").value;
            //alert(searchtext);
     // var   searchtext1=document.getElementById("select-post").value;

   
	    xmlhttp.open("POST","./EssayM/search" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&searchtext=" + searchtext);
		//xmlhttp.send("&selecttext1=" + selecttext1);
		setTimeout("result.style.display='none'",1500); 
}

 function selecttime(){
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
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var searchlist = document.getElementById("essay-list");
		searchlist.innerHTML=xmlhttp.responseText;
		}
	  }
      var selecttime=document.getElementById("datetimepicker").value;
     
      var selecttime1=document.getElementById("datetimepicker1").value;
        
            //alert(searchtext);
     // var   searchtext1=document.getElementById("select-post").value;

   
	    xmlhttp.open("POST","./EssayM/searchtime" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&selecttime=" + selecttime + "&selecttime1=" + selecttime1);

		//xmlhttp.send("&selecttext1=" + selecttext1);
		setTimeout("result.style.display='none'",1500); 
 }

 function selectpost1(){
	
	var xmlhttp;
	var xmlhttp1;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  xmlhttp1=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		var select = document.getElementById("select-post");
		select.innerHTML=xmlhttp.responseText;
		//var selectdis = document.getElementById("essay-list");
		//selectdis.innerHTML=xmlhttp.responseText;
		}
	  }
	  xmlhttp1.onreadystatechange=function()
	  {
	  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
		{
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var selectdis = document.getElementById("essay-list");
		selectdis.innerHTML=xmlhttp1.responseText;
		}
	  }
      var selecttext=document.getElementById("select-indus").value;
         
    //alert(selecttext);

   
	    xmlhttp.open("POST","./UserM/selectusers" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&selecttext=" + selecttext);
        xmlhttp1.open("POST","./UserM/displayusers" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp1.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp1.send("&selecttext=" + selecttext);
		setTimeout("result.style.display='none'",1500); 
		
	  
}
function selectdouble1(){
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
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var selectdis = document.getElementById("essay-list");
		selectdis.innerHTML=xmlhttp.responseText;
		}
	  }
      var selecttext=document.getElementById("select-indus").value;
      var   selecttext1=document.getElementById("select-post").value;

   
	    xmlhttp.open("POST","./UserM/displaydouble" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&selecttext=" + selecttext+"&selecttext1=" + selecttext1);
		//xmlhttp.send("&selecttext1=" + selecttext1);
		setTimeout("result.style.display='none'",1500); 
}

function searchuser(){
	
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
		//var select = document.getElementById("select-post");
		//select.innerHTML=xmlhttp.responseText;
		var searchlist = document.getElementById("essay-list");
		searchlist.innerHTML=xmlhttp.responseText;
		}
	  }
      var searchtext=document.getElementById("searchtitle").value;
            //alert(searchtext);
     // var   searchtext1=document.getElementById("select-post").value;

   
	    xmlhttp.open("POST","./UserM/search" ,true);//"./"表示当前目录，“../”表示上一目录
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("&searchtext=" + searchtext);
		//xmlhttp.send("&selecttext1=" + selecttext1);
		setTimeout("result.style.display='none'",1500); 
}
