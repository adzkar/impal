var now = new Date();
var weeklater = new Date();
weeklater.setDate(now.getDate() + 8);
var day = ("0" + now.getDate()).slice(-2);
var month = ("0" + (now.getMonth() + 1)).slice(-2);
var dayWeeklater = ("0" + weeklater.getDate()).slice(-2);
var monthWeeklater = ("0" + (weeklater.getMonth() + 1)).slice(-2);
var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
var week = weeklater.getFullYear()+"-"+(monthWeeklater)+"-"+(dayWeeklater) ;
function tglmain(){
		if($('#tglMain').val() == ''){
			$('#tglMain').val(today);
		}
		$('#tglMain').change(function(){
		  if(!moment($('#tglMain').val().toString()).isBetween(today.toString(), week.toString())){
			 showNotification('Peringatan','Isi jadwal harus dalam rentang 1 minggu dari hari ini',0,'Ya');
			 $('#tglMain').val(today);
		  }
		});
		$('#no-confirm').click(function(){
			hideNotification();
		});
}

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
var m = 0;
function shTambahLapangan(){
	var element = document.getElementById("tambah-lap-section");
	if (m==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		m+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		m=0;
	}
}
function shTambahGor(){
	var element = document.getElementById("tambah-gor-section");
	if (m==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		m+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		m=0;
	}
}
q= 0
function shRekening(){
	var element = document.getElementById("rekening-section");
	if (q==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		q+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		q=0;
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
var l = 0;
function shPembayaran(){
	var element = document.getElementById("paid-container");
	if (l==0){
		element.style.display = "block";
		window.setTimeout(function(){element.setAttribute('style', 'opacity:1');},100);	
		l+=1;
	}else{
		element.setAttribute('style', 'opacity:0');
		window.setTimeout(function(){element.style.display = "none";},100);	
		
		l=0;
	}
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
function showNotification(tittle,message,yesText,noText){
	$('.confirm_box').show();
	window.setTimeout(function(){$('.confirm_box').css('opacity', '1');},200);	
	$('#title-confirm').html(tittle);
	$('#text-confirm').html(message);
	if(!yesText){
		$('#yes-confirm').hide();
	}else{
		$('#yes-confirm').show();
	}
	if(!noText){
		$('#no-confirm').hide();
	}else{
		$('#no-confirm').show();
	}
	$('#yes-confirm').html(yesText);
	$('#no-confirm').html(noText);
}
function hideNotification(){
	$('.confirm_box').css('opacity', '0');
	window.setTimeout(function(){$('.confirm_box').hide();},200);	
	$('#title-confirm').html('');
	$('#text-confirm').html('');
	$('#yes-confirm').hide();
	$('#no-confirm').hide();
	$('#yes-confirm').html('');
	$('#no-confirm').html('');
}