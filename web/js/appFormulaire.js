function afficherAutre() {
	document.getElementById("autre").style.display="inline";
};

function cacherAutre() {
	document.getElementById("autre").style.display="none";
};

function afficherAutre1() {
	document.getElementById("autre1").style.display="inline";
};


function cacherAutre1() {
	document.getElementById("autre1").style.display="none";
};

$(document).ready(
	function(){
	$('.déroule1').click(function(event){
			//event.preventDefault();
			//$(this).parent().css('background-color','purple');
			$('.text').toggleClass('animation');
			});

	
	$('.déroule2').click(function(event){
			//event.preventDefault();
			//$(this).parent().css('background-color','purple');
			$('.text2').addClass('animation2');
			});
	$('.deroule3').click(function(event){
			//event.preventDefault();
			//$(this).parent().css('background-color','purple');
			$('.text2').removeClass('animation2');
			});
});

