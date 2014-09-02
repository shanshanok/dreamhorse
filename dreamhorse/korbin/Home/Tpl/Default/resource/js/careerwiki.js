window.onload=function(){eidtornot();showadd();}
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
var nameSS=new Array();
var names=document.getElementsByClassName("names");
var nameSS=new Array();
 for ( var k=0;k<names.length ;k++ )
 {
   nameSS[k]=names[k].value;
 }

function eidtornot(){


var lis=document.getElementsByTagName("p");
for(var z=0;z<lis.length;z++)
{   
	if(nameSS.contains(lis[z].innerHTML))
	     {   lis[z].style.color="#6699CC";
	         lis[z].title="aready edited";
		  }
		  else
	     {     lis[z].title="forediting"; }
}

}

//职位区别显示
function showadd (){
var postnames=document.getElementsByClassName("namelist");
for(var i=0;i<postnames.length;i++)
{
   postnames[i].onmouseover=function()
	 {
	 this.childNodes[1].style.display="block";
	
	 if(nameSS.contains(this.childNodes[0].innerHTML))
		 {this.childNodes[1].childNodes[0].innerHTML="edit";
	      this.childNodes[1].childNodes[0].href="./CareerWiki/edit?postname="+this.childNodes[0].innerHTML;}
	 else
		 {      this.childNodes[1].childNodes[0].innerHTML="add";
	            this.childNodes[1].childNodes[0].href="./PostAdd";     
	       }
    }
    postnames[i].onmouseout=function()
	 { this.childNodes[1].style.display="none";}

} 

}