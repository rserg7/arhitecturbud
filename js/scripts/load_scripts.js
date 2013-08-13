// JavaScript Document
$(document).ready(function(){
    jscssfile();
});

window.onresize = function(event) {
    jscssfile();
}


function jscssfile() {
	ww = $(window).width();

function loadjscssfile(filename, filetype){
 if (filetype=="js"){ 
  var fileref=document.createElement('script')
  fileref.setAttribute("type","text/javascript")
  fileref.setAttribute("src", filename)
 }
 if (typeof fileref!="undefined")
  document.getElementsByTagName("head")[0].appendChild(fileref)
}

	if (ww > 980 && ww <= 1250){
		loadjscssfile("js/scripts/main_menu.js", "js")
		loadjscssfile("js/scripts/box1280.js", "js")
		loadjscssfile("js/scripts/sub_menu_medium.js", "js")
	}
	
	else if (ww > 1251){
		loadjscssfile("js/scripts/main_menu.js", "js")
		loadjscssfile("js/scripts/box1280.js", "js")
		loadjscssfile("js/scripts/sub_menu.js", "js")
	}
		
}	
