$(document).ready(
	function(){
		console.log("App.js se charge.");
		$(function(){
			setInterval(function(){
				$(".slider ul").animate({marginLeft: -780}, 1000, function(){
					$(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
					console.log("Je fonctionne.");
				});
			}, 5000);
		});

});

