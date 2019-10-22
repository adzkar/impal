var i = 0;
function shSlide(){
	var element = document.getElementById("slide");
	if (i==0){
		element.setAttribute('style', 'opacity:1');
		element.style.width = "400px";
		i+=1;
	}else{
		element.style.width = "0px";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:0');},200);	
		i=0;
	}			
}
var j = 0;
function shLoginCustomer(){
	var element = document.getElementById("login-container");
	if (j==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		j+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		j=0;
	}
}
var k = 0;
function shRegisterCustomer(){
	var element = document.getElementById("register-container");
	if (j==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		j+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		j=0;
	}
	console.log('hola')
}
function bothLogSlide(){
	shSlide();
	shLoginCustomer();
}
function bothRegSlide(){
	shSlide();
	shRegisterCustomer();
}
function register() {
	console.log('hola')
}