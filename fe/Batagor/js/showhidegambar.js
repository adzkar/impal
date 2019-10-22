function showgambar(idgambar) {
  var element = document.getelementbyid(idgambar);
  element.classlist.remove("img-hide");
  window.settimeout(function(){element.setattribute('style', 'opacity:1');},300);
  
}
function hidegambar(idgambar) {
  var element = document.getelementbyid(idgambar);
  element.setattribute('style', 'opacity:0');
  window.settimeout(function(){element.classlist.add("img-hide");},300);
  
  
}
var i = 1;
setinterval(function(){
	if(i > 3){
		i-=3;
	}
	var gambar1 = i+1;
	var gambar2 = i+2;
	if(gambar1 > 3){
		gambar1 -= 3;
	}
	if(gambar2 > 3){
		gambar2 -= 3;
	}
	var idgambar1 = "img-"+i;
	var idgambar2 = "img-"+gambar1;
	var idgambar3 = "img-"+gambar2;
	showgambar(idgambar2);
	hidegambar(idgambar1);
	hidegambar(idgambar3);
	i++;
}, 5000);