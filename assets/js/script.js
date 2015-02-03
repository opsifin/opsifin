// JavaScript Document
var obj = new Object();
obj.popup = null;
mainWindow = window.opener;

function elm(obj){ return document.getElementById(obj);}
/*
function cari(url) {
	var left = (screen.width/2)-(1024/2);
  	var top = (screen.height/2)-(768/2);
	obj.popup = window.open(url,'popUpCari','scrollbars=yes, width=1024, height=768, top='+top+', left='+left);

}
function closeCari(){
	obj.popup.close();
}
*/

function cari(url) {
	$.fancybox.open({
		href : url,
		'width'  : screen.width - 200,
		type : 'iframe',
		allowfullscreen : 'true',
		padding : 5
	});

}
function closeCari(){
	$.fancybox.close();
}

function fullPopup(url)
{
	var width = screen.width-200;
  	var height = screen.height-300;
	
	var left = (screen.width/2)-(width/2);
  	var top = (screen.height/2)-(height/2);
	
	//obj.popup = window.open(url,'popUpCari','scrollbars=yes, width='+width+', height='+height+', top='+top+', left='+left);
	obj.popup = window.open(url,'_blank');
}

function deleteThis(url) {
	if(confirm("Are you sure?")) {
		window.location=url;	
	}
	else
		return false;
}

function validasiThis(url) {
	if(confirm("Anda yakin ingin menghapus data tersebut?")) {
		window.location=url;	
	}
	else
		return false;
}

function timeFormat(obj, maxRange)
{
	var str = obj.value;
	var solid = false;
	var toChar = 0;
	for (x=0; x< str.length; x++)
	{	
		if (str.charAt(x) >= 0 && str.charAt(x) <= 9 ) {
			solid = true;
		}
		else {
			toChar = x;		
			solid = false;
		}
	}
	if (!solid) {
		str = str.substr(0, toChar);
	}
	obj.value = str;
	if (parseFloat(str) > parseFloat(maxRange))
		obj.value = '';
}

function printTable(tableName) {
     //var printContents = document.getElementsByClassName(tableName).innerHTML;
     var printContents = document.getElementById(tableName).innerHTML;
     var originalContents = document.body.innerHTML;

	alert(tableName);
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
function setFooter(){
	var screenHeight = document.body.offsetHeight;
	var windowHeight = screen.height;
	
	var heightJenis = document.getElementById("menudiv").offsetHeight - document.getElementById("content").offsetHeight;
	var pageHeight = 0;
	
	if(heightJenis > 0) {
		pageHeight = document.getElementById("menudiv").offsetHeight +  document.getElementById("header").offsetHeight + 40;
	}
	else{
		pageHeight = document.getElementById("content").offsetHeight +  document.getElementById("header").offsetHeight + 40;
	}
	
	if(screenHeight > pageHeight){
		document.getElementById("footer").style.position='fixed';
		document.getElementById("footer").style.bottom='0px';
	}
	else{
	
		document.getElementById("footer").style.position='absolute';
		document.getElementById("footer").style.top=pageHeight + 20 +'px';
	}
}




