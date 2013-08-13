// JavaScript Document
		$(document).ready(function() {			
			positionMenu();
    	});
		
		window.onresize = function(event) {
			positionMenu();
		}
		
		function positionMenu() {

			TweenMax.to($('.top-bar-section'), 0, {y:-100, autoAlpha:0});
			
			$('.top-bar').hover(function(){
				TweenMax.to($('#logo'), 0.5, {y:50, autoAlpha:0});
				TweenMax.to($('.top-bar-section'), 0.5, {y:-35, autoAlpha:1});
			}, function() {
				TweenMax.to($('#logo'), 0.5, {y:0, autoAlpha:1});
				TweenMax.to($('.top-bar-section'), 0.5, {y:-100, autoAlpha:0});
			});
		}
		